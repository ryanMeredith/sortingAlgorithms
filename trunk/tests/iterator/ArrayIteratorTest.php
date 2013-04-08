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
	
	public function testAddToStartOfArray()
	{
		$arrayContainer = $this->getArrayContainer(array(5,6,7,8,9));
		$arrayIterator = new iterator\ArrayIterator($arrayContainer);
		while (!$arrayIterator->isDone()){
			$array = $arrayIterator->arrayContainer->addToStartofArray(1);
			$result[] = $arrayIterator->currentItem();
			$arrayIterator->nextPosition();
		}
		$this->assertEquals(array(1,1,1,1,1,5,6,7,8,9),$arrayIterator->arrayContainer->getArray());
	}
	
	public function testAddToEndOfArray(){
		$arrayContainer = $this->getArrayContainer(array(5,6,7,8,9));
		$arrayIterator = new iterator\ArrayIterator($arrayContainer);
		while (!$arrayIterator->isDone()){
			$result[] = $arrayIterator->currentItem();
			$arrayIterator->nextPosition();
			$array = $arrayIterator->arrayContainer->addToArray(1);
		}
		$this->assertEquals(array(5,6,7,8,9,1,1,1,1,1),$arrayIterator->arrayContainer->getArray());
	}
	
	public function testChangeArray(){
		$arrayContainer = $this->getArrayContainer(array(5,6,7,8,9));
		$arrayIterator = new iterator\ArrayIterator($arrayContainer);
		while (!$arrayIterator->isDone()){
			$result[] = $arrayIterator->currentItem();
			$arrayIterator->nextPosition();
			$array = $arrayIterator->arrayContainer->changeArrayValue(1,2);
		}
		$this->assertEquals(array(5,2,7,8,9),$arrayIterator->arrayContainer->getArray());
	}
	
	protected function getArrayContainer($array){
		$arrayContainer = new arrayContainer\ArrayContainer();
		$arrayContainer->setArray($array);
		return $arrayContainer;
	}
	 

}
	