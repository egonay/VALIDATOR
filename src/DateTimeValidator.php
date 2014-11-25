<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 25/11/14
 * Time: 08:11
 */

namespace Php\Validator;

use DateTime;

class DateTimeValidator extends DateTime
{
    public static function isDateFormat($date)
    {
        $datetime = DateTime::createFromFormat('Y-m-d', $date);
        return $datetime && $datetime->format('Y-m-d') == $date;
    }

    public static function isRightDate($datetime, $test)
    {
        return $datetime === $test;
    }

    public static function isAbove($datetime, $test)
    {
        return $datetime > $test;
    }
}
