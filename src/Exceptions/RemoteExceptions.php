<?php


namespace Nassiry\FileSizeUtility\Extensions\Exceptions;

use RuntimeException;

class RemoteExceptions extends RuntimeException
{
    // Invalid URL exception
    public static function invalidURL($url): self
    {
        return new self("Unable to determine file size for URL: {$url}");
    }
}