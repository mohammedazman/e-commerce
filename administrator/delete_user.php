<?php
session_start();
if($_SESSION['user_type']=='Admin'){
include'show_users.php';     
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>


</head>

<body>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
 enter the name of user to delete:<br>
  <input type="text" name="user_name"><br>
    <input type="submit" value="send">    
</form>
</body>
</html>
<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
  $user_name =$_POST['user_name'];

//echo $s_pro_name;
require_once "../Connections/con_sql_DB.php";

// Add the info into the database table

$query = mysqli_query($con_db, "DELETE FROM users WHERE U_Name like '$user_name'") or die (mysqli_error($con_db));

if (!$query) 
		{
   
		exit();	
		}
		else
		{
		 echo 'Operation Completed Successfully! <br /><br /><a href="index.php">GO BACK</a>';
            header("REFRESH:0;");

		}}

}else{
echo "Erorr: you don't have permission ";
}
?>