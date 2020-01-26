<?php

/**
 * Generates static themes.json and plugins.json
 *
 * Format:
 * data
 *     items (themes/plugins) - Sorted new to old
 *     authors
 * meta
 *     last_updated
 *     items_count
 *     authors_count
 */

define('DS', DIRECTORY_SEPARATOR);

function isCommandLineInterface(): bool
{
    return (php_sapi_name() === 'cli');
}

function logMessage(string $message, bool $shouldExit = false)
{
    error_log(gmdate("Y-m-d\TH:i:s\Z") . "\t$message" . PHP_EOL, 3, __DIR__ . '/build.log');
    if ($shouldExit) {
        // Cleanup
        deleteRecursive(__DIR__ . '/tmp');
        exit;
    }
}

function deleteRecursive($source, $deleteDirectory = true)
{
    if (!file_exists($source)) {
        return false;
    }

    foreach (
        new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        ) as $item
    ) {
        if ($item->isFile() || $item->isLink()) {
            unlink($item);
        } else {
            rmdir($item);
        }
    }

    if ($deleteDirectory) {
        return rmdir($source);
    }
    return true;
}

function download($url, $destination): bool
{
    $fp = fopen($destination, 'w+');
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res = curl_exec($ch);
    curl_close($ch);
    if ($res === false) {
        return false;
    }
    return true;
}

if (! isCommandLineInterface()) {
    exit("Only CLI Access Allowed");
}

if (! class_exists('ZipArchive')) {
    logMessage("PHP Zip Extension not found", true);
}

if (! mkdir(__DIR__ . "/tmp", 0755)) {
    logMessage("No write access", true);
}

$packageTypes = [
    'themes',
    'plugins'
];

foreach ($packageTypes as $type) {
    $allPackages = [];
    $packagePath = __DIR__ . "/tmp/$type.zip";
    $url = "https://github.com/bludit/$type-repository/archive/master.zip";
    if (! download($url, $packagePath)) {
        logMessage("Download failed: $url", true);
    }

    $zip = new ZipArchive();
    $res = $zip->open($packagePath);
    if ($res === true) {
        $zip->extractTo(__DIR__ . '/tmp/');
        $zip->close();
    } else {
        logMessage("Zip Extract failed: $packagePath", true);
    }

    $items = glob(__DIR__ . "/tmp/$type-repository-master/items/*");
    $authors = glob(__DIR__ . "/tmp/$type-repository-master/authors/*.json");
    if (empty($items) || empty($authors)) {
        logMessage("$type: Authors/Items are empty", true);
    }

    foreach ($items as $item) {
        $itemName = basename($item);
        $allPackages['data']['items'][$itemName] = json_decode(file_get_contents($item . DS . 'metadata.json'), true);

        // Fix inconsistency. Some plugins have release_date in format yyyy.mm.dd instead of yyyy-mm-dd
        $allPackages['data']['items'][$itemName]['release_date'] = str_replace('.', '-', $allPackages['data']['items'][$itemName]['release_date']);

        if (file_exists($item . DS . 'screenshot.png')) {
            $allPackages['data']['items'][$itemName]['screenshot_git'] = "https://raw.githubusercontent.com/bludit/$type-repository/master/items/$itemName/screenshot.png";
        } else {
            $allPackages['data']['items'][$itemName]['screenshot_git'] = "";
        }
    }

    // Sort items by release_date DESC
    uasort($allPackages['data']['items'], function ($element1, $element2) {
        return strtotime($element2['release_date']) - strtotime($element1['release_date']);
    });

    foreach ($authors as $author) {
        $authorName = pathinfo($author)['filename'];
        $allPackages['data']['authors'][$authorName] = json_decode(file_get_contents($author), true);
    }

    // Metadata
    $allPackages['meta']['last_updated'] = time();
    $allPackages['meta']['items_count'] = count($allPackages['data']['items']);
    $allPackages['meta']['authors_count'] = count($allPackages['data']['authors']);

    file_put_contents(__DIR__ . "/$type.json", json_encode($allPackages));
}

// Cleanup
deleteRecursive(__DIR__ . '/tmp');
