<?php
require_once dirname(dirname(__FILE__)). '/testBootstrap.php';

class ArrayContainerTest extends PHPUnit_Framework_TestCase
{
	protected $arrayContainer;
	
	public function setup()
	{
		$this->arrayContainer = new arrayContainer\ArrayContainer();
	}
	
	public function testSetArray()
	{
		$this->arrayContainer->setArray(array(1,2,3));
		$this->assertEquals(array(1,2,3), $this->arrayContainer->getArray());
	}
	
	public function testAddToArray()
	{
		$this->arrayContainer->setArray(array(1,2,3));
		$this->arrayContainer->addToArray(4);
		$this->assertEquals(array(1,2,3,4), $this->arrayContainer->getArray());
	}
	
		public function testAddToArrayAnArray()
	{
		$this->arrayContainer->setArray(array(1,2,3));
		$this->arrayContainer->addToArray(array(4,5));
		$this->assertEquals(array(1,2,3,array(4,5)), $this->arrayContainer->getArray());
	}
	
	public function testAddToStartOfArray()
	{
		$this->arrayContainer->setArray(array(1,2,3));
		$this->arrayContainer->addToStartofArray(4);
		$this->assertEquals(array(4,1,2,3), $this->arrayContainer->getArray());
	}
	
	public function testChangeArrayValue()
	{
		$this->arrayContainer->setArray(array(1,2,3));
		$this->arrayContainer->changeArrayValue(1,5);
		$this->assertEquals(array(1,5,3), $this->arrayContainer->getArray());
	}
	
	public function testShuffleArray()
	{
		$this->arrayContainer->setArray(array(1,2,3));
		$this->arrayContainer->shuffleArray();
		$this->assertContains(1,$this->arrayContainer->getArray());
		$this->assertContains(2,$this->arrayContainer->getArray());
		$this->assertContains(3,$this->arrayContainer->getArray());
	}
	
	public function testSortedArray()
	{
		$this->arrayContainer->setArray(array(3,2,1));
		$this->arrayContainer->sortArray();
		$this->assertEquals(array(1,2,3), $this->arrayContainer->getArray());
	}
	
	public function testReverseSortedArray()
	{
		$this->arrayContainer->setArray(array(1,2,3));
		$this->arrayContainer->reverseSortArray();
		$this->assertEquals(array(3,2,1), $this->arrayContainer->getArray());
	}
}
