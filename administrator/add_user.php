<?php 
session_start();
if($_SESSION['user_type']=='Admin'){

?>
<html>
<head>
    
    
    </head>
    <body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  user name:<br>
  <input type="text" name="user_name"><br>
  type of user:<br>
  <input type="radio" name="user_type" value="Admin"> Admin<br>
  <input type="radio" name="user_type" value="User"> user<br>
        user email:<br>
  <input type="email" name="user_email"><br>
  user password:<br>
  <input type="password" name="user_password"><br>
    <input type="submit" value="send">    
</form>
    
    
    
    
    
    </body>

<?php
                               
 require_once "../Connections/con_sql_DB.php";
if($_SERVER['REQUEST_METHOD']=="POST"){   
$user_name=$_POST['user_name'];
$user_type=$_POST['user_type'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password']; 
    $sqlcommand="INSERT INTO Users(U_Name,U_Type,U_email,U_Password) VALUE('$user_name','$user_type','$user_email','$user_password');";
$query=mysqli_query($con_db, $sqlcommand)or die(mysqli_error($con_db));
    if(!$query){
        echo "<script>
        window.location.add_user.php{
        alrt.window('not saved!')
        }
        
        </script>
        
        ";
        
        
    }else{
         echo "<script>
        window.location.add_user.php{
        alrt.window('saved!')
        }
        
        </script>
        
        ";
    
    }
  
    
}                                    
                                    
                                    
    
    
    
    
    
    
    
    ?>













</html>

<?php }
else{
echo 'Erorr:you don\'t have permmeion';}

?>