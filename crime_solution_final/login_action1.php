<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#00CC99">
 <?php
	     $conn=mysql_connect("localhost","root","");
		   if(!$conn)
		   {
			   echo "connection failed...";
		   }
		  mysql_select_db("project");
		  $e=$_REQUEST['t1'];
		  $p1=$_REQUEST['t2'];
		     $qry="select * from user_reg where email='$e'";
			 $smt=mysql_query("$qry");
			$rs=mysql_fetch_assoc($smt);
			$p=$rs['password'];
			if($p==$p1)
			{
				header("location:admin\index.php") or ("location:admin\index.php");
			}
			else
			{
				echo "<h1>invalid user name and password </h1>";
			}
	  ?>
</body>
</html>