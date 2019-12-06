<?php
session_start();
if($_SESSION['user_type']=='Admin'){

 function makeFrame($element)
	{
		$frame = "<div class='nice_frame'>";
		$frame .=$element;
		$frame .="</div>";
		 return $frame; 
	}
	  $myElement1 = makeFrame("Add Product");
	  $myElement2 = makeFrame("Delet Product");
	  $myElement3 = makeFrame("Informaion about server");
	  $myElement4 = makeFrame("Add User");
	  $myElement5 = makeFrame("Delete User");
	  $myElement6 = makeFrame("Show table of users");
	  $myElement7 = makeFrame("Show table of products");
	  $myElement8 = makeFrame("Show table of contact us");
	  

?>

<!DOCTYPE html>
<html>
<head>
<style>

   body{background: url(5.jpg) no-repeat center fixed; 
    background-size:contain;
    }

   .nice_frame{
		padding: 12px;
		text-align: center;
		margin: 15px ;
		width: 200px;
		border-radius: 10px;
		background-color: #EEE;
		border:1px solid #CCC;
		display: inline-table;

	 }
   .max_div{
      margin-left: 130px;
   	margin-top: 60px;
   	width: 100%;
   }

   .max_div2{
   	      margin-left: 130px;

   	margin-top: 20px;
   	width: 100%;
   }
</style>	
</head>
<body>
<div class="max_div">
<?php
echo "<a href='add_pro.php'>".$myElement1."</a>";
echo"<a href='delet_pro.php'>".$myElement2."</a>";
echo "<a href='information.php'>".$myElement3."</a>";
echo "<a href='add_user.php'>".$myElement4."</a>";
?>
	
</div>

<div class="max_div2">
<?php

echo "<a href='delete_user.php'>".$myElement5."</a>";
echo "<a href='show_users.php'>".$myElement6."</a>";
echo "<a href='show_products.php'>".$myElement7."</a>";
echo "<a href='show_contact_us.php'>".$myElement8."</a>";
?>
	
</div>
  
</body>
</html>
<?php }else{
echo "Erorr: you don't have permission ";
} ?>