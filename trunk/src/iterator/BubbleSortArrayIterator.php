<?php 
namespace iterator;

class BubbleSortArrayIterator extends ArrayIterator
{
	protected $runDown;
	
	public function __construct(\sortContainers\ArrayContainer $arrayContainer){
		parent::__construct($arrayContainer);
		$this->runDown = count($this->container->getSort())-1;
	}
	
	public function isDone()
	{
		$isDone = false;	
		if($this->currentPosition >= $this->runDown){
			if($this->isSorted()){
				$isDone = true;
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
		$sorted = false;
		if($this->runDown == 0){
			$sorted = true;
		}
		return $sorted;
	}
	
	
}
