<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 19/12/17
 * Time: 09:33
 */

namespace WCS;


use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testMath ()
    {
        $math = new Math('un');
        $this->assertEquals('deux',$math->add('un'));
    }
}