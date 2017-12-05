<?php
session_start();
if(!$_SESSION['gmail'])
header('location: index.html');
?>
<!DOCTYPE html>
<html>

<head>
<style>
<!--table {
    border-collapse: collapse;
    width: 100%;
}
-->
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
h1{
	color:white;
	background-color:#4CAF50;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
	
}
</style>
</head>
<head>
<div color="red">
<h1><center><b>SEARCH HALL FOR BOOKING</b></center></h1>
 
</div>
</head>
<body >

<table bgcolor="#4CAF50" >
  <form  action="askforsearch.php" method ="POST">
  <tr>
    <td><input type="text" placeholder="Hall name" style="text-align: center" name="hall"></td>
	<td><input type="text" placeholder="no_of_desk" style="text-align: center" name="desk"></td>
    <td><select type="text" placeholder=" Room type" name="room">
	  <option value="non">Room type</option>
	  <option value="AC">Ac</option>
	  <option value="NON AC">Non Ac</option></select></td>
	  <td><select type="text" placeholder="Desk type" name="desktype">
	  <option value="non">Desk type</option>
	  <option value="Plastic Chair">Plastic Chair</option>
	  <option value="Aeron Chair">Aeron Chair</option>
	  <option value="Chaise A bureau">Chaise A bureau</option></select></td>
	 <td><select type="text" placeholder=" Room type" name="project" >
	  <option value="non">Projector</option>
	  <option value="YES">Yes</option>
	  <option value="NO">No</option></select></td>
    <td><input type="datetime-local" placeholder="Start datetime" name="sdate"></td>
	<td><input type="datetime-local" placeholder="End datetime" name="edate"></td>
	<td><input type="submit" value="search"  name="submit"></td>
  </tr>
  
  </form>
</table>
 <br><br>
        <table id="customers">
        <tr>
		<th>HALL NAME</th>
		<th>PROJECTOR</th>
		<th>ROOM TYPE</th>
		<th>TYPE OF DESK</th>
		<th>NUMBER OF DESK</th>
		<th>BOOKING</th>
		<th></th>
		</tr> 
<?php
 include('dbconn.php');
 if(isset($_POST['submit']))
 {
	 $hall=$_POST['hall'];
	 $desk=$_POST['desk'];
	 $room=$_POST['room'];
	  $desktype=$_POST['desktype'];
	  $pro=$_POST['project'];
	   $sdate=$_POST['sdate'];
	    $edate=$_POST['edate'];
	$sql="select * from hall where hall_name='$hall' or room_type='$room' or no_of_desk='$desk' or projector='$pro' or type_of_desk='$desktype' 
	 or hall_name <> (select hall_name from booked_hall where start_datetime='$sdate' and end_datetime='$edate')"; 
	  $result=$conn->query($sql);
	  if($result->num_rows>0)
	  {
       while($row=$result->fetch_assoc())
	   {
        	echo"<tr><td>".$row['hall_name']."</td><td>".$row['projector']."</td><td>".$row['room_type']."</td><td>".$row['type_of_desk'].
            "</td><td>".$row['no_of_desk']."</td><td>";
			  ?> <form action="choicefilling.php" method="POST" >
			    <input type="hidden" name="hallname" value="<?php echo $row['hall_name']; ?>">
				 <input type="submit" value="Booking" style="text-align: center" name="booking">
				 </form>
			   </td></tr>	
			   
             <?php			   
	   }	
	   echo "</table>";
	  }
	  else
	  {echo"<script>alert('Not Found');</script>";
        echo"<script>window.location.href='askforsearch.php'</script>";
	  }
 }
?>


    

</body>
</html>
