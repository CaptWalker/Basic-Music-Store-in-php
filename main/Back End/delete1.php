<?php
session_start();
$id=$_SESSION['id'];
if($id=="")
 {
	 header('location:login.php');
 }
?><?php
session_start();
error_reporting(0);
include("conn.php");
$sel=mysqli_query($link,"select movie_name from mp3songs");
$a=0;
while($ar=mysqli_fetch_array($sel))
{
	echo'<div style="font-size:200%;"><form action="delete1.php" method="post">';
	echo $ar['movie_name']."&nbsp;&nbsp; &nbsp;" ."<input type="."submit"." value='"."Delete"."'name="."'subdel'"."></a>";
	echo "<br></form></div>";
	$_SESSION['delname']=$ar['movie_name'];
	$a++;	
}
if($_POST["subdel"])
	{
		while((mysqli_query($link,"delete from mp3songs where movie_name=".$_SESSION["delname"].""))!=NULL)
		{
			unlink("");
		}
	}
if($a==0)
{
	echo "<script>alert(you have no movie in the database)</script>";	
}
?>