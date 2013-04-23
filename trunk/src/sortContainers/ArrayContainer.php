<?php namespace sortContainers;

class ArrayContainer implements \sortContainers\Container
{
	protected $array = array();
	
	public function setSort($array)
	{
		$this->array = $array;
	}
	
	public function getSort()
	{
		return $this->array;
	}
	
	public function addToEnd($var)
	{
		array_push($this->array, $var);
	}
	
	public function addToStart($var)
	{
		array_unshift($this->array, $var);
	}
	
	public function changeValue($key, $value)
	{
		if(array_key_exists($key, $this->array)){
			$this->array[$key] = $value;
		}
	}
	
	public function shuffleObject()
	{
		shuffle($this->array);
	}
	
	
	public function isGreaterThan($key1, $key2){
		$greaterThan = false;
		if($this->array[$key1] > $this->array[$key2]){
			$greaterThan = true;
		}
		return $greaterThan;
	}
	
	public function isLessThan($key1, $key2){
		$lessThan = false;		
		if($this->array[$key1] < $this->array[$key2]){
			$lessThan = true;
		}
		return $lessThan;
	}
	
	public function swapValues($key1, $key2){
		$value1 = $this->array[$key1];
		$value2 = $this->array[$key2];
		$this->array[$key1] = $value2;
		$this->array[$key2] = $value1;
	}
	
	public function forwardSort()
	{
		sort($this->array);
	}
	
	public function reverseSort()
	{
		rsort($this->array);
	}
	
		
}
