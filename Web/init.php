<?php
define('BASEURL', 'http://localhost/minutegen');

$LOCATION = array(
    'core'        =>  '/core',
    'controllers' =>  '/controllers',
    'views'       =>  '/views',
    'css'         =>  '/assets/css',
    'js'          =>  '/assets/js',
    'images'      =>  '/assets/images',
);

function path($dirname, $file = Null){
    if ($file){
        return BASEPATH . $GLOBALS['LOCATION'][$dirname] . '/' . $file . '.php';
    } else {
        return BASEPATH . $GLOBALS['LOCATION'][$dirname];
    }
}

function url($path){
    return BASEURL . $GLOBALS['LOCATION'][$path];
}

function stylesheet($name){ return url('css') . '/' . $name . '.css'; }

function script($name){ return url('js') . '/' . $name . '.js'; }

function images($name){ return url('images') . '/' . $name; }
