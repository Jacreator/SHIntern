<?php

function rangeOfNumbers($start, $end){
    $fullNumbers = [];
    $counter = 0;
    for($i = $start; $i <= $end; $i++){
        $fullNumbers[$counter] = $i;
        $counter++;
    }
    return $fullNumbers;
}

function sumArray($arrayOfNumbers){
    $sum = 0;
    foreach ($arrayOfNumbers as $number){
        $sum += $number;
    }

    return $sum;
}
if (isset($_POST['check'])){
    $oldStartInput = $_POST['start'];
    $oldEndInput = $_POST['end'];
    $start = 0;
    $end = 0;
    unset($_POST['check']);

//    end validation
    if ($_POST['end'] == null){
        $reportEnd = "Sorry Provide Where to End";
    } else {
        $end = $_POST['end'];
    }

//    start validation
    if ($_POST['start'] == null){
        $reportStart = "Sorry Provide Where to Start";
    } else {
        $start = $_POST['start'];
    }

    if($end > 0){
        $result = rangeOfNumbers($start, $end);
        $sumResult = sumArray($result);
    } else {
        $reportEnd = "Sorry End cannot be zero";
    }

}

?>