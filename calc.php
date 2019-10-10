<?php

include 'inc/calc.inc.php';

$digitOne = $_POST['digitOne'];
$digitTwo = $_POST['digitTwo'];
$calc = $_POST['calc'];

$calculate = new Calculate ($digitOne, $digitTwo, $calc);
echo $calculate->operation();

("Location: ../index.php");
