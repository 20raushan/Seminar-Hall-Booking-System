<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lecturehall";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
//if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
//}
//else
//echo "Connected successfully";

// Grab User submitted information
$email = $_POST["cr_id"];
$pass = $_POST["password"];
$sql="SELECT * FROM user WHERE cr_id = '$email' AND password='$pass'";
$result = $conn ->query($sql);
if($result->num_rows>0)

{
	session_start();
	$_SESSION["cr"] = $email;

    echo "<script>alert('You are a validated user')</script>";
	//header("location:../bookcancelview/ask.php");
	echo"<script>window.location.href='../bookcancelview/ask.php'</script>";
}
else
{
echo"<script>alert('incorrect username and password');</script>";	
echo"<script>window.location.href='index1.html'</script>";
}
    //echo"Sorry, your credentials are not valid, Please try again.";

//header['Location:choicefilling.php'];
//session_unset();
//session_destroy();
?>
