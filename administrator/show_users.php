<?php
if(!isset($_SESSION['user_type']))
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
        <th>#U_ID</th>
        <th>U_Name</th>
           <th>U_Type</th>
           <th>U_email</th>
          <th>U_Password</th>
         <th>U_IP</th>
          <th>U_Date</th>
      </tr>
    </thead>
    <tbody>
        
        
   <?php require_once "../Connections/con_sql_DB.php";
   
     $sqlCommand = "SELECT * from users;";
 $query = mysqli_query($con_db,$sqlCommand) or die (mysqli_error()); 
      
        $i=0;
         while ($row = mysqli_fetch_array($query)) 
		   { 
             $U_ID= $row['U_ID'];
             $U_Name= $row['U_Name'];
              $U_Type=$row['U_Type'];
              $U_Password=$row['U_Password'];
                  $U_IP = $row['U_IP'];
           $U_Date= $row['U_Date'];
echo "<tr>
       <td>$U_ID</td>
        <td>$U_Name</td>
           <td>$U_Type</td>
           <td>$U_email</td>
          <td>$U_Password</td>
         <td>$U_IP</td>
          <td>$U_Date</td>
 
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