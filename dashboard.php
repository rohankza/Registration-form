<?php
session_start();

$userprofile="hi ".$_SESSION['user_name'];
echo "welcome :".$userprofile;
?>