<?php

namespace sbolch;

class ConsoleHelper
{
    public static function success(string $str): string
    {
        return "\e[32m$str\e[0m";
    }

    public static function error(string $str): string
    {
        return "\e[31m$str\e[0m";
    }

    public static function warning(string $str): string
    {
        return "\e[33m$str\e[0m";
    }

    public static function info(string $str): string
    {
        return "\e[36m$str\e[0m";
    }

    public static function replace(string $str): string
    {
        return "\e[0G$str";
    }

    public static function replaceLine(string $str, int $line = 1): string
    {
        return "\e[0G\e[{$line}A$str";
    }

    public static function progress(int $percentage, int $width = 20): string
    {
        $progress = round($percentage / (100 / $width));
        return str_repeat('█', $progress)
            . str_repeat('░', $width - $progress);
    }
}
