<?php
error_reporting(0);

include 'dbcon.php';


$msg = "";

// If submit button is clicked ...
if (isset($_POST['submit'])) {
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$link = mysqli_real_escape_string($con, $_POST['uploadfile']);

	// $filename = $_FILES["uploadfile"]["name"];
	// $tempname = $_FILES["uploadfile"]["tmp_name"];
	// $folder = "./image/" . $filename;


	// Get all the submitted data from the form
	$sql = "INSERT INTO datalink (title,link) VALUES ('$title','$link')";

	// Execute query
	mysqli_query($con, $sql);

	// Now let's move the uploaded image into the folder: image
	// if (move_uploaded_file($tempname, $folder)) {
	// 	echo "<script>alert('Video uploaded successfully!')</script>";
	// } else {
	// 	echo "<script>alert('Failed to upload Video!')</script>";
	// }
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Video Upload</title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="styletest.css" />
</head>
<style>
#content{
    width: 50%;
    /* justify-content:space-around; */
    /* align-items:baseline; */
    /* margin: 20px auto; */
    /* border: 1px solid #cbcbcb; */
}
#display-image{
    width: 100%;
    justify-content: center;
    padding: 5px;
    margin: 15px;
}
video{
    margin: 0 5px;
    width: 300px;
    height: 200px;
}
</style>
<body>
	<!-- <div class="container"> -->
	<section id="content" class="container">
		<form method="POST" action="" class="form">
		<div class="input-box">
			<label>Title: </label>
        	<input type="text" name="title" placeholder="Title" required><br>
		</div>
		<div class="input-box">
		<label>Link: </label>
			<input type="text" name="uploadfile" placeholder="Link"/>
		</div>
		<div class="input-box">
			<button class="btn" type="submit" name="submit">UPLOAD</button>
		</div>
		</form>
	</section>
	<div id="display-image">
		<?php
		$query = " select * from datalink ";
		$result = mysqli_query($con, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
				<!-- <video  width="320" height="240" controls> -->
                       <iframe width="320" height="240" src="<?php echo $data['link']?>"></iframe>
                       <!-- <iframe width="320" height="240" src="https://youtube.com/embed/uXbfOck5mmY"></iframe> -->
						<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/uXbfOck5mmY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    <!-- </video> -->
		<?php
		}
		?>
	<!-- </div> -->
	</div>
</body>

</html>
