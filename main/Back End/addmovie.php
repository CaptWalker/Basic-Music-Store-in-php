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
if(isset($sub))
{
	
		if(isset($r1))
		{
		if($att != mysqli_query($link,"select movie from image where img='$att';"))
		{
		$fn=$_FILES['att']['name'];
		if(move_uploaded_file($_FILES['att']['tmp_name'],"images/$fn"))
		{
			if(mysqli_query($link,"insert into image values('$fn','$t1','');"))
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
		if($att != mysqli_query($link,"select album from image where img='$att';"))
		{
		$fn=$_FILES['att']['name'];
		if(move_uploaded_file($_FILES['att']['tmp_name'],"images/$fn"))
		{
			if(mysqli_query($link,"insert into image values('$fn','','$t1');"))
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

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body background="../congruent_pentagon.png">
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="349" border="1">
    <tr>
      <td colspan="3"><?php echo $msg; ?></td>
    </tr>
    <tr>
      <td width="113"><input type="radio" name="r1" id="r1" value="radio">
        MOVIE</td>
      <td colspan="2"><input type="radio" name="r2" id="r2" value="radio">
        ALBUM</td>
    </tr>
    <tr>
      <td>Name</td>
      <td colspan="2"><input type="text" name="t1" id="t1"></td>
    </tr>
    <tr>
      <td>Image</td>
      <td colspan="2"><input type="file" name="att" id="att"></td>
    </tr>
    <tr>
      <td><input type="submit" name="sub" id="sub" value="Submit"></td>
      <td width="48"><input type="reset" name="reset" id="reset" value="Reset"></td>
      <td width="166"><input type="submit" name="submit" id="submit" value="Add More"></td>
    </tr>
  </table>
</form>
</body>
</html>