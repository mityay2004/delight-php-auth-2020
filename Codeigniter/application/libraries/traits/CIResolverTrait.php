<?php

namespace libraries\traits;

defined('BASEPATH') OR exit('No direct script access allowed');

trait CIResolverTrait 
{
    public function __get($name) {
        $ci = get_instance();
        if (isset($ci->$name)) {
            return $ci->$name;
        }
    }
}
