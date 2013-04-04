<?php

require_once dirname(dirname(dirname(dirname(__FILE__)))). "/src/bubbleSort/originalCode/bubbleSort.php";

class bubbleSortTest extends PHPUnit_Framework_TestCase
{

	public function testNumericSort()
	{
		$unsortedArray = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
		$sortedArray = executeBubbleSort($unsortedArray);
		$this->assertEquals($sortedArray, array(1, 2, 3, 4, 5, 6, 7, 8, 9));
	}
	
	public function testRepeatedNumbers()
	{
		$unsortedArray = array(9, 8, 7, 7, 7, 7, 3, 2, 1);
		$sortedArray = executeBubbleSort($unsortedArray);
		$this->assertEquals($sortedArray, array(1, 2, 3, 7, 7, 7, 7, 8, 9));
	}
	
	public function testNegativeNumbersSorted()
	{
		$unsortedArray = array(-9, -8, -7, -6, -5, -4, -3, -2, -1);
		$sortedArray = executeBubbleSort($unsortedArray);
		$this->assertEquals($sortedArray, array(-9, -8, -7, -6, -5, -4, -3, -2, -1));
	}
	
		public function testNegativeNumbersUnsorted()
	{
		$unsortedArray = array(-1, -2, -3, -4, -5, -6, -7, -8, -9);
		$sortedArray = executeBubbleSort($unsortedArray);
		$this->assertEquals($sortedArray, array(-9, -8, -7, -6, -5, -4, -3, -2, -1));
	}
	
		public function testFloats()
	{
		$unsortedArray = array(1.11, 2.22, -3.33, -4.44, 5.55, 6.66, 7.77, -8.88, -9.99);
		$sortedArray = executeBubbleSort($unsortedArray);
		$this->assertEquals($sortedArray, array(-9.99, -8.88, -4.44, -3.33, 1.11, 2.22, 5.55, 6.66, 7.77));
	}
	
		public function testStringsSorted()
	{
		$unsortedArray = array("aa", "bb", "cc", "dd", "ee" , "ff", "gg", "hh", "ii");
		$sortedArray = executeBubbleSort($unsortedArray);
		$this->assertEquals($sortedArray, array("aa", "bb", "cc", "dd", "ee" , "ff", "gg", "hh", "ii"));
	}
	
	public function testStringsUnsorted()
	{
		$unsortedArray = array("ii", "hh", "gg", "ff", "ee" , "dd", "cc", "bb", "aa");
		$sortedArray = executeBubbleSort($unsortedArray);
		$this->assertEquals($sortedArray, array("aa", "bb", "cc", "dd", "ee" , "ff", "gg", "hh", "ii"));
	}
	
	public function testStringsUnsortedwithCaps()
	{
		$unsortedArray = array("ii", "hh", "gg", "FF", "EE" , "dd", "cc", "bb", "aa");
		$sortedArray = executeBubbleSort($unsortedArray);
		$this->assertEquals($sortedArray, array( "EE" , "FF", "aa", "bb", "cc", "dd", "gg", "hh", "ii"));
	}


}


