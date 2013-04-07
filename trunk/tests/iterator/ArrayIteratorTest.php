<?php
require_once dirname(dirname(__FILE__)). '/testBootstrap.php';

class ArrayIteratorTest extends PHPUnit_Framework_TestCase
{
	public function testIterateThroughArray()
	{
		$arrayContainer = $this->getArrayContainer(array("hello", "world"));
		$arrayIterator = new iterator\ArrayIterator($arrayContainer);
		while (!$arrayIterator->isDone()){
			$result[] = $arrayIterator->currentItem();
			$arrayIterator->nextPosition();
		}
		$this->assertEquals(array("hello", "world"), $result);
	}

	public function testIterateThroughNumbersArray()
	{
		$arrayContainer = $this->getArrayContainer(array(5,6,7,8,9));
		$arrayIterator = new iterator\ArrayIterator($arrayContainer);
		while (!$arrayIterator->isDone()){
			$result[] = $arrayIterator->currentItem();
			$arrayIterator->nextPosition();
		}
		$this->assertEquals(array(5,6,7,8,9),$result);
	}
	
	protected function getArrayContainer($array){
		$arrayContainer = new arrayContainer\ArrayContainer();
		$arrayContainer->setArray($array);
		return $arrayContainer;
	}
	 

}
	