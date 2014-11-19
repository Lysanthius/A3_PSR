<?php

namespace OKLM\StringGenerator;

/**
 * Class PasswordGenerator
 * @package OKLM\StringGenerator
 */
class PasswordGenerator
{
    /**
     * @var string
     */
    private static $strengthEasy = 'azertyuiopqsdfghjklmwxcvbn';
    /**
     * @var string
     */
    private static $strengthMedium = 'AZERTYUIOPQSDFGHJKLMWXCVBN';
    /**
     * @var string
     */
    private static $strengthStrong = '$€£%!@#&éè';

    const PASSWORD_EASY = 1;
    const PASSWORD_MEDIUM = 2;
    const PASSWORD_STRONG = 3;

    public function __construct()
    {

    }

    /**
     * @param int $length
     * @param $strength
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function generate($length = 10, $strength)
    {
        if(!in_array($strength, [
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_STRONG,
        ]))
            throw new \Exception("Second argument not correct! (accepted: easy, medium, strong)");


        switch ($strength) {
            case self::PASSWORD_EASY:
                $char = self::$strengthEasy;
                break;
            case self::PASSWORD_MEDIUM:
                $char = self::$strengthEasy.self::$strengthMedium;
                break;
            case self::PASSWORD_STRONG:
                $char = self::$strengthEasy.self::$strengthMedium.self::$strengthStrong;
                break;
        };

        $password = '';

        for($i = 0; $i < $length; $i++){
            $password .= mb_substr($char, mt_rand(0, mb_strlen($char)-1), 1);
        }

        return $password;
    }
} 