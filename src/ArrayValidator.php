<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 17:36
 */

namespace Php\Validator;


/**
 * Class ArrayValidator
 * @package Php\Validator
 */
class ArrayValidator
{
    /**
     * @param $array
     * @return bool
     */
    public static function isEmpty($array)
    {
        return empty($array);
    }

    /**
     * @param array $array
     * @param int $test
     * @return bool
     */
    public static function isEqual($array, $test)
    {
        return count($array) === $test;
    }

    /**
     * @param array $array
     * @param int $test
     * @return bool
     */
    public static function isAbove($array, $test)
    {
        return count($array) > $test;
    }

    /**
     * @param array $array
     * @param int $test
     * @return bool
     */
    public static function isAboveOrEqual($array, $test)
    {
        return count($array) >= $test;
    }

    /**
     * @param array $array
     * @param int $test
     * @return bool
     */
    public static function isLess($array, $test)
    {
        return count($array) < $test;
    }

    /**
     * @param array $array
     * @param int $test
     * @return bool
     */
    public static function isLessOrEqual($array, $test)
    {
        return count($array) <= $test;
    }

    /**
     * @param array $array
     * @param int $test
     * @param int $test2
     * @return bool
     */
    public static function isBetween($array, $test, $test2)
    {
        return $test < count($array) && count($array) < $test2;
    }

    /**
     * @param $key
     * @param array $array
     * @return bool
     */
    public static function keyExists($key, $array)
    {
        return array_key_exists($key, $array) === true;
    }

    /**
     * @param $test
     * @param array $array
     * @return bool
     */
    public static function elementIsInTab($test, $array)
    {
        return in_array($test, $array) === true;
    }
}
