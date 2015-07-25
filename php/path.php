<?php

/**
 * Write a function that provides change directory (cd) function for an abstract file system.
 *
 * Notes:
	- Root path is '/'.
	- Path separator is '/'.
	- Parent directory is addressable as '..'.
	- Directory names consist only of English alphabet letters (A-Z and a-z).
 *
 * For example:
	$path = new Path('/a/b/c/d');
	echo $path->cd('../x')->currentPath;
	should display '/a/b/c/x'.
 */
 
class Path
{
    public $currentPath;
	
    public function __construct($path)
    {
        $this->currentPath = $path;
    }	

    public function cd($newPath)
    {
		$currentPathArray = explode('/', $this->currentPath);
		
        $newPathArray = explode('/', $newPath);
		
		foreach($newPathArray as $pathArray) {
			if ($pathArray=='..') {
				array_pop($currentPathArray);
			} else {
				$currentPathArray[] = $pathArray;
			}
		}
		
		$this->currentPath = implode('/', $currentPathArray);
    }
}

$path = new Path('/a/b/c/d');

$path->cd('../x');

echo $path->currentPath;
