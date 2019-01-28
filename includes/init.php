<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 20.10.2016
 * Time: 15:40
 */

//win DS = "\", Mac/Linux DS = "/"
defined('DS') ? null :define('DS', DIRECTORY_SEPARATOR);


defined('SITE_ROOT') ? null : define('SITE_ROOT',$_SERVER['DOCUMENT_ROOT']. 'www' . DS . 'principessa'.DS);
defined('SITE_LAYOUTS') ? null : define('SITE_LAYOUTS',SITE_ROOT.'layouts');
defined('SITE_IMAGES') ? null : define('SITE_IMAGES',SITE_ROOT.DS.'images');


?>