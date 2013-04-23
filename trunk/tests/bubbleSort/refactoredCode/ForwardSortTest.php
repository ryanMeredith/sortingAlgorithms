<?php
require_once dirname(dirname(dirname(__FILE__))). '/testBootstrap.php';

class ForwardSortTest extends PHPUnit_Framework_TestCase
{
	protected $fowardSort;

	public function setup()
	{
		$this->forwardSort = new \bubbleSort\refactoredCode\ForwardBubbleSort();
	}
    public function testSimpleSort()
	{
		$sortingArray = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
		$arrayContainer = new \sortContainers\ArrayContainer();
		$arrayContainer->setSort($sortingArray);
		$sortedArray = $this->forwardSort->executeSort($arrayContainer);
		$this->assertEquals(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10), $sortedArray);
	}
	
	public function testRepetativeSort()
	{
		$sortingArray = array(10, 9, 8, 7, 7, 7, 7, 3, 2, 1);
		$arrayContainer = new \sortContainers\ArrayContainer();
		$arrayContainer->setSort($sortingArray);
		$sortedArray = $this->forwardSort->executeSort($arrayContainer);
		$this->assertEquals(array(1, 2, 3, 7, 7, 7, 7, 8, 9, 10), $sortedArray);
	}
	 
	 
}
