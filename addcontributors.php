<?php

include("db_conn.php"); 

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";

    }

$name = $_POST['name'];
$imagePath = $target_file;
$designation= $_POST['designation'];

$query = "INSERT INTO `contributors` (`id`,  `image`, `name`,`designation`) VALUES (NULL, '$imagePath', '$name','$designation');";
// echo $query; 
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }else{
        echo 'Contributor uploaded successfully';
    }

?>