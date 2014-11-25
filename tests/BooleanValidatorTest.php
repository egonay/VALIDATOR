<?php
/**
 * Created by PhpStorm.
 * User: Elo
 * Date: 24/11/14
 * Time: 17:18
 */

namespace Tests\Php\Validator;

use Php\Validator\BooleanValidator;


/**
 * Class BooleanValidatorTest
 * @package Tests\Php\Validator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testBooleanValidatorIsTrueTrue()
    {
        $boolean = true;
        $result = BooleanValidator::isTrue($boolean);

        $this->assertTrue($result);
    }

    public function testBooleanValidatorIsTrueFalse()
    {
        $boolean = false;
        $result = BooleanValidator::isTrue($boolean);

        $this->assertFalse($result);
    }

    public function testBooleanValidatorIsFalseTrue()
    {
        $boolean = true;
        $result = BooleanValidator::isFalse($boolean);

        $this->assertTrue($result);
    }

    public function testBooleanValidatorIsFalseFalse()
    {
        $boolean = false;
        $result = BooleanValidator::isFalse($boolean);

        $this->assertFalse($result);
    }
} 