<?php
session_start();
$id=$_SESSION['id'];
if($id=="")
 {
	 header('location:login.php');
 }
?><?php
error_reporting(0);
session_start();
$id=$_SESSION['id'];
//for blank session
if($id=="")
{
header("location:admin.php");	
}
// for change password
include("conn.php");
extract($_POST);
if(isset($submit))
{
$sel=mysqli_query($link,"select pass from
regis where id='$id'");	
$arr=mysqli_fetch_array($sel);
if($op==$arr['pass'])
{
	if($np==$cp)
	{
	mysqli_query($link,"update regis set
	pass='$np' where id='$id'");
	$msg="Password change";
	}
	else
	{
	$msg="New password and confirm password are not match";	
	}
}
else
{
  $msg="Old pass is not correct";	
}
}
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
.FOURTH {	border-top: thin solid #000000;
	border-right: thin solid #000000;
	border-left-width: thin;
	border-left-color: #000000;
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
	border-right-width: thin;
	border-right-color: #000000;
	border-top: thin solid #000000;
	border-left: thin solid #000000;
	border-bottom-width: thin;
	border-bottom-color: #000000;
}
.first {	height: 10%;
	width: 100%;
	border: medium none #000000;
}
.middle {	height: 80px;
	*width: 35.8%;
	float: left;
}
</style>
</head>

<body background="../congruent_pentagon.png">
<form>
  <div class="first"><table width="98%" border="1">
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
        <table width="50%" border="1" cellspacing="3" cellpadding="3">
          <tr>
            <td colspan="2"><div align="center"><strong>Change Password</strong></div></td>
          </tr>
          <tr>
            <td colspan="2"><?php
            echo $msg;?></td>
          </tr>
          <tr>
            <td><strong>OldPassword</strong></td>
            <td><strong>
              <input name="op" type="password" required id="op">
            </strong></td>
          </tr>
          <tr>
            <td><strong>New Password</strong></td>
            <td><strong>
              <input type="password" name="np" id="np">
            </strong></td>
          </tr>
          <tr>
            <td><strong>Confirm Password</strong></td>
            <td><strong>
              <input name="cp" type="password" required id="cp">
            </strong></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"> <strong>
              <input type="submit" name="submit" id="submit" value="Submit">
            </strong></div></td>
          </tr>
        </table>
      </div>
      <div class="FOURTH">
        <p align="right"><a href="addmovie1.php">ADD SONGS</a></p>
        <p align="right"><a href="deletemovie.php">DELETE SONGS</a></p>
        <p align="right"><a href="latestsongs.php">LATEST SONGS</a></p>
        <p align="right"><a href="#">LATEST MOVIES/ALBUM</a></p>
        <p align="right">&nbsp;</p>
        <p align="right">&nbsp; </p>
        <p align="right">&nbsp;</p>
      </div>
      <div class="LAST">
        <p align="center" allign="center">copyright@2015</p>
      </div>
      
</form></body>
</html>