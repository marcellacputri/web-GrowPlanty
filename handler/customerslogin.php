<?php
session_start();

if(isset($_POST['login'])){

include('../partials/connect.php');



$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * from customers Where email='$email' AND password='$password'";
$results=$connect->query($sql);
$final=$results->fetch_assoc();

$_SESSION['email']=$final['email'];
$_SESSION['password']=$final['password'];

$_SESSION['customerid']=$final['id'];
$_SESSION['uname']=$final['username'];



if($email=$final['email'] AND $password=$final['password']){
  header('location: ../userpage.php');
}else{
  echo "<script> alert('Credentials are wrong');
        window.location.href='../login.php';
        </script>";
}






}



?>