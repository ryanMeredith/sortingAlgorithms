<?php
require_once dirname(dirname(__FILE__)). '/testBootstrap.php';

class ListContainerTest extends PHPUnit_Framework_TestCase
{
	protected $listContainer;
	
	public function setup()
	{
		$this->listContainer = new sortContainers\ListContainer();
	}
	
	public function testSetArray()
	{
		$linkedList = new \SplDoublyLinkedList();
		$linkedList->push(1);
		$linkedList->push(2);
		$this->listContainer->setSort($linkedList);
		$containerList = $this->listContainer->getSort();
		$this->assertEquals(2, $containerList->offsetGet(1));
	}
	
	public function testAddToArray()
	{
		$this->listContainer->addToEnd(2);
		$this->listContainer->addToEnd(4);
		$containerList = $this->listContainer->getSort();
		$this->assertEquals(4, $containerList->offsetGet(1));
	}
	
		public function testAddArray()
	{
		$this->listContainer->addToEnd(array("hello" =>"world"));
		$containerList = $this->listContainer->getSort();
		$this->assertEquals(array("hello"=>"world"), $containerList->offsetGet(0));
	}
	
	public function testAddToStartOfList()
	{
		$this->listContainer->addToStart(2);
		$this->listContainer->addToStart(4);
		$containerList = $this->listContainer->getSort();
		$this->assertEquals(4, $containerList->offsetGet(0));
	}
	
	public function testChangeListValue()
	{
		$this->listContainer->addToEnd(2);
		$this->listContainer->addToEnd(4);
		$this->listContainer->changeValue(0, 1);
		$containerList = $this->listContainer->getSort();
		$this->assertEquals(1, $containerList->offsetGet(0));
	}
	
	public function testShuffleList()
	{
		$this->listContainer->addToEnd(2);
		$this->listContainer->addToEnd(4);
		$this->listContainer->addToEnd(8);
		$this->listContainer->addToEnd(21);
		$this->listContainer->addToEnd(5);
		$this->listContainer->shuffleObject();
		$containerList = $this->listContainer->getSort();
		$this->assertEquals(5, $containerList->count());
	}	 
	
	public function testIsGreaterThanFalse()
	{
		$this->listContainer->addToEnd(2);
		$this->listContainer->addToEnd(4);
		$greaterThan = $this->listContainer->isGreaterThan(0,1);
		$this->assertFalse($greaterThan);
	}
	
	public function testIsGreaterThanTrue()
	{
		$this->listContainer->addToEnd(4);
		$this->listContainer->addToEnd(2);
		$greaterThan = $this->listContainer->isGreaterThan(0,1);
		$this->assertTrue($greaterThan);
	}
	
	public function testIsLreaterThanTrue()
	{
		$this->listContainer->addToEnd(2);
		$this->listContainer->addToEnd(4);
		$greaterThan = $this->listContainer->isLessThan(0,1);
		$this->assertTrue($greaterThan);
	}
	
	public function testIsLessThanFalse()
	{
		$this->listContainer->addToEnd(4);
		$this->listContainer->addToEnd(2);
		$greaterThan = $this->listContainer->isLessThan(0,1);
		$this->assertFalse($greaterThan);
	}
	
	public function testSwapValues(){
		$this->listContainer->addToEnd(2);
		$this->listContainer->addToEnd(4);
		$this->listContainer->swapValues(0, 1);
		$containerList = $this->listContainer->getSort();
		$this->assertEquals(4, $containerList->offsetGet(0));
		$this->assertEquals(2, $containerList->offsetGet(1));
	}
}
