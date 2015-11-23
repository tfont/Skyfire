<?php

/**
 * Stash Queries - PHP SQL layer using stash queries (file) design integration
 * PHP Version 5.3.6+
 * @package Skyfire/DB
 * @link https://github.com/SkyfirePHP/DB The Skyfire DB GitHub project
 * @author Travis Font (tfont) <travis.font@gmail.com>
 * @license MIT
 */

// not defined from Skyfire or outside framework
if (!defined('PARENT_DIRECTORY'))
{
    define('PARENT_DIRECTORY', dirname(getcwd()));
}

// SPL autoloader
spl_autoload_register(function ($classname)
{
    // __DIR__ is only in PHP 5.3+
    // closures / anonymous functions only in PHP 5.3+
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.$classname.'.php';
    if (is_readable($filename))
    {
        require_once $filename;
    }
}, TRUE, TRUE);

final class DB extends DB_Connector
{
    public static $exceptionType;

    public static function utf8($text)
    {
        return mb_convert_encoding($text, "HTML-ENTITIES", 'UTF-8');
    }

    public static function query($statement, array $parameters = array(NULL))
    {
        return new RawQuery;
    }

    public static function select($sql_file)
    {
        return new ProcessQuery($sql_file, 'select');
    }

    public static function update($sql_file)
    {
        return new ProcessQuery($sql_file, 'update');
    }

    // this type needs to be a display type (e.g. DISPLAY_TEST)
    public static function setExceptionType($type)
    {
        self::$exceptionType = $type;
    }
}