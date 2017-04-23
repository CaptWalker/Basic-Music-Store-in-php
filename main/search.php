<?php
error_reporting(0);
include("conn.php");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
<style>
 
 .slide{
 	width:40%;
	float:right;
    margin-right:100px;
		 }
.leftsidebar{
    width:30%;
	float:left;
	margin-left:20px;
	margin-top:7%;
	 }	  	 
.player
 {
 padding-top:40%;
   }	
  
.footer{
	border-radius:25px;
	bottom: 20px;
	background-color: #CCFFFF;
	border-top-width: 5cm;
	border-right-width: 5cm;
	border-bottom-width: 5cm;
	border-left-width: 5cm;
	border-top-color: #CC6600;
	border-right-color: #CC6600;
	border-bottom-color: #CC6600;
	border-left-color: #CC6600;
	width:30%;
	text-align:center;
}  

</style>    
<link href="load.css" rel="stylesheet" type="text/css">

</head>

<body background="congruent_pentagon.png">
<div align="center">
  <p>
			<img src="image (3).png" width="965" height="147" alt="LOGO" >			</p>
</div>
<div style="border-radius:2px;background-color:grey; height:4.5px;"/>&nbsp;</div>
	    <table width="95%" align="center" >
          <tbody >
            <tr>
             <th scope="col"><a href="frontpage.php">HOME</a></th>
             <th scope="col"><a href="MyMovie.php">Latest Movie Song</a></th>
			 <th scope="col"><a href="About Us.php">About Us</a></th>
             <th scope="col"><a href="Contact Us.php">Contact Us</a></th>
            </tr>
          </tbody>
        </table>
<div style="border-radius:2px;background-color:grey; height:4.5px;"/>&nbsp;</div>
  </div>
  <?php
  	if(isset($_POST['sub']))
{
	if($_POST['select']=="songname")
	{
		$sel=mysqli_query($link,"select song_name from mp3songs where song_name LIKE '%".$_POST['t1']."%'");
	echo "<table width='100%' border='2px' ><tr><th>Song Name</th></tr>";
	while($ar=mysqli_fetch_array($sel))
	{
			echo "<tr><td width='60%' style='text-align:center'>".$ar['song_name'] ."</td>" ."<td><a href='songs/".$ar['song_name'].".mp3'>Download</a></td>" ."<td><a href='songs/".$ar['song_name'].".mp3'>Play</a></td></tr>";
		echo "</br>";	
	
	}echo "</table>";
	}
	if($_POST['select']=="movie")
	{
		$sel=mysqli_query($link,"select song_name from mp3songs where movie_name='%".$_POST['t1']."%'");
	while($ar=mysqli_fetch_array($sel))
	{
		echo $ar['song_name'] ."&nbsp;&nbsp;" ."<a href='download.php?sn=".$ar['song_name']."'>Download</a>"  ."&nbsp;&nbsp; " ."<a href='play.php?sn=".$ar['song_name']."'>Play</a></br>";
	}}
	if($_POST['select']=="artist")
	{
		$sel=mysqli_query($link,"select song_name from mp3songs where artists='".$_POST['t1']."'");
	while($ar=mysqli_fetch_array($sel))
	{
		echo $ar['song_name'] ."&nbsp;&nbsp;" ."<a href='download.php?sn=".$ar['song_name']."'>Download</a>"  ."&nbsp;&nbsp; " ."<a href='play.php?sn=".$ar['song_name']."'>Play</a></br>";
	}}
	if($_POST['select']=="type")
	{
		$sel=mysqli_query($link,"select song_name from mp3songs where type='".$_POST['t1']."'");
	while($ar=mysqli_fetch_array($sel))
	{
		echo $ar['song_name'] ."&nbsp;&nbsp;" ."<a href='download.php?sn=".$ar['song_name']."'>Download</a>"  ."&nbsp;&nbsp; " ."</br>";
	}
	}}
?>
<div align="center">
	<footer>
   	   <div align="center" class="footer">Copyright &copy; 2015. All Right Reserved</div>
	</footer>
</div>
</body>
</html>