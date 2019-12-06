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
  <h2>Products</h2>
                                       
  <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
      <tr>
        <th>#P_ID</th>
        <th>P_Name</th>
           <th>P_Desc</th>
           <th>P_Price</th>
          <th>P_Image</th>
         <th>P_Type</th>
          <th>P_Sold</th>
             <th>P_Date</th>
      </tr>
    </thead>
    <tbody>
        
        
   <?php require_once "../Connections/con_sql_DB.php";
   
     $sqlCommand = "SELECT * from products;";
 $query = mysqli_query($con_db,$sqlCommand) or die (mysqli_error()); 
      
        $i=0;
         while ($row = mysqli_fetch_array($query)) 
		   { 
             $P_ID= $row['P_ID'];
             $P_Name= $row['P_Name'];
              $P_Desc=$row['P_Desc'];
              $P_Price=$row['P_Price'];
                  $P_Image = $row['P_Image'];
           $P_Type= $row['P_Type'];
              $P_Sold= $row['P_Sold'];
              $P_Date= $row['P_Date'];
echo "<tr>
        <td>$P_ID</td>
        <td>$P_Name</td>
           <td>$P_Desc</td>
           <td>$P_Price</td>
          <td>$P_Image</td>
         <td>$P_Type</td>
          <td>$P_Sold</td>
             <td>$P_Date</td>
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