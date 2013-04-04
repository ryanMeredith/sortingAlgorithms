<?php

class AutoLoader
{
    public static function autoLoad($className)
    {
		$maps = self::getDirectoryMap(dirname(__FILE__));
		$filename = $className . ".php";
		if (array_key_exists($filename, $maps)) {
			require_once $maps[$filename];
		}
    }	

	protected function getDirectoryMap( $path = '.')
	{
		$map = array();
		$dir = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::FOLLOW_SYMLINKS);
		$files = new RecursiveIteratorIterator(
			new RecursiveRegexIterator($dir, '#^(?:(?!\.svn).)*(\.*/\w*|.php)$#i'),
			true
		);
		
		foreach ($files as $fileinfo) {
			if (!$fileinfo->isDir()) {
				$map[$fileinfo->getFilename()] = $fileinfo->getPathname();
			}
		}
		return $map;
	}
	
}
spl_autoload_register(array("AutoLoader", "autoload"));

?>
