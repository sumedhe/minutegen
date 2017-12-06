<?php
define('BASEURL', 'http://localhost/minutegen');

// Generate paths
$LOCATION = array(
    'core'        =>  '/core',
    'controllers' =>  '/controllers',
    'views'       =>  '/views',
    'css'         =>  '/assets/css',
    'js'          =>  '/assets/js',
    'images'      =>  '/assets/images',
    'client'      =>  '/client',
);

function path($dirname, $file = Null){
    if ($file){
        return BASEPATH . $GLOBALS['LOCATION'][$dirname] . '/' . $file . '.php';
    } else {
        return BASEPATH . $GLOBALS['LOCATION'][$dirname];
    }
}

// Generate urls
function url($path){
    return BASEURL . $path;
}

function stylesheet($name){ return url('/assets/css') . '/' . $name . '.css'; }
function script($name){ return url('/assets/js') . '/' . $name . '.js'; }
function client($name){ return url('/client') . '/' . $name . '.js'; }
function images($name){ return url('/assets/images') . '/' . $name; }
