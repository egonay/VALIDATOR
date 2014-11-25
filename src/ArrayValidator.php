<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 17:36
 */

namespace Php\Validator;


class ArrayValidator
{
    public static function isEmpty($array){
        return empty($array);
    }

    public static function isEqual($array, $test)
    {
        return count($array) === $test;
    }

    public static function isAbove($array, $test)
    {
        return count($array) > $test;
    }

    public static function isAboveOrEqual($array, $test)
    {
        return count($array) >= $test;
    }

    public static function isLess($array, $test)
    {
        return count($array) < $test;
    }

    public static function isLessOrEqual($array, $test)
    {
        return count($array) <= $test;
    }

    public static function isBetween($array, $test, $test2)
    {
        return $test < count($array) && count($array) < $test2;
    }

    public static function keyExists($key, $array)
    {
        return array_key_exists($key, $array) === true;
    }

    public static function elementIsInTab($test, $array)
    {
        return in_array($test, $array) === true;
    }
}
