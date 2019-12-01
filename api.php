<?php

session_start();

$_SESSION['name']=$_POST['name'];
$_SESSION['position']=$_POST['position'];
$_SESSION['skill']=$_POST['skill'];
$_SESSION['mail']=$_POST['mail'];
$_SESSION['mobile']=$_POST['mobile'];
$_SESSION['module']=$_POST['module'];

if (!empty($_FILES)) {
    copy($_FILES['photo']['tmp_name'], "photo/". $_FILES['photo']['name']);   
}

$_SESSION['pname']=$_FILES['photo']['name'];
header('location:preview.php');

?>