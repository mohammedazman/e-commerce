<?php
session_start();
if($_SESSION['user_type']=='Admin'){


$s_pro_name = $_POST['f_pro_name'];
$s_pro_des = $_POST['f_pro_des'];
$s_pro_pri=$_POST['f_pro_price'];
$s_pro_type=$_POST['f_pro_type'];


require_once "../Connections/con_sql_DB.php";

//-----------------------uplo--------------------

$target_path = "uploads/";     // Declaring Path for uploaded images.
if(is_dir($target_path)==false){
                mkdir("$target_path", 0700);		// Create directory if it does not exist
            }

// Loop to get individual element from the array

$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
$ext = explode('.', basename($_FILES['f_pro_img']['name']));   // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
   
$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.

if (($_FILES["f_pro_img"]["size"] < 10000000)     // Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if (move_uploaded_file($_FILES['f_pro_img']['tmp_name'], $target_path)) {
// If file moved to uploads folder.
echo '<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
echo  "<img src='$target_path' width='200px' height='200px'/><br/>";
} else {     //  If File Was Not Moved.
echo $j. '<span id="error">please try again!</span><br/><br/>';
}
} else {     //   If File Size And File Type Was Incorrect.
echo $j. '<span id="error">***Invalid file Size or Type***</span><br/><br/>';
}
////----------------end upload----------------------------------------///


// Add the info into the database table

$query = mysqli_query($con_db, "INSERT INTO products (P_Name,P_Type, P_Desc, P_Price,P_Image) 
        VALUES('$s_pro_name','$s_pro_type','$s_pro_des','$s_pro_pri','$target_path')") or die (mysqli_error($con_db));

if (!$query) 
		{
		echo "<center><font face='Verdana' style='color:#0C6;font-size:20px;font-family:ae_AlArabiya, Arial, Helvetica, sans-serif;' ><center>   <br> 
              <i class='fa  fa-check fa-fw' ></i>  حفظ البيانات لم يتم </font></center><br><br /><a href=Øindex.phpØ>Click Here</a>";
		exit();	
		}
		else
		{
		echo "<center><font face='Verdana' style='color:#0C6;font-size:20px;font-family:ae_AlArabiya, Arial, Helvetica, sans-serif;' ><center>   <br> 
              <i class='fa  fa-check fa-fw' ></i> تم حفظ البيانات    </font></center><br>";
echo 'Operation Completed Successfully! <br /><br /><a href="index.php">Click Here</a>';
		}

?>
<?php }else{
echo "Erorr: you don't have permission ";
}
?>