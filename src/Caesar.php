<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 19/12/17
 * Time: 10:09
 */

namespace WCS;


class Caesar
{
    private $shift;

    public function __construct(int $shift)
    {
        $this->shift = $shift;
    }

    public function encrypt(string $stringToEncrypt): string
    {
        $result = '';
        $letters = str_split($stringToEncrypt);
        foreach ($letters as $letter) {
            $ascii = ord($letter);
            if ($ascii >= 65 && $ascii <= 90) {
                $calc = $ascii - 65 + $this->shift;
                $tmp = $calc % 26;
                $ascii = $tmp + 65;
                $result .= chr($ascii);
            } elseif ($ascii >= 97 && $ascii <= 122) {
                $calc = $ascii - 97 + $this->shift;
                $tmp = $calc % 26;
                $ascii = $tmp + 97;
                $result .= chr($ascii);
            } else {
                $result .= $letter;
            }
        }

        return $result;
    }

}