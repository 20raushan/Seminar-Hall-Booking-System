<?php
session_start();
if(!$_SESSION['gmail'])
header('location: ../index.html');
?>
<!DOCTYPE html>
<html >

<head>
<body background : "books1.jpg"/>
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
<?php
include_once("dbconn.php");
$hall=$_POST['hallname'];
$_SESSION['hall']=$hall;
$hall=$_SESSION['hall'];
$email=$_SESSION['gmail'];
$sqlshow="select * from booked_hall where hall_name='$hall'";
$resshow=$conn->query($sqlshow);

?>
	<!-- -->
	  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
	
      <div class='panel-heading'>
        <h5><b><center>BOOKED SLOTS</center></b></h5>
      </div>
	  <div class='panel-body'>
		          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' </label>
            <div class='col-md-2'>
              
            </div>
          </div>
		  		 <div class='form-group'><center>
				 <table cellpadding="10px" width="100%">
				 <tr>
				 <th>HALL NAME</th>
				 <th>START DATE TIME</th>
				 <th>END DATE TIME</th>
				 <th>PURPOSE</th>
				 <th>TEACHER</th>
				 <th>SUBJECT</th>
				 </tr>
				 <?php
				 while($rowshow=mysqli_fetch_assoc($resshow))
				 {
					
				 ?>
				 <tr>
					<td><?php echo $rowshow['hall_name'];?></td>
					<td><?php echo $rowshow['start_datetime'];?></td>
					<td><?php echo $rowshow['end_datetime'];?></td>
					<td><?php echo $rowshow['purpose'];?></td>
					<td><?php echo $rowshow['teacher'];?></td>
					<td><?php echo $rowshow['subject'];?></td>
					</tr>
				 <?php } ?>
				 </table></center>
			</div>
	  </div>
	  </div>
	  </div>
	<!-- -->
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
	
      <div class='panel-heading'>
        <h5><b><center>PLEASE ENTER THE DETAILS</b></center></h5>
        <a href="bookcancelview/ask.php"><button class='btn-lg btn-primary' >Home</button></a>
        <a href="askforsearch.php"><button class='btn-lg btn-primary' >Back to search</button></a>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' action= 'savebooked.php' method='POST'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' </label>
            <div class='col-md-2'>
              
            </div>
          </div>
		 <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>HALL NAME</label>

            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_room' name="inputroom" value='<?php echo $_POST['hallname'];?>' type='text' disabled='disabled'>
				  <input type="hidden" name="hidroom" value="<?php echo $_POST['hallname']; ?>"></input>
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
           

            
          </div>		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>TEACHER</label>

            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_teacher' name= "inputteacher" placeholder='Name of the teacher' type='text' required pattern="[a-zA-Z\s]+">
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
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>SUBJECT</label>

            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_subject' name="inputsubject" placeholder='Subject Name' type='text' required pattern="[a-zA-Z\s]+">
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
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>START TIME</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_time' name="inputtime" type='datetime-local' required>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  
                </div>
              </div>
            </div>
          </div>
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>END TIME</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_endtime' name="inputendtime" type='datetime-local' required>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  
                </div>
              </div>
            </div>
          </div>
		 
			<div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>PURPOSE</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_purpose' name="inputpurpose" placeholder= "Purpose"  type='text' required pattern="[a-zA-Z\s]+">
                </div>
              </div>
              
            </div>
          </div>
<!--		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' </label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  
                </div>
              </div>
             
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                 
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  
                </div>
              </div>
              <div class='col-md-9'>
                <div class='form-group internal'>
                 
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-8'>
              
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-8'>
            
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-6'>
            </div>
          </div>-->
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit' name="save"><center>Save</center></button>
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


 
<?