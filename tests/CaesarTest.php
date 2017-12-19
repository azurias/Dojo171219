<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 19/12/17
 * Time: 10:02
 */

namespace WCS;


use PHPUnit\Framework\TestCase;

class CaesarTest extends TestCase
{
    public function testCaesar()
    {
        $caesar = new Caesar(5);
        $this->assertEquals('GTSOTZW',$caesar->encrypt('BONJOUR'));
        $this->assertEquals('GTSOTZW!',$caesar->encrypt('BONJOUR!'));

    }
    public function testCaesar2()
    {
        $caesar2 = new Caesar(3);
        $this->assertEquals('YZABC',$caesar2->encrypt('VWXYZ'));
    }

}