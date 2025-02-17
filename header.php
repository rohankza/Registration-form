
   <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   // $server="localhost";
   // $username="root";
   // $password="root@123";
   // $database="pojectDb";

   // $connect=new mysqli($server,$username,$password,$database);
   // if(!$connect){
   //  die("mysql_connection_erro".mysql_connect_error());
   // }else{
   //  echo "connection stablish";
   // };

   // echo "<br>";



   $server="localhost";
   $username="root";
   $password="root@123";
   $database="registrationDb";
   
   $conn=new mysqli($server,$username,$password,$database);
   if($conn->connect_error){
    die("mysql_connection_erro".$conn->connect_error);
   };

   echo "<br>";
   



   ?>