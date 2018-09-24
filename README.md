# Version
Latest version of Bludit in JSON format.

https://version.bludit.com

## Command line

```
$ curl --silent https://version.bludit.com | jq
```

output
```
{
  "stable": {
    "version": "3.0.0",
    "codeName": "Hops",
    "build": "20180921",
    "releaseDate": "2018-09-21",
    "downloadLink": "https://df6m0u2ovo2fu.cloudfront.net/builds/bludit-3-0-0.zip",
    "downloadMirrorLink": "",
    "changelogLink": "https://github.com/bludit/bludit/releases/tag/3.0.0",
    "github": "https://github.com/bludit/bludit/releases/tag/3.0.0",
    "blog": "https://blog.bludit.com/bludit-3-0-0"
  },
  "beta": {
    "version": "",
    "codeName": "",
    "build": "",
    "releaseDate": "",
    "downloadLink": "",
    "downloadMirrorLink": "",
    "changelogLink": "",
    "github": "",
    "blog": ""
  },
  "alpha": {
    "version": "",
    "codeName": "",
    "build": "",
    "releaseDate": "",
    "downloadLink": "",
    "downloadMirrorLink": "",
    "changelogLink": "",
    "github": "",
    "blog": ""
  }
}
```
