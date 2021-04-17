<?php 
function fileToArray($file, $remove)
{
    if (file_exists($file)) {
        $array = [];
        $fopen = fopen($file, "r");
        $fread = fread($fopen, filesize($file));
        $nums = explode($remove, $fread);
        foreach ($nums as $num) {
            array_push($array, intval($num));
        }
        return $array;
    } else {
        echo 'file does not exist';
    }
}

function bubbleSort($anArray) {
    $start = hrtime(true);
    for ($i = count($anArray); $i > 0; $i--) {
        for ($b = 0; $b < $i - 1; $b++) {
            if ($anArray[$b] > $anArray[$b + 1]) {
                $temp = $anArray[$b + 1];
                $anArray[$b + 1] = $anArray[$b];
                $anArray[$b] = $temp;
            }
        }
    }
    $end = hrtime(true);
    $time = ($end - $start) / 1000000000;
    return $time;
}

function selectionSort($anArray){
    $start = hrtime(true);
    for ($i = 0; $i < count($anArray) - 1; $i++) {
        // search for minimum
        $min = $i;
        for ($n = $min + 1; $n < count($anArray); $n++) {
            if ($anArray[$n] < $anArray[$min]) {
                $min = $n;
            }
        }

        $fill = $anArray[$min];
        $anArray[$min] = $anArray[$i];
        $anArray[$i] = $fill;
    }
    $end = hrtime(true);
    $time = ($end - $start) / 1000000000;
    return $time;
}

function insertionSort($anArray){
    $start = hrtime(true);
    for ($i = 1; $i < count($anArray); $i++) {
        $val = $anArray[$i];
        $p = $i - 1;

        while ($p >= 0 && $anArray[$p] > $val) {
            $anArray[$p + 1] = $anArray[$p];
            $p--;
        }

        $anArray[$p + 1] = $val;
    }
    $end = hrtime(true);
    $time = ($end - $start) / 1000000000;
    return $time;
}
?>
