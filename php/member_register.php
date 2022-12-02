<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

		$host = 'localhost';
		$user = 'korea';
		$pw = '1234';
		$dbName = 'mycampus';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$ID = $_POST['ID'];
	    $Password = $_POST['Password'];
	    $name = $_POST['name'];
		$Univ = $_POST['Univ'];

		$sql = "insert into member (
			ID,
			Password,
			name,
			Univ
		)";
			
		$sql = $sql. "values (
				'$ID',
				'$Password',
				'$name',
				'$Univ'
		)";

		if($mysqli->query($sql)){ 
			echo '<script>alert("success signup")</script>'; 
		  }else{ 
			echo '<script>alert("fail to signup")</script>';
		  }
  
		  mysqli_close($mysqli);
		
	  ?>
  
  <script>
	  location.href = "../FOrm.php";
  </script>
  
  </html>