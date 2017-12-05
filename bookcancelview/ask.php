<?php 
session_start();
if(!$_SESSION['gmail'])
header('location: ../index.html');
else
{$emai=$_SESSION['gmail'];
   include('../dbconn.php');
 $sql="select * from hall_user where gmail='$emai'";
  $result=$conn->query($sql);
   $row=$result->fetch_assoc();
   $em=$row['name'];
}

?>
<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Lecture Hall Booking System</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body >
  <div class='container'>
  <h1>
    <marquee bgcolor="#cc9966" behavior="alternate"> Welcome Class <?php echo "[- ".$em." -] ";?>! Please select your choice </marquee>
  </h1>
 
  <div class="button-container">
  
  <div class='button -regular center'><a href="../askforsearch.php"><b>SEARCH HALL</a></div>
  
    <div class='button -regular center'><a href="../askforbooking.php"><b>BOOK HALL</a></div>
    
    <div class='button -regular center'><a href="../cancelbooking.php"><b>CANCEL BOOKING</a></div>
    
    
    <div class='button -regular center'><a href="../display.php"><b>VIEW BOOKINGS</div>
	
	    <div class='button -regular center'><a href="../logout.php"><b>LOGOUT</a></div>

    
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>
