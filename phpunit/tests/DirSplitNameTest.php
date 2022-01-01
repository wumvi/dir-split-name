<?php

use PHPUnit\Framework\TestCase;
use Wumvi\Utils\DirSplitName;

class DirSplitNameTest extends TestCase
{
    public function testGet(): void
    {
        $this->assertEquals('01/23/', DirSplitName::split('123'), 'str len 3 chunk size 2');
        $this->assertEquals('12/34/', DirSplitName::split('1234'), 'str len 4 chunk size 2');
        $this->assertEquals('001/234/', DirSplitName::split('1234', 3), 'str len 4 chunk size 3');
        $this->assertEquals('012/345/', DirSplitName::split('12345', 3), 'str len 5 chunk size 3');
        $this->assertEquals('123/456/', DirSplitName::split('123456', 3), 'str len 6 chunk size 3');
    }
}