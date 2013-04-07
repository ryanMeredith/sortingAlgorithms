<?php
require_once dirname(dirname(__FILE__)). '/testBootstrap.php';

class ReverseArrayIteratorTest extends PHPUnit_Framework_TestCase
{
	public function testIterateThroughArray()
	{
		$arrayContainer = $this->getArrayContainer(array("hello", "world"));
		$arrayIterator = new iterator\ReverseArrayIterator($arrayContainer);
		while (!$arrayIterator->isDone()){
			$result[] = $arrayIterator->currentItem();
			$arrayIterator->nextPosition();
		}
		$this->assertEquals($result, array("world", "hello"));
	}
	
	public function testIterateThroughNumbersArray()
	{
		$arrayContainer = $this->getArrayContainer(array(5,6,7,8,9));
		$arrayIterator = new iterator\ReverseArrayIterator($arrayContainer);
		while (!$arrayIterator->isDone()){
			$result[] = $arrayIterator->currentItem();
			$arrayIterator->nextPosition();
		}
		$this->assertEquals($result, array(9,8,7,6,5));
	}
	
	protected function getArrayContainer($array){
		$arrayContainer = new arrayContainer\ArrayContainer();
		$arrayContainer->setArray($array);
		return $arrayContainer;
	}

}
	