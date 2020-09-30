<?php

declare(strict_types=1);

namespace Wumvi\Utils;

class DirSplitName
{
    public static function get(array $parts): string
    {
        $result = '';
        foreach ($parts as $part) {
            $len = strlen($part . '');
            $len = $len + $len % 2;
            $result .= chunk_split(str_pad($part . '', $len, '0', STR_PAD_LEFT), 2, '/');
        }

        return $result;
    }

    public static function hashToChunk(string $hash, $prefixCount = 4): string
    {
        $prefix = implode('/', str_split(substr($hash, 0, $prefixCount * 2), 2)) . '/';

        return $prefix . substr($hash, $prefixCount * 2) . '/';
    }
}
