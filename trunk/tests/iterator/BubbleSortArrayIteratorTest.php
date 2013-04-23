<?php
require_once dirname(dirname(__FILE__)). '/testBootstrap.php';

class BubbleSortIteratorTest extends PHPUnit_Framework_TestCase
{

	public function testIterateThroughNumbersArray()
	{
		$arrayContainer = $this->getArrayContainer(array(5,6,7,8,9));
		$arrayIterator = new iterator\BubbleSortArrayIterator($arrayContainer);
		while (!$arrayIterator->isDone()){
			$result[] = $arrayIterator->currentItem();
			$arrayIterator->nextPosition();
		}
		
		$this->assertEquals($result, array(5,6,7,8,9,5,6,7,8,5,6,7,5,6,5,5));
	}
	
	protected function getArrayContainer($array){
		$arrayContainer = new sortContainers\ArrayContainer();
		$arrayContainer->setSort($array);
		return $arrayContainer;
	}

}
	