<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Encoder;

use Symfony\Component\Mime\Exception\RuntimeException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
<<<<<<< HEAD
 *
 * @experimental in 4.3
=======
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
 */
final class Base64ContentEncoder extends Base64Encoder implements ContentEncoderInterface
{
    public function encodeByteStream($stream, int $maxLineLength = 0): iterable
    {
        if (!\is_resource($stream)) {
            throw new \TypeError(sprintf('Method "%s" takes a stream as a first argument.', __METHOD__));
        }

        $filter = stream_filter_append($stream, 'convert.base64-encode', \STREAM_FILTER_READ, [
            'line-length' => 0 >= $maxLineLength || 76 < $maxLineLength ? 76 : $maxLineLength,
            'line-break-chars' => "\r\n",
        ]);
        if (!\is_resource($filter)) {
            throw new RuntimeException('Unable to set the base64 content encoder to the filter.');
        }

        if (stream_get_meta_data($stream)['seekable'] ?? false) {
            rewind($stream);
        }
        while (!feof($stream)) {
            yield fread($stream, 8192);
        }
        stream_filter_remove($filter);
    }

    public function getName(): string
    {
        return 'base64';
    }
}
