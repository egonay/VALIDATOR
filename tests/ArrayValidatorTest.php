<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 17:42
 */

namespace Tests\Php\Validator;

use Php\Validator\ArrayValidator;


/**
 * Class ArrayValidatorTest
 * @package Tests\Php\Validator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIsEmptyTrue()
    {
        $array = array();
        $result = ArrayValidator::isEmpty($array);

        $this->assertTrue($result);
    }

    public function testIsEmptyFalse()
    {
        $array = array("Hello", "World");
        $result = ArrayValidator::isEmpty($array);

        $this->assertFalse($result);
    }

    public function testIsEqualTrue()
    {
        $array = array("Hello", "World");
        $test = 2;
        $result = ArrayValidator::isEqual($array, $test);

        $this->assertTrue($result);
    }

    public function testIsEqualFalse()
    {
        $array = array("Hello", "World");
        $test = 4;
        $result = ArrayValidator::isEqual($array, $test);

        $this->assertFalse($result);
    }

    public function testIsAboveTrue()
    {
        $array = array("Hello", "World", "coucou", "php");
        $test = 2;
        $result = ArrayValidator::isAbove($array, $test);

        $this->assertTrue($result);
    }

    public function testIsAboveFalse()
    {
        $array = array("Hello", "World");
        $test = 4;
        $result = ArrayValidator::isAbove($array, $test);

        $this->assertFalse($result);
    }

    public function testIsAboveOrEqualTrue()
    {
        $array = array("Hello", "World", "coucou", "php");
        $test = 4;
        $result = ArrayValidator::isAboveOrEqual($array, $test);

        $this->assertTrue($result);
    }

    public function testIsAboveOrEqualFalse()
    {
        $array = array("Hello", "World");
        $test = 5;
        $result = ArrayValidator::isAboveOrEqual($array, $test);

        $this->assertFalse($result);
    }

    public function testIsLessTrue()
    {
        $array = array("Hello", "World", "coucou", "php");
        $test = 6;
        $result = ArrayValidator::isLess($array, $test);

        $this->assertTrue($result);
    }

    public function testIsLessFalse()
    {
        $array = array("Hello", "World");
        $test = 1;
        $result = ArrayValidator::isLess($array, $test);

        $this->assertFalse($result);
    }

    public function testIsLessOrEqualTrue()
    {
        $array = array("Hello", "World", "coucou", "php");
        $test = 4;
        $result = ArrayValidator::isLessOrEqual($array, $test);

        $this->assertTrue($result);
    }

    public function testIsLessOrEqualFalse()
    {
        $array = array("Hello", "World");
        $test = 1;
        $result = ArrayValidator::isLessOrEqual($array, $test);

        $this->assertFalse($result);
    }

    public function testIsBetweenTrue()
    {
        $array = array("Hello", "World");
        $test = 1;
        $test2 = 18;
        $result = ArrayValidator::isBetween($array, $test, $test2);

        $this->assertTrue($result);
    }

    public function testIsBetweenFalse()
    {
        $array = array("Hello", "World");
        $test = 30;
        $test2 = 45;
        $result = ArrayValidator::isBetween($array, $test, $test2);

        $this->assertFalse($result);
    }

    public function testKeyExistsTrue()
    {
        $array = array(1 => 1, 3 => 8, 4 =>3);
        $result = ArrayValidator::keyExists(3, $array);

        $this->assertTrue($result);
    }

    public function testKeyExistsFalse()
    {
        $array = array("Hello", "World");
        $key = "coucou";
        $result = ArrayValidator::keyExists($key, $array);

        $this->assertFalse($result);
    }

    public function testElementIsInTabTrue()
    {
        $array = array("Hello", "World");
        $result = ArrayValidator::elementIsIntab("World", $array);

        $this->assertTrue($result);
    }

    public function testElementIsInTabFalse()
    {
        $array = array("Hello", "World");
        $result = ArrayValidator::elementIsIntab("coucou", $array);

        $this->assertFalse($result);
    }
}