<?php
session_start();
include_once("dbconn.php");
$user=$_SESSION['cr'];
$rmno=$_POST['roomno'];
$lc=$_POST['loc'];
$purp=$_POST['pur'];
$sql="delete from booked_room where cr_id='$user' AND room_no='$rmno' AND location = '$lc'";
$res = $conn->query($sql);
echo mysql_error();
header('location:askforcancellation.php');
?>
