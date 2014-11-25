<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 17:13
 */

namespace Php\Validator;


/**
 * Class BooleanValidator
 * @package Php\Validator
 */
class BooleanValidator
{
    /**
     * @param $boolean
     * @return bool
     */
    public static function isTrue($boolean){
        return $boolean === true;
    }

    /**
     * @param $boolean
     * @return bool
     */
    public static function isFalse($boolean){
        return $boolean === true;
    }
}
