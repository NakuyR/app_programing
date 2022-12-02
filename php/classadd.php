<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'korea';
		$pw = '1234';
		$dbName = 'mycampus';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$name = $_POST['name'];
	    $prof = $_POST['prof'];
	    $time = $_POST['time'];
		$day = $_POST['day'];

		$sql = "insert into class (
			name,
			prof,
			time,
			day
		)";
		
		$sql = $sql. "values (
				'$name',
				'$prof',
				'$time',
				'$day'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("강의가 등록되었습니다")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "../시간표.html";
</script>

</html>