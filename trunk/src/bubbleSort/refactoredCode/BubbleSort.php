<?php namespace bubbleSort\refactoredCode;

class BubbleSort
{	
	protected function needsSwapping($a, $b){
		$needsSwapping = FALSE;
		if($b < $a){
			$needsSwapping = TRUE;
		}
		return $needsSwapping;
	}
}