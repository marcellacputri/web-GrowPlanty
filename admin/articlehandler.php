<?php
include("../partials/connect.php");
$title=$_POST['title'];
$content1=$_POST['content1'];
$content2=$_POST['content2'];
$content3=$_POST['content3'];
$content4=$_POST['content4'];
$content5=$_POST['content5'];

    $target = "articlesuploads/";
        $file_path = $target . basename($_FILES['file']['name']);
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_store = "../articlesuploads/" . $file_name;

move_uploaded_file($file_tmp, $file_store);

$sql="INSERT INTO articles(title,picture,content1,content2,content3,content4,content5) VALUES ('$title','$file_path','$content1','$content2','$content3','$content4','$content5')";


if (mysqli_query($connect,$sql)) {
    
      header('location: productshow.php');
    
}else{
    echo "Failed to Upload";
}


?>
    