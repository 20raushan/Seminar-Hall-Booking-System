<?php
session_start();

if(strcmp($_SESSION['gmail'],'admin')!=0){
	header("Location:../index.html");
}


?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Lecture hall booking system</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body
  <div class='container'>
  <h1>
    <i><marquee bgcolor="#ffdf80" behavior="alternate"> Welcome Admin! <b> Manage your entries by choosing an operation!</i></marquee>
  </h1>
 
  <div class="button-container">
    <div class='button -regular center'><a href="../askforinsertion.php"><b>ADD A NEW HALL</a></div>
    
    <div class='button -regular center'><a href="../askfordeletion.php"><b>DELETE EXISTING HALL</a></div>
    
    
    <div class='button -regular center'><a href="../askforcancellation.php"><b>UPDATE EXISTING HALL</div>
    
  
      <div class='button -regular center'><a href="../display1.php"><b>VIEW ALL HALLS</div>
	  
	      <div class='button -regular center'><a href="../logout.php"><b>LOGOUT</a></div>


</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
