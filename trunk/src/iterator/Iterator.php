<?php namespace iterator;

interface Iterator
{
	public function first();
	
	public function nextPosition();
	
	public function isDone();
	
	public function currentItem();
	
}
