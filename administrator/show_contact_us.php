<?php
session_start();
if($_SESSION['user_type']=='Admin'){ ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../css/jax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../css/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
  <h2>Users</h2>
                                       
  <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
      <tr>
        <th>#C_ID</th>
        <th>C_Name</th>
            <th>C_Phone</th>
           <th>C_Email</th>
          <th>C_Text</th>
          <th>C_Date</th>
      </tr>
    </thead>
    <tbody>
        
        
   <?php require_once "../Connections/con_sql_DB.php";
   
     $sqlCommand = "SELECT * from Contact_us;";
 $query = mysqli_query($con_db,$sqlCommand) or die (mysqli_error()); 
      
        $i=0;
         while ($row = mysqli_fetch_array($query)) 
		   { 
             $C_ID= $row['C_ID'];
             $C_Name= $row['C_Name'];
              $C_Phone=$row['C_Phone'];
              $C_Email=$row['C_Email'];
                  $C_Text = $row['C_Text'];
           $C_Date= $row['C_Date'];
echo "<tr>
         <td>$C_ID</td>
        <td>$C_Name</td>
            <td>$C_Phone</td>
           <td>$C_Email</td>
          <td>$C_Text</td>
          <td>$C_Date</td>
 
      </tr>";
              
         }    ?>
              

      
      
        
    </tbody>
  </table>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_ref_table-all&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:03 GMT -->
</html>
<?php }else{
echo "Erorr: you don't have permission ";
}
?>