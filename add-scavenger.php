<?php
$target = "userScavengerImages/";
$target = $target . basename( $_FILES['photo']['name']); 

while (file_exists($target))
{
    $target = $target . basename( $_FILES['photo']['name'],'.jpg') . uniqid() . '.jpg';
}

$name=$_POST['name'];
$activity="scavenger hunt";
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
		header("Location: scavenger_image_fail.php#submit");
		die();
	}
}

if ($conn->query($sql) === TRUE) {
	header("Location: scavenger_submit.html");
	die();
}
else {
	header("Location: scavenger_image_fail.php#submit");
	die();
}

$conn->close();

?> 


