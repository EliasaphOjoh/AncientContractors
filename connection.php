<?php 
$message = $_POST["message"];
$email = $_POST["email"];
$fullName = $_POST["fullName"];
$phone = $_POST["phone"];
$host = "localhost";
$dbname = "ancientcontractors";
$username = "root";
$password = '';
$conn = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	die("Connection error: " . mysqli_connect_error());
}
$sql = "INSERT INTO customerrequests (fullName, phone, email, message) 
		VALUES (?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
	die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "siss",
						$fullName,
						$phone,
						$email,
						$message);
mysqli_stmt_execute($stmt);
	echo "<script>alert('Thank you for your Message. Our Team will review it soon.')</script>";
	echo "<script>location.href='index.html'</script>";
 ?>
