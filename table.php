<?php
$host="containers-us-west-33.railway.app:6540";
$user="root";
$password="7T5kqa4KUlI07WQjJ6KA";
$db="railway";
$conn=mysqli_connect($host,$user,$password,$db);

if ($conn)
{
	echo "yes";
}
else
{
	echo "sorry sir";
	
	
}

$sql= "INSERT INTO tb_1(name,comment)


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>
