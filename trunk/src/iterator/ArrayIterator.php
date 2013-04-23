<?php namespace iterator;

class ArrayIterator implements Iterator
{
	public $container;
	protected $currentPosition ; 
	protected $arraySize;
	
	public function __construct(\sortContainers\ArrayContainer $arrayContainer){
		$this->container = $arrayContainer;
		$this->arraySize = count($this->container->getSort());
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
		$array = $this->container->getSort();
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
		$array = $this->container->getSort();
		return $array[$this->getNextPosition()];
	}
}
