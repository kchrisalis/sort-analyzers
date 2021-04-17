<?php
include ('functions.php');

// int arrays
$randomVals = fileToArray('random-values.txt', "\n");
$nearlySorted = fileToArray('nearly-sorted-values.txt', "\n");
$uniqueVals = fileToArray('few-unique-values.txt', "\n");
$reverseVals = fileToArray('reversed-values.txt', "\n");

// bubble sort tests
// echo bubbleSort($randomVals);
// echo bubbleSort($nearlySorted);
//echo bubbleSort($uniqueVals);
echo bubbleSort($reverseVals);

// selection sort tests
// echo selectionSort($randomVals);
// echo selectionSort($nearlySorted);
// echo selectionSort($uniqueVals);
// echo selectionSort($reverseVals);

// insertion sort tests
// echo insertionSort($randomVals);
// echo insertionSort($reverseVals);
// echo insertionSort($nearlySorted);
// echo insertionSort($uniqueVals);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sort Analyzer</title>
</head>

<body>



</body>

</html>