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
  <title>Seminar Hall Booking System</title>
  
  
  
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
        <h1><center>ENTER THE DETAILS</center></h1>
		 <a href="insertdeleteupdateviewadmin/askadmin.php"><button class='btn-lg btn-primary' >Back</button></a>
      </div>
	  </br>
      
          
      <div class='panel-body'>
        <form class='form-horizontal' role='form' action= 'askforinsertion.php' method='POST'>
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
                  <input class='form-control' id='id_rno' name= "name" placeholder='Hall Name ' type='text' required  pattern="[a-zA-Z\s]+" >
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
                  <select class='form-control' id='id_location' name="room" placeholder='Projector' type='text' required>
				   <option value="">Room Type</option>
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
                  <select class='form-control' id='id_desk' name= "desk" placeholder='Type of desk' type='text' required>
				   <option  value="">Desk Type</option>
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
                  <input class='form-control' id='id_ndesk' name= "no_desk" placeholder='Number between 50 to 1000' type='number'  min="50" max="1000" required>
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
                  <select class='form-control' id='id_project' name= "project" placeholder="Projector" type='text' required>
				  <option value="">Projector Type</option>
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
		      
</body>
  
    <script src="js/index.js"></script>


</body>

</html>
<?php
//$conn=mysqli_connect("localhost","root","","hallbooking");
include("dbconn.php");

if(isset($_POST["save"]))
{
	$name=$_POST['name'];
	$rm=$_POST['room'];
	$ds=$_POST['desk'];
	$nd=$_POST['no_desk'];
	$pro=$_POST['project'];
			
	$sql="insert into hall values('$name','$pro','$ds','$nd','$rm')";
	//$result=$conn->query($sql);
	if($conn->query($sql) === TRUE)
	{echo"<script>alert('Insertion successfully');</script>";
       echo"<script>window.location.href='askforinsertion.php'</script>";
	}
	else
	{
		echo"<script>alert('something error');</script>";
       echo"<script>window.location.href='askforinsertion.php'</script>";
	}
		
	
	
	
}
?>
