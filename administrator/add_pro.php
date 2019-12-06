<?php
session_start();
if($_SESSION['user_type']=='Admin'){ ?>

<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial Black, Gadget, sans-serif;
	font-size: 12px;
}
body {
	background-image: url(../style/stripBG.jpg);
	background-repeat: repeat-x;
	color:#000;
	background-color: #FEFEFE;
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
<table width="100%"  align="center" cellpadding="6">
  <tr>
    <td align="center"><table width="100%"  cellpadding="8">
      <tr>
        <td width="78%" valign="top" >
        <div style="width:656px; height:400px; overflow: auto;">
        
      <div id="suggestion">
   <h2 align="center">add product</h2>
      <div id="respond">
         <form action="insert_pro.php" method="POST"   enctype="multipart/form-data" align="center" >
             <div class="form-group">
       <table width="100%" class="table" align="center" >
      <tr>
      <td width="30%">pro name : </td>
      <td width="70%"><input type="text" name="f_pro_name" id="name" value="" size="30"  required="required" class="form-control"/></td>
      </tr>
           <tr>
      <td width="30%" height="142">pro desc : </td>
      <td width="70%"><textarea name="f_pro_des" cols="30" rows="10" id="name"  required="required"></textarea></td>
      </tr>
                 <tr>
      <td width="30%">pro price : </td>
      <td width="70%"><input type="text" name="f_pro_price" id="name" value="" size="20"  required="required" /></td>
      </tr>
       <tr>
      <td width="30%">pro image : </td>
      <td width="70%"><input type="file" name="f_pro_img" id="name" value="select image" size="20"  required="required" /></td>
      </tr>
            <tr>
                 <td width="30%">pro type : </td>
         <td> 
 phone <input type="radio" name="f_pro_type" value="phone" checked> 
  laptop<input type="radio" name="f_pro_type" value="laptop"> 
  tab<input type="radio" name="f_pro_type" value="tab">
             </td> 
           </tr>
      </table>
          <p>
           <center> 
            &nbsp;
        </div>
           <input name="submit" type="submit" id="submit" value="add" />
                <input name="reset" type="reset" id="reset" tabindex="5" value= "cancel "/>
            </center>
          </p>
        </form>
      </div>
</div>
        
        </div>          
        </td>
      </tr>
      <tr>
      
        </tr>
    </table>
  </tr>
</table>
<div align="center"></div><br />
</body>
</html>
<?php }else{
echo "Erorr: you don't have permission ";
}
?>