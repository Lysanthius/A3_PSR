<?php

namespace Tests\OKLM\StringGenerator;

use OKLM\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check that the parameter length is useful
     *
     * @throws \Exception
     */
    public function testGenerateLength()
    {
        $length = mt_rand(10, 1000);
        $password = PasswordGenerator::generate($length, PasswordGenerator::PASSWORD_STRONG);

        $passwordLength = mb_strlen($password);

        $this->assertEquals($length, $passwordLength);
    }
}