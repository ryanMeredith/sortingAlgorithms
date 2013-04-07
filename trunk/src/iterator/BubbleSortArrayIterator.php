<?php namespace iterator;

class BubbleSortArrayIterator extends ArrayIterator
{
	protected $runDown;
	
	public function __construct(\arrayContainer\ArrayContainer $arrayContainer){
		parent::__construct($arrayContainer);
		$this->runDown = count($this->iArray);
	}
	
	public function isDone()
	{
		$isDone = FALSE;	
		if($this->currentPosition >= $this->runDown){
			if($this->isSorted()){
				$isDone = TRUE;
			}else{
				$this->SortAgain();
			}		
		}
		return $isDone;
	}
	
	protected function SortAgain(){
		$this->runDown--;
		$this->currentPosition = $this->first();
	}
	
	protected function isSorted(){
		$sorted = FALSE;
		if($this->runDown == 0){
			$sorted = TRUE;
		}
		return $sorted;
	}
	
	
}
