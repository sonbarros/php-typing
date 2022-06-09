<?php

function __autoload($class_name) 
{
    if(file_exists('App/' . $class_name . '.php')) 
    {
      require_once 'App/' . $class_name . '.php';
    }
}