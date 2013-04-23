<?php
namespace sortContainers;

interface Container
{
	public function setSort($SortObject);

	public function getSort();
	
	public function addToEnd($var);
	
	public function addToStart($var);
	
	public function changeValue($key, $value);
	
	public function shuffleObject();
	
	public function isGreaterThan($key1, $key2);
	
	public function isLessThan($key1, $key2);
	
	public function swapValues($key1, $key2);
	
}
