<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fetch.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Visitors Requests</title>
</head>
<body>
	<p>VISITOR REQUESTS</p>
	<div class="bady">
<table border="0" class="w3-table-all">
	<thead>
	<tr class="w3-light-grey">
		<th>CLIENT_ID</th>
		<th>PHONE</th>
		<th>EMAIL</th>
		<th>MESSAGE</th>	
		<th>TIME</th>	
	</tr>
	</thead>
<?php
	$conn = mysqli_connect("localhost", "root", "", "ancientcontractors");
	$sql = "SELECT * FROM customerrequests";
	$result = $conn-> query($sql);

	if ($result->num_rows > 0){
		while ($row = $result -> fetch_assoc()) {
			echo "<tr><td>" . $row["client_id"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td><td>" . $row["time"]  . "</td></tr>" . "<br>";
		}
	}
else{
	echo "No Results";
}
$conn-> close();

?>
</table>
<br>
<br>
<br>
<br>
<button class="w3-button w3-black"><a href="logout.php">LOGOUT</a></button>
</div>
</body>
</html>