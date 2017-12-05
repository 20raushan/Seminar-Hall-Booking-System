<?php

include("dbconn.php");
$ad="admin";
if(isset($_POST["login"]))
{
 
$email = $_POST["gmail"];
$pass = $_POST["password"];
$who= $_POST["ask"];

 if(strcmp($ad,$who)==0)
 {
		$sql="SELECT * FROM hall_admin WHERE gmail = '$email' AND password='$pass'";
		$result = $conn -> query($sql);
		if($result->num_rows>0)
		{
			session_start();
			$_SESSION["gmail"] = $who;
         // session_save_path('insertdeleteupdateviewadmin/askadmin.html');
			echo"<script>alert('Admin_login successfully');</script>";
			
			?>
			
			<script>window.location.href="insertdeleteupdateviewadmin/askadmin.php?user=<?php echo $email;?>"</script> 
		<?php
		}
		else
		{
			echo"<script> alert('incorrect username and password');</script>";
			
			echo"<script>window.location.href='index.html'</script>";
			
        }
  }
  else
  {    $sql="SELECT * FROM hall_user WHERE gmail = '$email' AND password='$pass'";
		$result = $conn -> query($sql);
		if($result->num_rows>0)
		{
			session_start();
			$_SESSION["gmail"] = $email;

			echo"<script>alert('User_login successfully');</script>";
			
			?>
			
			<script>window.location.href="bookcancelview/ask.php"</script> 
		<?php
		}
		else
		{
			echo"<script> alert('incorrect username and password');</script>";
			
			echo"<script>window.location.href='index.html'</script>";
			
        }
  }
}
else
{
   echo"<script>alert('something error')</script>";
}

   
?>