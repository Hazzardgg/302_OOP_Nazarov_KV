<?php

class Truncator
{
    public static $defaultOptions = [
        'separator' => '...',
        'length' => 50
    ];

    public function __construct($options = [])
    {
        self::$defaultOptions = array_merge(self::$defaultOptions, $options);
    }

    public function truncate($string, $options = [])
    {
        $currentOption = array_merge(self::$defaultOptions, $options);
        $length = $currentOption['length'];
        $separator = $currentOption['separator'];

        if (strlen($string) <= $length) {
            return $string;
        }

        return substr($string, 0, $length - strlen($separator)) . $separator;
    }
}
