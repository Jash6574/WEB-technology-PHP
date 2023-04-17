<?php
error_reporting(0);

include 'dbcon.php';


$msg = "";

// If submit button is clicked ...
if (isset($_POST['submit'])) {
	$title = mysqli_real_escape_string($con, $_POST['title']);

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;


	// Get all the submitted data from the form
	$sql = "INSERT INTO data (title,link) VALUES ('$title','$filename')";

	// Execute query
	mysqli_query($con, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<script>alert('Video uploaded successfully!')</script>";
	} else {
		echo "<script>alert('Failed to upload Video!')</script>";
	}
}
?>

<link rel="stylesheet" href="style.css" />


<section class="container">
		<form method="POST" action="" class="form" enctype="multipart/form-data" >
		<div class="input-box">
			<label>Title: </label>
        	<input type="text" name="title" placeholder="Title" required><br><br>
		</div>
		<div class="select-box">
			<input type="file" accept="video/mp4" name="uploadfile" value="" style="width:100%"/>
		</div>
		<div class="input-box">
			<button class="btn" type="submit" name="submit">UPLOAD</button>
		</div>
		</form>
	</section>
