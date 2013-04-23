<?php namespace sortContainers;

class ListContainer implements \sortContainers\Container
{
	protected $linkedList;
	
	public function __construct()
	{
		$this->linkedList = new \SplDoublyLinkedList();
	}
	
	public function setSort($list)
	{	
		if ($list instanceof \SplDoublyLinkedList) {
			$this->linkedList = $list;
		}
	}
	
	public function getSort()
	{
		return $this->linkedList;
	}
	
	public function addToEnd($var)
	{
		$this->linkedList->push($var);
	}
	
	public function addToStart($var)
	{
		$this->linkedList->unshift($var);
	}
	
	public function changeValue($key, $value)
	{
		$this->linkedList->offsetSet($key, $value);
	}
	
	public function shuffleObject()
	{
		$count = $this->linkedList->count();
		for($i = 0; $i < $count; $i++){
			$indexes[] = $i;
		}
		shuffle($indexes);
		$this->linkedList->rewind();
		$j = 0;
		foreach ($indexes as $index) {
			$this->swapValues($index, $j);
			$j++;
		}
	}
	
	public function isGreaterThan($key1, $key2){
		$value1 = $this->linkedList->offsetGet($key1);
		$value2 = $this->linkedList->offsetGet($key2);
		$greaterThan = false;
		if($value1 > $value2){
			$greaterThan = true;
		}
		return $greaterThan;
	}
	
	public function isLessThan($key1, $key2){
		$value1 = $this->linkedList->offsetGet($key1);
		$value2 = $this->linkedList->offsetGet($key2);
		$lessThan = false;
		if($value1 < $value2){
			$lessThan = true;
		}
		return $lessThan;
	}
	
	public function swapValues($key1, $key2){
		$value1 = $this->linkedList->offsetGet($key1);
		$value2 = $this->linkedList->offsetGet($key2);
		$this->linkedList->offsetSet($key2, $value1);
		$this->linkedList->offsetSet($key1, $value2);
	}
		
}
