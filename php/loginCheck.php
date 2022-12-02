<?php

$host = 'localhost';
$user = 'korea';
$pw = '1234';
$dbName = 'mycampus';
$con = new mysqli($host, $user, $pw, $dbName);

$ID = $_POST['ID']; // 아이디
$Password = $_POST['Password']; // 패스워드

$query = "select * from member where ID='$ID' and Password='$Password'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($ID==$row['ID'] && $Password==$row['Password']){ 

	echo "<script> alert('로그인 완료'); </script>";
	echo "<script> location.href = '../index.html'; </script>";

}else{ 

   echo "<script> alert('로그인 실패'); </script>";
   echo "<script> location.href = '../FOrm.php'; </script>";

}

?>