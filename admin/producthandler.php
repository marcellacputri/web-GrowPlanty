<?php
include("../partials/connect.php");
$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$description=$_POST['description'];

    $target = "uploads/";
        $file_path = $target . basename($_FILES['file']['name']);
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_store = "../uploads/" . $file_name;

move_uploaded_file($file_tmp, $file_store);

$sql="INSERT INTO products(name,price,picture,description,category_id) VALUES ('$name','$price','$file_path','$description','$category')";


if (mysqli_query($connect,$sql)) {
    
      header('location: productshow.php');
    
}else{
    echo "Failed to Upload";
}


?>
    