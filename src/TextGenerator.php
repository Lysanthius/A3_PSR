<?php

namespace OKLM\StringGenerator;

/**
 * Class TextGenerator
 * @package OKLM\StringGenerator
 */
class TextGenerator {
    /**
     * @var string
     */
    private static $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    public function __construct()
    {

    }

    /**
     * @param int $length
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function generate($length = 20)
    {
        $words = explode(' ', self::$lorem);
        $arrayLoremLength = (count($words)-1);

        $string = '';

        for($i = 0; $i < $length; $i++){
            $string .= $words[rand(0, $arrayLoremLength)].' ';
        }

        return $string;
    }
} 