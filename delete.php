<?php
$conn = mysqli_connect("localhost","root","","events");
$id = $_GET['id'];
if(!empty($id))
{
	header("LOCATION index.php");
}

$sql = "DELETE FROM events WHERE id='$id'";
$result = mysqli_query($conn,$sql);
if($result)
	header("LOCATION: index.php?message=success");
echo mysqli_error($conn);