<?php
session_start();
if(!$_SESSION['gmail'])
header('location: ../index.html');

include_once("dbconn.php");

if(isset($_POST['cancel']))
{
 $booking_id=$_POST['booking_id'];

$sql="delete from booked_hall where booking_id='$booking_id'";
//$res = $conn->query($sql);
if($conn->query($sql))
{
echo"<script>alert('deleted succefully')</script>";
echo"<script>window.location.href='cancelbooking.php'</script>";
}
else
{
echo"<script>alert('something wrong')</script>";
//echo"<script>window.location.href='askforbooking.php'</script>";	
}
}
else{
echo"<script>alert('something error')</script>";
echo"<script>window.location.href='cancelbooking.php'</script>";	
}
//header('location:bookcancelview/ask.html');
//	}
//}
	?>
