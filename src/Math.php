<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 19/12/17
 * Time: 09:34
 */

namespace WCS;


class Math
{
    private $number;

    const STRINGTOINT = [
        'zero'=>0,
        'un'=>1,
        'deux'=>2,
        'trois'=>3,
        'quatre'=>4,
        'cinq'=>5,
        'six'=>6,
        'sept'=>7,
        'huit'=>8,
        'neuf'=>9,
        'dix'=>10,];


    public function __construct(string $stringNumber)
    {
        $this->number = self::STRINGTOINT[$stringNumber];

    }

    public function add(string $stringNumber): string
    {
        $number =  self::STRINGTOINT[$stringNumber];
        $result = $number + $this->number ;
        $intToString = array_flip(self::STRINGTOINT);

        return $intToString[$result];


    }

}