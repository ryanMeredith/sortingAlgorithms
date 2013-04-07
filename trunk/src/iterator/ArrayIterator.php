<?php namespace iterator;

class ArrayIterator implements Iterator
{
	protected $currentPosition ;
	protected $iArray; 
	protected $arraySize;
	
	public function __construct(\arrayContainer\ArrayContainer $arrayContainer){
		$this->iArray = $arrayContainer->getArray();
		$this->arraySize = count($this->iArray);
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
		return $this->iArray[$this->currentPosition];
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
		return $this->iArray($this->getNextPosition());
	}
}
