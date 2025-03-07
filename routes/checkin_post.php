<?php
$num1 = (string)$_POST['num1'];
$num2 = (string)$_POST['num2'];
$num3 = (string)$_POST['num3'];
$num4 = (string)$_POST['num4'];
$num5 = (string)$_POST['num5'];
$num6 = (string)$_POST['num6'];

$uid = $_SESSION['uid'];
$result = getHistoryEnrolL($uid);


$number1 = '911111';

$number=$num1.$num2.$num3.$num4.$num5.$num6;

echo $number;

if ($number == $number1 ) {
    if ($result) {
        renderView('history_get', ['history' => $result]);
    }
}else
{
    echo 'เกือบควย';
}