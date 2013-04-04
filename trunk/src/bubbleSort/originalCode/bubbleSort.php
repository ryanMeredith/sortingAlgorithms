<?php

function executeBubbleSort($sortArray)
{
    $arraySize = count($sortArray);
    for ($i=0; $i<$arraySize; $i++) {
        for ($j=0; $j<$arraySize-1-$i; $j++) {
            if ($sortArray[$j+1] < $sortArray[$j]) {
                $oldValue = $sortArray[$j];
				$sortArray[$j] = $sortArray[$j+1];
				$sortArray[$j+1] = $oldValue;
            }
        }
    }
	return $sortArray;
}

?>

