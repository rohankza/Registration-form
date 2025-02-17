<?php
include 'conect.php';
if($_POST['submit']){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$gender=$_POST['gndr'];
 $email_id=$_POST['email'];

if($fname !="" && $lname !="" && $password !="" && $gender !="" && $email_id!="")
{
$sql="INSERT INTO regTable(
    fname ,
    lname ,
    password ,
    _gender ,
    email 
 ) VALUES ('$fname',' $lname','$password','$gender','$email_id')";


 if(mysqli_query($connect,$sql)){
  echo "record create";
 }else{
  echo "not created  db";
 };

}else{
echo "invalid ";
};

}



?>