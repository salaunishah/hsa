<?php

include("db_conn.php");	

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";

	}

$filePath = $target_file;
$Title = $_POST['title'];
$Date = $_POST['date'];
$Time = $_POST['time'];
$Venue = $_POST['venue'];

$query = "INSERT INTO `upcomingevent` (`upid`, `upfile`, `uptitle`, `date`, `time`, `venue`, `status`) VALUES (NULL, '$filePath', '$Title', '$Date', '$Time','$Venue', 'Y');";
// echo $query;	
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }else{
    	echo 'Upcoming Event Uploaded Successfully';
    }

?>