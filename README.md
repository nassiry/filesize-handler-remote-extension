<div align="center">

# PHP FileSizeHandler - Remote File Extension

![Packagist Downloads](https://img.shields.io/packagist/dt/nassiry/filesize-handler-remote-extension)
![Packagist Version](https://img.shields.io/packagist/v/nassiry/filesize-handler-remote-extension)
![PHP](https://img.shields.io/badge/PHP-%5E8.0-blue)
![License](https://img.shields.io/github/license/nassiry/filesize-handler-remote-extension)

</div>


The **Remote File Extension** for [FileSizeHandler](https://github.com/nassiry/filesize-handler) enables support for retrieving file sizes from HTTP/HTTPS URLs.

## Installation

Install the extension via Composer:

```bash
composer require nassiry/filesize-handler-remote-extension
```
## Usage
```php
use Nassiry\FileSizeUtility\FileSizeHandler;
use Nassiry\FileSizeUtility\Extensions\RemoteFiles;

$handler = FileSizeHandler::create()
    ->from(new RemoteFiles(
        'https://example.com/file.zip'  // URL to the remote file
    ))
    ->formattedSize();

echo $handler; // Output: "12.34 MiB"
```
### Features
- Fetch file sizes from HTTP/HTTPS URLs.
- Seamlessly integrates with the main [FileSizeHandler](https://github.com/nassiry/filesize-handler) library.

### Contributing
Feel free to submit issues or pull requests to improve the package. Contributions are welcome!

### License
This package is open-source software licensed under the [MIT license](LICENSE).
