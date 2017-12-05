<?php
session_start();
include_once("dbconn.php");
$user=$_SESSION['cr'];
$rmno=$_POST['inputrno'];
$lc=$_POST['inputlocation'];
$tdesk=$_POST['inputdesk'];
$nodesk=$_POST['inputndesk'];
$projec=$_POST['inputproject'];
$sql="insert into room values('$rmno','$lc','$projec','$tdesk',$nodesk)";
$res = $conn->query($sql);
echo mysql_error();
//header('location:askforcancellation.php');
?>
