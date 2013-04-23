<?php 

namespace bubbleSort\refactoredCode;

class ForwardBubbleSort extends BubbleSort
{

	public function executeSort(\sortContainers\Container $container)
	{
		$iterator = new \iterator\BubbleSortArrayIterator($container);
		while (!$iterator->isDone()){
			$currentItem = $iterator->currentItem();
			$nextItem = $iterator -> getNextItem();
			if($iterator->container->isGreaterThan($currentItem, $nextItem)){
				$iterator->container->swapValues($iterator-> getCurrentPosition(), $iterator-> getNextPosition());	
			}
			$iterator->nextPosition();
		}
		return $iterator->container->getSort();
	}
	
}


?>