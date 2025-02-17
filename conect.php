<?php



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   $server="localhost";
   $username="root";
   $password="root@123";
   $databse='registrationDb';
   $connect=new mysqli($server,$username,$password,$databse);
   if(!$connect){
    die("mysql_connection_erro".mysql_connect_error());
   }else{
    echo "connection stablish";
   };
 echo "<br>"
   // $sql="CREATE TABLE regTable(
   //    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   //    fname VARCHAR(12),
   //    lname VARCHAR(12),
   //    password VARCHAR(13),
   //    _gender VARCHAR(12),
   //    email VARCHAR(16)
   // )";
   // if(mysqli_query($connect,$sql)){
   //  echo "create db";
   // }else{
   //  echo "not created  db";
   // };


 

?>