<?php
require_once dirname(dirname(__FILE__)). '/testBootstrap.php';

class ArrayContainerTest extends PHPUnit_Framework_TestCase
{
	protected $arrayContainer;
	
	public function setup()
	{
		$this->arrayContainer = new sortContainers\ArrayContainer();
	}
	
	public function testSetArray()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$this->assertEquals(array(1,2,3), $this->arrayContainer->getSort());
	}
	
	public function testAddToArray()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$this->arrayContainer->addToEnd(4);
		$this->assertEquals(array(1,2,3,4), $this->arrayContainer->getSort());
	}
	
		public function testAddToArrayAnArray()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$this->arrayContainer->addToEnd(array(4,5));
		$this->assertEquals(array(1,2,3,array(4,5)), $this->arrayContainer->getSort());
	}
	
	public function testAddToStartOfArray()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$this->arrayContainer->addToStart(4);
		$this->assertEquals(array(4,1,2,3), $this->arrayContainer->getSort());
	}
	
	public function testChangeArrayValue()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$this->arrayContainer->changeValue(1,5);
		$this->assertEquals(array(1,5,3), $this->arrayContainer->getSort());
	}
	
	public function testShuffleArray()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$this->arrayContainer->shuffleObject();
		$this->assertContains(1,$this->arrayContainer->getSort());
		$this->assertContains(2,$this->arrayContainer->getSort());
		$this->assertContains(3,$this->arrayContainer->getSort());
	}
	
	public function testSortedArray()
	{
		$this->arrayContainer->setSort(array(3,2,1));
		$this->arrayContainer->forwardSort();
		$this->assertEquals(array(1,2,3), $this->arrayContainer->getSort());
	}
	
	public function testReverseSortedArray()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$this->arrayContainer->reverseSort();
		$this->assertEquals(array(3,2,1), $this->arrayContainer->getSort());
	}
	
	public function testIsGreaterThanTrue()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$gt = $this->arrayContainer->isGreaterThan(2, 1);
		$this->assertTrue($gt);
	}
	
	public function testIsGreaterThanFalse()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$gt = $this->arrayContainer->isGreaterThan(1, 2);
		$this->assertFalse($gt);
	}
	
	public function testIsLessThanTrue()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$ls = $this->arrayContainer->isLessThan(1, 2);
		$this->assertTrue($ls);
	}
	
	public function testIsLessThanFalse()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$ls = $this->arrayContainer->isLessThan(2, 1);
		$this->assertFalse($ls);
	}
	
	public function testSwapValues()
	{
		$this->arrayContainer->setSort(array(1,2,3));
		$ls = $this->arrayContainer->swapValues(0,1);
		$sort = $this->arrayContainer->getSort();
		$this->assertEquals(2 , $sort[0]);
		$this->assertEquals(1, $sort[1]);		
	}
}
