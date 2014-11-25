<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 15:08
 */

namespace Tests\Php\Validator;

use Php\Validator\StringValidator;


/**
 * Class StringValidatorTest
 * @package Tests\Php\Validator
 */
class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testStringValidatorLengthTrue()
    {
        $test = 22;
        $result = StringValidator::length("Bonjour tout le monde!", $test);

        $this->assertTrue($result);
    }

    public function testStringValidatorLengthFalse()
    {
        $test = 50;
        $result = StringValidator::length("Bonjour tout le monde!", $test);

        $this->assertFalse($result);
    }

    public function testStringValidatorLengthIsMoreThanTrue()
    {
        $test = 5;
        $result = StringValidator::lengthIsMoreThan("Bonjour tout le monde!", $test);

        $this->assertTrue($result);
    }

    public function testStringValidatorLengthIsMoreThanFalse()
    {
        $test = 46;
        $result = StringValidator::lengthIsMoreThan("Bonjour tout le monde!", $test);

        $this->assertFalse($result);
    }

    public function testStringValidatorLengthIsLessThanTrue()
    {
        $test = 78;
        $result = StringValidator::lengthIsLessThan("Bonjour tout le monde!", $test);

        $this->assertTrue($result);
    }

    public function testStringValidatorLengthIsLessThanFalse()
    {
        $test = 5;
        $result = StringValidator::lengthIsLessThan("Bonjour tout le monde!", $test);

        $this->assertFalse($result);
    }

    public function testStringValidatorLengthIsBetweenTrue()
    {
        $test = 3;
        $test2 = 47;
        $result = StringValidator::lengthIsBetween("Bonjour tout le monde!", $test, $test2);

        $this->assertTrue($result);
    }

    public function testStringValidatorLengthIsBetweenFalse()
    {
        $test = 30;
        $test2 = 47;
        $result = StringValidator::lengthIsBetween("Bonjour tout le monde!", $test, $test2);

        $this->assertFalse($result);
    }

    public function testNoSpaceAtBeginningAndEndTrue()
    {
        $result = StringValidator::noSpaceAtBeginningAndEnd("Bonjour tout le monde!");

        $this->assertTrue($result);
    }

    public function testNoSpaceAtBeginningAndEndFalse()
    {
        $result = StringValidator::noSpaceAtBeginningAndEnd(" Bonjour tout le monde! ");

        $this->assertFalse($result);
    }

    public function testNoSpaceAtAllTrue()
    {
        $result = StringValidator::noSpaceAtAll("Bonjourtoutlemonde");

        $this->assertTrue($result);
    }

    public function testNoSpaceAtAllFalse()
    {
        $result = StringValidator::noSpaceAtAll(" Bonjour tout le monde! ");

        $this->assertFalse($result);
    }
}