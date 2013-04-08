<?php namespace bubbleSort\refactoredCode;

class ForwardBubbleSort extends BubbleSort
{

	public function executeSort(\arraycontainer\ArrayContainer $arrayContainer)
	{
		$bubbleSortIterator = new \iterator\BubbleSortArrayIterator($arrayContainer);
		while (!$bubbleSortIterator->isDone()){
			$currentItem = $bubbleSortIterator->currentItem();
			$nextItem = $bubbleSortIterator -> getNextItem();
			if($this->needsSwapping($currentItem, $nextItem)){
				$bubbleSortIterator->arrayContainer->changeArrayValue($bubbleSortIterator-> getNextPosition(),$currentItem);
				$bubbleSortIterator->arrayContainer->changeArrayValue($bubbleSortIterator-> getCurrentPosition(), $nextItem);
			}
			$bubbleSortIterator->nextPosition();
		}
		return $bubbleSortIterator->arrayContainer->getArray();
	}
	
}


?>