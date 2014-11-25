<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 15:07
 */

namespace Php\Validator;


/**
 * Class StringValidator
 * @package Php\Validator
 */
class StringValidator
{
    /**
     * @param string $string
     * @param int $test
     * @return bool
     */
    public static function length($string, $test) {
        return strlen($string) === $test;
    }

    /**
     * @param string $string
     * @param int $test
     * @return bool
     */
    public static function lengthIsMoreThan($string, $test) {
        return strlen($string) > $test;
    }

    /**
     * @param string $string
     * @param int $test
     * @return bool
     */
    public static function lengthIsLessThan($string, $test)
    {
        return strlen($string) < $test;
    }

    /**
     * @param string $string
     * @param int $test
     * @param int $test2
     * @return bool
     */
    public static function lengthIsBetween($string, $test, $test2)
    {
        return $test < strlen($string) && strlen($string) < $test2;
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function noSpaceAtBeginningAndEnd($string)
    {
        $string2 = trim($string, ' ');
        return $string === $string2;
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function noSpaceAtAll($string)
    {
        $string2 = trim($string);
        return $string === $string2;
    }
}
