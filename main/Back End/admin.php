<?php
session_start();
$id=$_SESSION['id'];
if($id=="")
 {
	 header('location:login.php');
 }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.main {
	background-color: #60F;
}
.header {
	font-size: 14px;
	color: #03C;
	text-decoration: blink;
	float: left;
	width: 40%;
}
.first {
	height: 10%;
	width: 100%;
	border: medium none #000000;
}
.SECOND {
	word-spacing: normal;
	height: 10%;
	width: 24.4%;
	float: left;
	text-decoration: none;
	text-shadow: 0px 0px;
	white-space: normal;
	top: 10px;
	border: thin solid #000000;
}
.THIRD {
	height: 90%;
	width: 30%;
}
.THIRD {
	height: 90%;
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
.FOURTH {
	height: 90%;
	width: 25%;
	float: right;
}
.FOURTH {
	height: 90%;
	width: 25%;
	padding: 30px;
	float: right;
	margin-top: auto;
}
.LAST {
	height: 10%;
	width: 100%;
	margin-top: 1%;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: auto;
	float: right;
	border: thin solid #000000;
}
.FOURTH {
	border-top: thin solid #000000;
	border-right: thin solid #000000;
	border-left-width: thin;
	border-left-color: #000000;
}
.middle {
	height: 80px;
	width: 35.8%;
	float: left;
}
</style>
</head>

<body background="../congruent_pentagon.png">
<form id="form1" name="form1" method="post">
  <div>
    <div class="first">
      <div class="SECOND">
        <div align="center"><a href="admin.php">HOME</a> </div>
      </div>
     <div align="center" class="SECOND"><a href="changepassword.php">CHANGE PASSWORD</a></div>
     <div class="SECOND">
       <div align="center"><a href="../Front end/About Us.php">ABOUT US</a></div>
     </div>
     <div class="SECOND">
       <div align="right"><a href="logout.php">LOGOUT</a></div>
     </div>
     <div class="first"></div>
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
     <div class="middle"></div>
     <div class="FOURTH">
       <p align="right"><a href="addmovie1.php">ADD SONGS</a></p>
       <p align="right"><a href="deletesong.php">DELETE SONGS</a>       </p>
       <p align="right"><a href="latestsongs.php">LATEST SONGS</a></p>
       <p align="right"><a href="#">LATEST MOVIES/ALBUM</a></p>
       <p align="right">&nbsp;</p>
       <p align="right">&nbsp;       </p>
       <p align="right">&nbsp;</p>
     </div>
     <div class="LAST">
       <p align="center" allign="center">copyright@2015</p>
     </div>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
    </div></div></form>
</body>
</html>