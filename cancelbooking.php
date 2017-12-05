<?php
session_start();
if(!$_SESSION['gmail'])
header('location: ../index.html');
include_once("dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<?php
$user = $_SESSION["gmail"];
$sql="select *from booked_hall where user_gmail='$user'";
$res=$conn->query($sql);
?>
<head>
<h1><center><b><u>LIST OF YOUR BOOKED LECTURE HALLS</u></b></center></h1>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>S.No.</th>
	<th>HALL NAME</th>
	<th>Start Date time</th>
	<th>End Date Time</th>
  	<th>Subject</th>
	<th>Teacher</th>
	<th>Purpose</th>
	<th>CANCEL</th>
</tr>
<?php
$i=1;
while($row=mysqli_fetch_assoc($res))
{?>
<form action="confirmcancel.php" method="POST">
  <tr>
    <td><?php echo $i; ?></td>
	<td><?php echo $row['hall_name'];?></td>
	<td><?php echo $row['start_datetime'];?></td>
	<td><?php echo $row['end_datetime'];?></td>
	<td><?php echo $row['subject'];?></td>
	<td><?php echo $row['teacher'];?></td>
	<td><?php echo $row['purpose'];?></td>
	<td><input type="submit" name="cancel" value="Confirm cancel"></td>

	</tr>
	<input type= "hidden" name = "booking_id" value="<?php echo $row['booking_id'];?>">
 </form>
<?php $i++; } ?> 
</table>
<a href="bookcancelview/ask.php"><button class='btn-lg btn-primary' >Back</button></a>

</body>
</html>