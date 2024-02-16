<?php 

function dateFormat($date) {
    $timestamp = strtotime($date);
    $formatted_date = date('d/m/Y', $timestamp);
    return $formatted_date;
};

function generateJobRefferalId($date, $id) {
    //RVX24/01/1002
    
    $today = new DateTime($date);
    $dd = $today->format('d');
    $mm = $today->format('m');
    $yy = $today->format('Y');
    
    $str = "RVX-$yy/$mm/$dd/" . (1000 + $id);
    echo $str . "\n";
    return $str;
};
?>