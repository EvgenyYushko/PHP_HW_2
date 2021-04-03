<?php

function sum($a, $b){ return $a + $b; }
function sub($a, $b){ return $a - $b; }
function mul($a, $b){ return $a * $b; }
function div($a, $b){ if($b == 0) return 'DivideByZeroException'; return $a / $b; }

$sumWords = preg_split("/[+]+/", $_POST['result']);
$subWords = preg_split("/[-]+/", $_POST['result']);
$mulWords = preg_split("/[*]+/", $_POST['result']);
$divWords = preg_split("/[\/]+/", $_POST['result']);

$result = 0;

if(count($sumWords) > 1){
    $result = $sumWords[0] . '+' . $sumWords[1] . '=' . sum($sumWords[0], $sumWords[1]);
}
else if(count($subWords) > 1){
    $result = $subWords[0] . '-' . $subWords[1] . '=' . sub($subWords[0], $subWords[1]);
}
else if(count($mulWords) > 1){
    $result = $mulWords[0] . '*' . $mulWords[1] . '=' . mul($mulWords[0], $mulWords[1]);
}
else if(count($divWords) > 1){
    $result = $divWords[0] . '/' . $divWords[1] . '=' . div($divWords[0], $divWords[1]);
}

return $result;