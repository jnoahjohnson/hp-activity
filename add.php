<?php
function findExtension ($filename)
{
   $filename = strtolower($filename) ;
   $exts = explode(".", $filename) ;
   $n = count($exts)-1;
   $exts = $exts[$n];
   return $exts;
}

$filename = $_FILES['photo']['name'];
$filename = strtolower($filename);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
    
$target = "userImages/";
$target = $target . basename( $_FILES['photo']['name']) . uniqid() . '.' . $ext; 


$name=$_POST['name'];
$activity=$_POST['activity'];
$pic=($_FILES['photo']['name']); 

$servername = "byu9";
$username = "devpinea_noah";
$password = "cFk]q2wXr1Gc";
$dbname = "devpinea_hogwarts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 


$sql = "INSERT INTO `Upload` (`UploadName`, `UploadActivity`, `UploadPic`) VALUES ('$name', '$activity', '$pic')";

if ($pic !== "") {
	if (move_uploaded_file($_FILES['photo']['tmp_name'],$target)) {
		$txt = "Yes";
	} else {
		header("Location: failedImage.php");
		die();
	}
}

if ($conn->query($sql) === TRUE) {
	header("Location: submit_successful.html");
	die();
}
else {
	header("Location: submit-failed.php#submit");
	die();
}

$conn->close();

?> 


