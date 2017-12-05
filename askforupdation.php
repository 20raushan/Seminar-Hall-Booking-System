<?php
session_start();
if(!$_SESSION['gmail']){
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
        <h1><center>UPDATE THE DETAILS</center></h1>
		 <a href="askforcancellation.php"><button class='btn-lg btn-primary' >Back</button></a>
      </div>
	  </br>
	  <?php
	     include("dbconn.php");
		 //$rm="";
	    
		    if(isset($_POST['update']))
			$rm=$_POST["roomno"];
		  else
			  $rm=$_GET['roomno'];
			$sql="select * from hall where hall_name='$rm'";
			$result=$conn->query($sql);
		
			$row=$result->fetch_assoc();
			$room=$row["hall_name"];
			$no_desk=$row["no_of_desk"];
		
		
	  ?>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' action= "askforupdation.php?roomno=<?php echo $rm;?>" method='POST'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' </label>
            <div class='col-md-2'>
              
			  <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
            </div>
          </div>		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Hall Name</label>

            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_rno' name= "name" value="<?php echo $room;?>" type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Room Type</label>
                 
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <select class='form-control' id='id_location' name="room"  type='text'>
				   <option value="AC"> AC</option>
				   <option value="NON AC"> NON AC</option>
				   </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Type of desk</label>

            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <select class='form-control' id='id_desk' name= "desk"  type='text'>
				   <option value="Aeron Chair">Aeron Chair</option>
				   <option value="Chaise A bureau"> Chaise A bureau</option>
				   <option value="Armchair"> Armchair</option>
				   <option value="Plastic Chair">Plastic Chair</option>
				   </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>No of desk</label>

            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_ndesk' name= "no_desk" value="<?php echo $no_desk;?>" type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Projector</label>

            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <select class='form-control' id='id_project' name= "project"  type='text'>
				  <option value="YES">YES</option>
				  <option value="NO">NO</option>
				  </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
            </div>
          </div>
         
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit' name="save">Save</button>
            </div>
            
          </div>
        </form>

      </div>
    </div>
  </div> 
<?php
/*
	}
	else
	{echo"<script>alert('something error1')</script>";
	 echo"<script>window.location.href='askforcancellation.php'</script>";
	}		
}
	*/	
?>		 
</body>
</html>
<?php
 if(isset($_POST["save"]))
    {
	$name=$_POST['name'];
	$rmm=$_POST['room'];
	$ds=$_POST['desk'];
	$nd=$_POST['no_desk'];
	$pro=$_POST['project'];
	 //echo"<script>alert('$rm');</script>";
	$sql="update hall set hall_name='$name',projector='$pro',type_of_desk='$ds',no_of_desk='$nd',room_type='$rmm' where hall_name='$rm'";
	//$result=$conn->query($sql);
	if($conn->query($sql) === TRUE)
	{  echo"<script>alert('updated successfully');</script>";
       echo"<script>window.location.href='askforcancellation.php'</script>";
	}
	else
	{
		echo"<script>alert('something error');</script>";
       echo"<script>window.location.href='askforcancellation.php'</script>";
	}
	
    
	}
?>