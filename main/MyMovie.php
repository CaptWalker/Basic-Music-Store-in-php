<?php
error_reporting(0);
include("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search By Alphabet</title>
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
  </div>
  <div style="border-radius:2px;background-color:grey; height:4.5px;"/>&nbsp;</div>
<?php  
	
	
			
	$que='select * from mp3songs';
	$sel=mysqli_query($link, $que); 
	$as=0;
	echo "<table width='100%' border='2px' ><tr colspan='3'><th>Song Name</th></tr>";
	while($ar=mysqli_fetch_assoc($sel))
	{
		echo "<tr><td width='60%' style='text-align:center'>".$ar['SONG_NAME'] ."</td>" ."<td><a href='songs/".$ar['SONG_NAME'].".mp3'>Download</a></td>" ."<td><a href='play.php?sn=".$ar['song_name']."'>Play</a></td></tr>";
		echo "<br>";
		$as++;	
	}
	echo "</table>";
	if($as==0)
	{
		echo'<script>alert("sorry we have no song started with '.$_GET["sn"].'");</script>';	
	}
	?>	
<div style='align:center;'>
	<footer>
   	   <div align="center" class="footer">Copyright &copy; 2015. All Right Reserved</div>
	</footer>
</div>
</body>
</html>