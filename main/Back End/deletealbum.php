<?php
session_start();
$id=$_SESSION['id'];
if($id=="")
 {
	 header('location:login.php');
 }
?><?php
error_reporting(0);
include("conn.php");
extract($_POST);
if(isset($submit))
{
 	while($ar=mysqli_fetch_array(mysqli_query($link,"select song_name from mp3songs where album_name='$t1';")))
	{
		rmdir("$ar");	
	}
	if($ar==NULL)
	{
		$msg="problem in deletion";
	}
	else
	{
		if(mysqli_query($link,"delete from mp3songs where album_name='$t1';"))
		{
			$msg="deletion sucessful";	
		}
	}
}
if(isset($del))
{
	header("location:deletealbum.php");	
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.FOURTH {height: 90%;
	width: 25%;
	float: right;
}
.FOURTH {height: 90%;
	width: 25%;
	padding: 30px;
	float: right;
	margin-top: auto;
}
.FOURTH {border-top: thin solid #000000;
	border-right: thin solid #000000;
	border-left-width: thin;
	border-left-color: #000000;
}
.LAST {height: 10%;
	width: 100%;
	margin-top: 1%;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: auto;
	float: right;
	border: thin solid #000000;
}
.SECOND {word-spacing: normal;
	height: 10%;
	width: 24.4%;
	float: left;
	text-decoration: none;
	text-shadow: 0px 0px;
	white-space: normal;
	top: 10px;
	border: thin solid #000000;
}
.THIRD {height: 90%;
	width: 30%;
}
.THIRD {height: 90%;
	width: 30%;
	float: left;
	margin-top: auto;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
	padding-top: 30px;
	border-right-width: thin;
	border-right-color: #000000;
	border-top: thin solid #000000;
	border-left: thin solid #000000;
	border-bottom-width: thin;
	border-bottom-color: #000000;
}
.first {height: 10%;
	width: 100%;
	border: medium none #000000;
}
.middle {height: 80px;
	width: 35.8%;
	float: left;
	padding-left:1%;}
</style>

</head>

<body background="../congruent_pentagon.png">
<form id="form1" name="form1" method="post">
  <div class="first"><table width="98%" border="1">
  <tbody>
    <tr>
      <th scope="col"><a href="admin.php">Home</a></th>
      <th scope="col"><a href="changepassword.php">CHANGE PASSWORD</a></th>
      <th scope="col"><a href="../Front end/About Us.php">ABOUT US</a></th>
      <th scope="col"><a href="logout.php">LOG OUT</a></th>
    </tr>
  </tbody>
</table>
  
</div>

<div class="THIRD">
        <p align="center"><a href="showmovielist.php">SHOW MOIVE LIST</a></p>
        <p align="center"><a href="showalbumlist.php">SHOW ALBUM LIST</a></p>
        <p align="center"><a href="deletemovie.php">DELETE MOVIE</a></p>
        <p align="center"><a href="deletealbum.php">DELETE ALBUM</a></p>
        <p align="center"><a href="totalmovie.php">TOTAL NO. OF MOVIES/ALBUMS</a></p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
</div>

<div class="middle">
        <p>&nbsp;</p>
        <table width="281" height="135" border="1">
          <tr>
            <td colspan="3"><?php echo $msg; ?></td>
          </tr>
          <tr>
            <td width="78">ALBUM NAME</td>
            <td colspan="2"><input type="text" name="t1" id="t1"></td>
          </tr>
          <tr>
            <td><input type="submit" name="submit" id="submit" value="Submit"></td>
            <td width="109"><input type="reset" name="reset" id="reset" value="Reset"></td>
            <td width="72"><input type="submit" name="del" id="del" value="DELETE MORE"></td>
          </tr>
    </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
  </div>
      
  <div class="FOURTH">
       <p align="right"><a href="addmovie1.php">ADD SONGS</a></p>
       <p align="right"><a href="deletesong.php">DELETE SONGS</a></p>
       <p align="right"><a href="latestsongs.php">LATEST SONGS</a></p>
       <p align="right"><a href="#">LATEST MOVIES/ALBUM</a></p>

     </div>
     
     <div class="LAST">
       <p align="center" >copyright@2015</p>
     </div>
</form>
</body>
</html>