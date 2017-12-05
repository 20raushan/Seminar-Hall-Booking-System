<?php
session_start();
//unset($_SESSION['gmail']);
//session_unset();
session_destroy();
	header("Location:index.html");
?>
