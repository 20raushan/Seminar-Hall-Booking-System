<?php
session_start();
if(!$_SESSION['gmail'])
header('location: ../index.html');

include_once("dbconn.php");

if(isset($_POST['save']))
{
 $user=$_SESSION['gmail'];
$hallname=$_POST['hidroom'];
$start=$_POST['inputtime'];
$end=$_POST['inputendtime'];
$st=strtotime($start);
$st=strtotime($end);
$sbj=$_POST['inputsubject'];
$tchr=$_POST['inputteacher'];
$purp=$_POST['inputpurpose'];

$sql="insert into booked_hall values('','$hallname','$sbj','$tchr','$purp','$start','$end','$user')";
//$res = $conn->query($sql);
if($conn->query($sql))
{
echo"<script>alert('inserted succefully')</script>";
echo"<script>window.location.href='bookcancelview/ask.php'</script>";
}
else
{
echo"<script>alert('something wrong')</script>";
echo"<script>window.location.href='bookcancelview/ask.php'</script>";	
}
}
else{
echo"<script>alert('something error')</script>";
echo"<script>window.location.href='bookcancelview/ask.php'</script>";	
}
//header('location:bookcancelview/ask.html');
//	}
//}
	?>
