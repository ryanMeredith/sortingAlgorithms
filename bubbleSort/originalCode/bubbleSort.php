<?php

$unSortedArray = array (10,4,6,4,3,8,6,2,1,9,6);
echo "unsorted:  ";
foreach ($unSortedArray as  $value) {
	echo  $value . ", ";
}

    $arraySize = count($unSortedArray);
    for ($i=0; $i<$arraySize; $i++) {
        for ($j=0; $j<$arraySize-1-$i; $j++) {
            if ($unSortedArray[$j+1] < $unSortedArray[$j]) {
                $oldValue = $unSortedArray[$j];
				$unSortedArray[$j] = $unSortedArray[$j+1];
				$unSortedArray[$j+1] = $oldValue;
            }
        }
    }
	echo "<br/><br/>";
	echo "Sorted:  ";
    foreach ($unSortedArray as  $value) {
	echo $value . ", ";
}

?>

