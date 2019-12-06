<?php
session_start();
if($_SESSION['user_type']=='Admin'){


  $s_pro_name = $_POST['pro_name'];

//echo $s_pro_name;
require_once "../Connections/con_sql_DB.php";

// Add the info into the database table

$query = mysqli_query($con_db, "DELETE FROM Products WHERE P_Name like '$s_pro_name'") or die (mysqli_error($con_db));

if (!$query) 
		{
		exit();	
		}
		else
		{
		echo "<center><font face='Verdana' style='color:#0C6;font-size:20px;font-family:ae_AlArabiya, Arial, Helvetica, sans-serif;' ><center>   <br> 
              <i class='fa  fa-check fa-fw' ></i> تم حفظ البيانات    </font></center><br>";
echo 'Operation Completed Successfully! <br /><br /><a href="index.php">Click Here</a>';
		}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Website</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial Black, Gadget, sans-serif;
	font-size: 12px;
}
body {
	background-image: url(../style/stripBG.jpg);
	background-repeat: repeat-x;
	color:#FFF;
	background-color: #996600;
}
a:link {
	color: #FBE7B7;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FBE7B7;
}
a:hover {
	text-decoration: underline;
	color: #FFF;
}
a:active {
	text-decoration:none;
	color: #FFF;
}
-->
</style></head>

<body>
</body>
</html>
<?php }else{
echo "Erorr: you don't have permission ";
}
?>