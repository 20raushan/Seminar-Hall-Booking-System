<?php
session_start();
if(!$_SESSION['gmail'])
header('location: ../index.html');
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

<head>
<h1><center><b><u>AVAILABLE ROOMS FOR BOOKING</u></b></center></h1>
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
<body background="books.jpg">



  <?php


include_once("dbconn.php");

if(isset($_POST['submit']))
{
 $search1=$_POST['search1'];
 $search2=$_POST['search2'];
 $search3=$_POST['search3'];
 $search4=$_POST['search4'];
 $search5=$_POST['search5'];
$sql="select * FROM hall where hall_name ='$search1' or  type_of_desk='$search2' or no_of_desk='$search3'
		 or projector='$search4' or room_type='$search5'";
}
else $sql="select * FROM hall";
$res=$conn->query($sql);


?>


 
<table>
  <tr>
    <th>S.NO</th>
    <th>HALL NAME</th>
    <th>FURNITURE TYPE</th>
	<th>NUMBER OF BENCHES</th>
	<th>PROJECTOR</th>
	<th>ROOM TYPE</th>
	<th>BOOK HALL</th>
  </tr>
<?php
$i=1;
  while($row=mysqli_fetch_assoc($res))
{  
?>
<form action="choicefilling.php" method="POST">
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['hall_name']; ?></td>
    <td><?php echo $row['type_of_desk']; ?></td>
	 
    <td><?php echo $row['no_of_desk']; ?></td>
	<td><?php echo $row['projector']; ?></td>
	<td><?php echo $row['room_type']; ?></td>

	<td><input type="submit" name="book" value="Book Now"></td>
  </tr>
  <input type= "hidden" name = "hallname" value="<?php echo $row['hall_name'];?>">
  <input type= "hidden" name="loc" value="<?php echo $row['location'];?>">
</form>
  <?php 
 $i=$i+1;} ?>
</table>
<a href="bookcancelview/ask.php"><button class='btn-lg btn-primary' >Back</button></a>
</body>

</html>