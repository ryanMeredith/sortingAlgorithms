<?php


class AutoLoader
{
    public static function autoLoad($className)
    {
		$filename = dirname(__FILE__). "/".  str_replace('\\', '/', $className) . '.php';
		if (is_readable($filename)) {
			require_once $filename;
		}
    }	
	
}
spl_autoload_register(array("AutoLoader", "autoload"));

?>
