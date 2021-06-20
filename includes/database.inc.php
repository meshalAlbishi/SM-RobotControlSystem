<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "mysql";
$dbName = "arm_control";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);


function getMotorsValue()
{
    $sql = "SELECT motor_id, degree FROM motors;";
    $result = mysqli_query($GLOBALS['conn'], $sql);

    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        return mysqli_fetch_all($result);
    }
}


function updateMotors()
{
    for ($i = 1; $i <= 6; $i++) {

        $degree =  $_POST['engine' . $i];
        $sql = "update motors set degree = {$degree} where motor_id={$i};";

        mysqli_query($GLOBALS['conn'], $sql);

        // insert to the log
        insertMotorsLog($i, $degree);
    }
}

function insertMotorsLog($motor_id, $degree)
{
    $sql = "insert into motors_log(motor_id, degree, log_date) values({$motor_id}, {$degree}, now());";
    mysqli_query($GLOBALS['conn'], $sql);
}
