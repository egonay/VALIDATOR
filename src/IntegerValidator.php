<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 23/11/14
 * Time: 19:37
 */

namespace Php\Validator;


/**
 * Class IntegerValidator
 * @package Php\Validator
 */
class IntegerValidator
{
    /**
     * @param $integer
     * @param $test
     * @return bool
     */
    public static function equal($integer, $test){
        return $integer === $test;
    }

    /**
     * @param $integer
     * @param $test
     * @return bool
     */
    public static function above($integer, $test)
    {
        return $integer > $test;
    }

    /**
     * @param $integer
     * @param $test
     * @return bool
     */
    public static function less($integer, $test)
    {
        return $integer < $test;
    }

    /**
     * @param $integer
     * @param $test
     * @param $test2
     * @return bool
     */
    public static function between($integer, $test, $test2)
    {
        return $test < $integer && $integer < $test2;
    }

    /**
     * @param $test
     * @return bool
     */
    public static function lessThanOrEqualTo($test)
    {
        return $test <= 0;
    }

    /**
     * @param $test
     * @return bool
     */
    public static function moreThanOrEqualTo($test)
    {
        return $test >= 0;
    }
}
