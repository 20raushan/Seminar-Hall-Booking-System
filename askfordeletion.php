<?php
session_start();
if(strcmp($_SESSION['gmail'],'admin')!=0){
	header("Location:index.html");
}
?>
<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Lecture Hall Booking System</title>
   
      <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <!DOCTYPE html>

<head>
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body>

  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h1><center><b>DELETE EXISTING ENTRY</b></center></h1>
		 <a href="insertdeleteupdateviewadmin/askadmin.php"><button class='btn-lg btn-primary' >Back</button></a>
		 </div>
	      
      <div class='panel-body'>
       <div class="bs-example animated wow fadeInLeft" data-wow-duration="1000ms" data-example-id="contextual-table" style="border: 1px solid #eee">
				<table class="table table-hover">
				  <thead>
					<tr class="active">
					  <th scope="col" >Hall Name</th>
					  <th scope="col">Projector</th>
					  <th scope="col">Type 0f desk</th>
					  <th scope="col">No Of desk</th>
					  <th scope="col">Room Type</th>
					  <th scope="col">Delete</th>
					</tr>
				  </thead>
				  <?php
				  include("dbconn.php");
	              $sql=" select * from hall";
		           $result=$conn->query($sql);
				  if($result->num_rows>0)
				  {echo"<tbody>";
			         $ha;
					   while($row = $result->fetch_assoc())
					   {
				         
	  echo"<tr><td>".$row["hall_name"]."</td><td>".$row["projector"]."</td><td>".$row["type_of_desk"]."</td><td>".$row["no_of_desk"]."</td><td>".$row["room_type"]."</td>
	                 <td>";
					  ?><form action="askfordeletion.php" method="POST">
					   <input type= "hidden" name = "roomno" value="<?php echo $row['hall_name'];?>">
					  <input type="submit" name="delete" value="Delete" ></form>
					  <?php 
					  echo"</td></tr>";
					   
                     
					   }
					  // echo $ha;
	                 if(isset($_POST["delete"]))
					   {   
				           $name=$_POST["roomno"];
				           
						   $sql="DELETE FROM `hall` WHERE hall_name='$name'";
						   $result=$conn->query($sql);
						   if($conn->query($sql)==TRUE)
						   {//echo"<script> alert('deleted successfully');</script>";
	                        echo"<script>window.location.href='askfordeletion.php'</script>";
						   }
						   
					   }
                       				   
					   
			   echo"</tbody>";
				  }
				  ?>
				</table>
		</div>
      </div>
    </div>
  </div>
	                
</body>
  
    <script src="js/index.js"></script>

</html>
