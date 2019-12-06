
<?php
if(!defined('DB_HOST'))
         define('DB_HOST','localhost');
if(!defined('DB_USER'))
         define('DB_USER','root');
if(!defined('DB_NAME'))
         define('DB_NAME','modern_tec');
if(!defined('DB_PASSWORD'))
         define('DB_PASSWORD','');
if (!defined('DB_CHARSET'))
           define('DB_CHARSET', 'utf8');
		 
//      mysqli_connect("localhost", user, password,database_name);
$con_db= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(mysqli_connect_errno())
{ 
    echo "Error: Unable to connect to MySQL." ;
    echo "Debugging errno: " . mysqli_connect_errno() ;
    echo "Debugging error: " . mysqli_connect_error() ;
    exit;
}
mysqli_select_db($con_db,DB_NAME);
mysqli_set_charset($con_db, DB_CHARSET);
 





?>