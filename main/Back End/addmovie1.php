<?php
session_start();
$id=$_SESSION['id'];
if($id=="")
 {
	 header('location:login.php');
 }
?><?php
error_reporting(0);
extract($_POST);
include("conn.php");
$ch='y';
//while($ch=='y')
//{
	if(isset($sub))
	{
		if(isset($r1))
		{
		if($att != mysqli_query($link,"select song_name from mp3songs where song_name='$att';"))
		{
		$fn=$_FILES['att']['name'];
		if(move_uploaded_file($_FILES['att']['tmp_name'],"$fn"))
		{
			if(mysqli_query($link,"insert into mp3songs values('','$t1','$fn','$t2','curdate()','$t3','$date');"))
			{
				
				$msg="uploading successful";
				
			}
            else
            {
            	
				$msg="problem in adding into database";
				
                
            }
		}
            else
            {
            	
				$msg="problem in uploading";
				
           	} 
		}
    else
    {
    	
		$msg="this song already exist";
		
    }
		}
		if(isset($r2))
		{
		if($att != mysqli_query($link,"select song_name from mp3songs where song_name='$att';"))
		{
		$fn=$_FILES['att']['name'];
		if(move_uploaded_file($_FILES['att']['tmp_name'],"$fn"))
		{
			if(mysqli_query($link,"insert into mp3songs values('$t1','','$fn','$t2','curdate()','$t3','$date');"))
			{
				
				$msg="uploading successful";
				
			}
            else
            {
            	
				$msg="problem in adding into database";
				
                
            }
		}
            else
            {
            	
				$msg="problem in uploading";
				
           	} 
		}
    else
    {
    	
		$msg="this song already exist";
		
    }
		}
	}
/*	else
	{
		
			$msg="please try again";
			
	}*/
	
/*	if(check())
	{
		$ch='y';	
	}
	else
	{
		$ch='n';	
	}
	
		
}*/

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.FOURTH {	height: 90%;
	width: 25%;
	float: right;
}
.FOURTH {	height: 90%;
	width: 25%;
	padding: 30px;
	float: right;
	margin-top: auto;
}
.FOURTH {
	border-top: thin solid #000000;
	border-right: thin solid #000000;
	border-left-width: thin;
	border-left-color: #000000;
	width: 20%;
	padding-top: 0%;
	padding-left: 0%;
	padding-right: 0%;
}
.LAST {	height: 10%;
	width: 100%;
	margin-top: 1%;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: auto;
	float: right;
	border: thin solid #000000;
}
.SECOND {	word-spacing: normal;
	height: 10%;
	width: 24.4%;
	float: left;
	text-decoration: none;
	text-shadow: 0px 0px;
	white-space: normal;
	top: 10px;
	border: thin solid #000000;
}
.THIRD {	height: 90%;
	width: 30%;
}
.THIRD {	height: 90%;
	width: 30%;
	float: left;
	margin-top: auto;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
	padding-top: 30px;
	/*border-right-width: thin;
	border-right-color: #000000;
	border-top: thin solid #000000;
	border-left: thin solid #000000;
	border-bottom-width: thin;
	border-bottom-color: #000000;*/
}
.first {	height: 10%;
	width: 100%;
	border: medium none #000000;
}
.middle {
	height: 63%;
	width: 49%;
	float: left;
}
</style>
</head>

<body background="../congruent_pentagon.png">
<form>
<div class="first">
<table width="98%" border="1">
  <tbody>
    <tr>
      <th scope="col"><a href="admin.php">HOME</a></th>
      <th scope="col"><a href="changepassword.php">CHANGE PASSWORD</a></th>
      <th scope="col"><a href="../Front end/About Us.php">ABOUT US</a></th>
      <th scope="col"><a href="logout.php">LOGOUT</a></th>
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
        <p>&nbsp; </p>
        <table width="351" border="1">
          <tr>
            <td colspan="2"><?php echo $msg;
			echo $fn; ?></td>
          </tr>
          <tr>
            <td><input type="radio" name="r1" id="radio" value="radio">
            <label for="r1">MOVIE</label></td>
            <td> <input type="radio" name="r2" id="radio2" value="radio">
            ALBUM </td>
          </tr>
          <tr>
            <td width="121">MOVIE NAME</td>
            <td width="218"><input type="text" name="t1" id="t1"></td>
          </tr>
          <tr>
            <td>SONG NAME</td>
            <td><input type="file" name="att" id="att"></td>
          </tr>
          <tr>
            <td>CONTRIBUTING ARTISTS</td>
            <td><input type="text" name="t2" id="t2"></td>
          </tr>
          <tr>
            <td>CATEGORY</td>
            <td><input type="text" name="t3" id="t3"></td>
          </tr>
          <tr>
            <td>RELESING DATE</td>
            <td><input type="date" name="date" id="date"></td>
          </tr>
          <tr>
            <td><input type="submit" name="sub" id="sub" value="Submit"></td>
            <td><input type="reset" name="reset" id="reset" value="Reset"></td>
          </tr>
        </table>
      </div>
      <div class="FOURTH">
        <p align="right"><a href="addmovie1.php">ADD SONGS</a></p>
        <p align="right"><a href="deletemovie.php">DELETE SONGS</a></p>
        <p align="right"><a href="latestsongs.php">LATEST SONGS</a></p>
        <p align="right"><a href="showmovielist.php">LATEST MOVIES/ALBUM</a></p>
        <p align="right">&nbsp;</p>
        <p align="right">&nbsp; </p>
        <p align="right">&nbsp;</p>
      </div>
      <div class="LAST">
        <p align="center" allign="center">copyright@2015</p>
      </div>
      
</form>
</body>
</html>