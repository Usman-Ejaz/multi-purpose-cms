<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

if (! function_exists('breadcrumbs')) 
{
    function breadcrumbs($name, ...$params) 
    {
        return Breadcrumbs::generate($name, $params);
    }
}

