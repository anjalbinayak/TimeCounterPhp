<?php
if(isset($_POST['add']))
{
	$name = $_POST['event_name'];
	$date = $_POST['date'];
	$time = $_POST['time'];	
	$dateTime = $date." ".$time;
	if(empty($name) || empty($date) || empty($time))
		throw new Exception("Please Enter all fields");
	
	$conn = mysqli_connect("localhost","root","","events");
	$sql = "INSERT INTO events(name,description,date) values('$name',' ','$dateTime')";
	$result = mysqli_query($conn,$sql);
	if($result)
		header("LOCATION: index.php");
	throw new Exception("The Events Could not be added");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Events</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="jumbotron">
<form action='' method="POST">
	<label for="event-name">Event Name :</label>
	<input type="text" name="event_name" id="event-name" placeholder="Events Name" class="form-control"> <label for="date">DATE </label>
	<input type="date" name="date" id="date" class="form-control"> 

	<label for="time">Time </label>
	<input type="time" name="time" id="time" class="form-control">
	<br>

	<button type="submit" name="add" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>

</form>
</div>
</body>
</html>
