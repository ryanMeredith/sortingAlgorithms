<?php namespace arrayContainer;

class ArrayContainer
{
	protected $array = array();
	
	public function setArray(array $array)
	{
		$this->array = $array;
	}
	
	public function getArray()
	{
		return $this->array;
	}
	
	public function addToArray($var)
	{
		array_push($this->array, $var);
	}
	
	public function addToStartofArray($var)
	{
		array_unshift($this->array, $var);
	}
	
	public function changeArrayValue($key, $value)
	{
		if(array_key_exists($key, $this->array)){
			$this->array[$key] = $value;
		}
	}
	
	public function shuffleArray()
	{
		shuffle($this->array);
	}
	
	public function sortArray()
	{
		sort($this->array);
	}
	
	public function reverseSortArray()
	{
		rsort($this->array);
	}
		
}
