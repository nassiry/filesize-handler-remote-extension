<?php
/**
 * Copyright (c) A.S Nassiry
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/nassiry/filesize-handler
 */

namespace Nassiry\FileSizeUtility\Extensions;

use Nassiry\FileSizeUtility\Extensions\Exceptions\RemoteExceptions;
use Nassiry\FileSizeUtility\Sources\FileSourceInterface;

class RemoteFiles implements FileSourceInterface
{
    /**
     * The file URL.
     *
     * @var string
     */
    private string $url;

    /**
     * RemoteFiles constructor.
     *
     * Initializes the file path and checks if the file exists.
     *
     * @param string $url The url to the file.
     *
     * @throws RemoteExceptions If the url does not exist.
     */
    public function __construct(string $url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw RemoteExceptions::invalidURL($url);
        }

        $this->url = $url;
    }

    /**
     * {@inheritdoc}
     * @throws RemoteExceptions If there is an error getting the file size.
     */
    public function getSizeInBytes(): int
    {
        $headers = get_headers($this->url, 1);

        if (!isset($headers['Content-Length'])) {
            throw RemoteExceptions::invalidURL($this->url);
        }

        return (int)$headers['Content-Length'];
    }
}