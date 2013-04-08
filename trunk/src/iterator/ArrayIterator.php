<?php namespace iterator;

class ArrayIterator implements Iterator
{
	protected $currentPosition ;
	public $arrayContainer; 
	protected $arraySize;
	
	public function __construct(\arrayContainer\ArrayContainer $arrayContainer){
		$this->arrayContainer = $arrayContainer;
		$this->arraySize = count($this->arrayContainer->getArray());
		$this->currentPosition = $this->first();
	}
	
	public function first()
	{
		return 0;
	}
	
	public function nextPosition()
	{
		$this->currentPosition++;
	}
	
	public function isDone()
	{
		$isDone = FALSE;	
		if($this->currentPosition >= $this->arraySize){
			$isDone = TRUE;
		}
		return $isDone;
	}
	
	public function currentItem()
	{
		$array = $this->arrayContainer->getArray();
		return $array[$this->currentPosition];
	}
	
	public function getNextPosition()
	{
		$currentPosition = $this->currentPosition;
		return $nextPosition = $currentPosition +1;
	}
	
	public function getCurrentPosition()
	{
		return $this->currentPosition;
	}
	
	public function getNextItem(){
		$array = $this->arrayContainer->getArray();
		return $array[$this->getNextPosition()];
	}
}
