<?php
$link=mysqli_connect("localhost","root","","music") or die("not connected to mysql");
//include("conn.php");
error_reporting(0);
extract($_POST);
if(isset($Login))
{
	$sel=mysqli_query($link,"select id,
	pass from regis where id='$id' and pass ='$pass'");
	if($arr=mysqli_fetch_array($sel))
	{
	if(($id==$arr['id']) and ($pass==$arr['pass']))
	{
		session_start();
		$_SESSION['id']=$arr['id'];
		header("location:admin.php");	}
	else
	{
	$msg="enter correct id and pass";	
	}
	}
	else
	{
		$msg="not connected to database";
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.table1 {
	border: 2px solid hsla(157,72%,47%,1);
	border-radius: 10%;
}
</style>
</head>

<body background="../Front end/images/abstract-wallpaper-20.jpg">
<form id="form1" name="form1" method="post" >
  <div class="first">
    <div align="center">
      <table class="table1">
        <tr>
          <td colspan="2"><div align="center">LOGIN HERE</div></td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $msg; ?></td>
        </tr>
        <tr>
          <td width="89"> ID[Username]:</td>
          <td width="144"><input type="text" name="id" id="id"></td>
        </tr>
        <tr>
          <td>PASSWORD:</td>
          <td><input type="password" name="pass" id="pass"></td>
        </tr>
        <tr >
        	<td><input type="submit" value="Login" name="Login" id="sub"></td>
            <td><input type="reset" name="reset" id="reset" value="Reset"></td>
        </tr>
      </table>
    </div>
    <p>&nbsp;</p>
  </div>
</form>
</body>
</html>
