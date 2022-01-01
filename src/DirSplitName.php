<?php
declare(strict_types=1);

namespace Wumvi\Utils;

class DirSplitName
{
    public static function split(string $str, int $chunkSize = 2): string
    {
        $strLen = strlen($str);
        $align = $strLen % $chunkSize;
        $strLenAlign = $strLen + ($align !== 0 ? $chunkSize - $align : 0);
        $strAlign = str_pad($str, $strLenAlign, '0', STR_PAD_LEFT);
        return chunk_split($strAlign, $chunkSize, '/');
    }
}
