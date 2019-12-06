<?php



require_once "../Connections/con_sql_DB.php";




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Website</title>
<link rel="stylesheet" href="../css/bootstrap.min.css"  type="text/css">
  <link rel="stylesheet" href="../css/bootstrap.css"/>
  
  <link rel="stylesheet" href="../css/font-awesome.min.css"/>
  <link rel="stylesheet" href="../Droid_Sans/DroidSans.ttf"/>

<style type="text/css">
   body,td,th {
    font-family: Arial Black, Gadget, sans-serif;
    font-size: 12px;
     }
    body {
    {background: url(5.jpg) no-repeat center fixed; 
    background-size:contain;
    
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
</style>
</head>

<body>
<?php
include('index.php');

?>
<table width="100%" border="0" align="center" cellpadding="6">
  <tr>
    <td align="center"><table width="80%" border="0" cellpadding="8">

      <tr>
        <td width="78%" valign="top" >
        <div style="width:1100px; height:400px; overflow: auto;">
        
      <div id="suggestion">
   <h2 align="center">Delet Prod</h2>
      <div id="respond">
         <form action="#" method="POST"   enctype="multipart/form-data"  >
       <table class="table" >
      <tr>
      <td width="50%">name of Prod : </td>
      <td width="50%"><input type="text" name="name_delet" id="name" value="" size="30"  required="required" /></td>
      </tr>
      </table>
          <p>
           <center> 
            &nbsp;
        
           <input name="submit" type="submit" id="submit" value="Search" />
                <input name="reset" type="reset" id="reset" tabindex="5" value= "cancel "/>
            </center>
          </p>
        </form>
      </div>
      <table width="100%">         

      
      <?php if(isset($_POST["name_delet"]))
{
	

$Unam = $_POST['name_delet'];
$sqlCommand = "SELECT P_Name,P_Type, P_Desc, P_Price,P_Image from Products WHERE P_Name like '%$Unam%'; "; 
$query = mysqli_query($con_db, $sqlCommand) or die (mysqli_error()); 
    $i=0;
while ($row = mysqli_fetch_array($query)) { 
  $s_pro_name = $row['P_Name'];
  $s_pro_type = $row['P_Type'];
  $s_pro_des = $row['P_Desc'];
  $s_pro_img=$row['P_Image'];
  $s_pro_pri=$row['P_Price'];
    if($i%3==0 && $i!=0)
    			  echo '<tr>';
 
    
  echo "<br><td style='border:#6B450C thin solid;'  width='200px' valign='top' ><div '><img src='".$s_pro_img."'  width='190px' height='190px' /><br>name of pro : $s_pro_name<br>des of pro :<p style='width:200px;overflow:auto;' > $s_pro_des</p><br>price : $s_pro_pri$
 
  <form action='del.php' method='POST'   enctype='multipart/form-data'  >
 <input type='hidden' value='$s_pro_name' name='pro_name'/>
<input type='submit' name='del' value='delet' class='btn btn-primary' style='width: 270px;' />
 </form>
</div></td>";
if($i%3==0)
 echo " </tr>";
   $i++;

}
if(mysqli_num_rows($query)<=0)
{
	echo "<center><font face='Verdana' style='color:#0C6;font-size:20px;font-family:ae_AlArabiya, Arial, Helvetica, sans-serif;' ><center>   <br> 
              <i class='fa  fa-check fa-fw' ></i>لا يوجد هذا المنتج</font></center><br>";
}

}
    ?>    

  

   
   </table>
 
</div>
        
        </div>          
        </td>
      
     
    </table>
  </tr>
</table>
<?php
#include'../footer.php';

?>
</body>
</html>