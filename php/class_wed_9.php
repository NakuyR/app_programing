<?php
	$host = 'localhost';
	$user = 'korea';
	$pw = '1234';
	$dbName = 'mycampus';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql ="SELECT * FROM class where time='9' and day='수'";
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $prof = $row['prof'];
        $time = $row['time'];
        $day = $row['day'];
    }

    $myObj = new stdClass();
    $myObj->name = $name;
    $myObj->prof = $prof;
    $myObj->time = $time;
    $myObj->day = $day;

    $myJSON = json_encode($myObj);

    echo $myJSON
?>