<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 25/11/14
 * Time: 08:12
 */

namespace Tests\Php\Validator;

use Php\Validator\DateTimeValidator;


/**
 * Class DateTimeValidatorTest
 * @package Tests\Php\Validator
 */
class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testDateTimeValidatorIsDateFormatTrue()
    {
        $date = "2014-10-22";
        $result = DateTimeValidator::isDateFormat($date);

        $this->assertTrue($result);
    }

    public function testDateTimeValidatorIsDateFormatFalse()
    {
        $date = "2014-13-37";
        $result = DateTimeValidator::isDateFormat($date);

        $this->assertFalse($result);
    }

    public function testDateTimeValidatorIsRightDateTrue()
    {
        $datetime = "2014-11-24";
        $result = DateTimeValidator::isRightDate($datetime, "2014-11-24");

        $this->assertTrue($result);
    }

    public function testDateTimeValidatorIsRightDateFalse()
    {
        $datetime = "2014-11-24";
        $result = DateTimeValidator::isrightDate($datetime, "2014-11-16");

        $this->assertFalse($result);
    }
} 