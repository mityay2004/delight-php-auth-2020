<?php

namespace libraries\common;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autoload 
{
    public static function load($name)
    {
        $nn = './application/' . str_replace('\\', '/', $name) . '.php';
        if (file_exists($nn)) {
            require_once $nn;
        }
    }
}
