<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 25/11/14
 * Time: 08:11
 */

namespace Php\Validator;

use DateTime;

/**
 * Class DateTimeValidator
 * @package Php\Validator
 */
class DateTimeValidator extends DateTime
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public static function isDateFormat($date) {
        $datetime = DateTime::createFromFormat('Y-m-d', $date);
        return $datetime && $datetime->format('Y-m-d') == $date;
    }

    /**
     * @param \DateTime $datetime
     * @param \DateTime $test
     * @return bool
     */
    public static function isRightDate($datetime, $test)
    {
        return $datetime === $test;
    }

    /**
     * @param \DateTime $datetime
     * @param \DateTime $test
     * @return bool
     */
    public static function isAbove($datetime, $test)
    {
        return $datetime > $test;
    }

    /**
     * @param \DateTime $datetime
     * @param \DateTime $test
     * @return bool
     */
    public static function isLess($datetime, $test)
    {
        return $datetime < $test;
    }

    /**
     * @param \DateTime $datetime
     * @param \DateTime $test
     * @param \DateTime $test2
     * @return bool
     */
    public static function isBetween($datetime, $test, $test2)
    {
        return $test < $datetime && $datetime < $test2;
    }
}
