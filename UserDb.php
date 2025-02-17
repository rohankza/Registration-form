<?php

include 'header.php';
session_start();
if(isset($_POST['submit'])){
    $fname=$_POST['Username'];
    $password=$_POST['password'];
    $query="SELECT * FROM regTable WHERE fname='$fname' 
    AND password='$password'";
   $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);

if($total==1){
    $_SESSION['user_name']=$fname;
header('location: dashboard.php');
}else{
    echo"login failure";
};




// $sql="INSERT INTO userData (
//     user_name,
//     password) VALUES('$fname','$password')
// ";


// if(mysqli_query($conn,$sql)){
//     echo"table created";
// } else{
//     "error"/$conn->error;
// };




} ;


?>