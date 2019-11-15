<?php
 session_start();
 $_SESSION['nom']=$_POST['nom'];
 header("location:page1.php");
?>