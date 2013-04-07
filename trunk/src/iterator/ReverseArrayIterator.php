<?php namespace iterator;

class ReverseArrayIterator implements Iterator
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
		return ($this->arraySize -1);
	}
	
	public function nextPosition()
	{
		$this->currentPosition--;
	}
	
	public function isDone()
	{
		$isDone = FALSE;	
		if($this->currentPosition < 0){
			$isDone = TRUE;
		}
		return $isDone;
	}
	
	public function currentItem()
	{
		return $this->iArray[$this->currentPosition];
	}
}
