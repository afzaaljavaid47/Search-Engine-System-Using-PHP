<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google.com</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	

	<center><h2><b>Insert Website</b></h2></center>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
		    <div class="row">
			<label class="col-md-2" for="Site">Site Title</label>
			<div class="col-md-10"><input type="text" id="Site" placeholder="Enter Site Title......." class="form-control" name="t"></div>
		    </div>
	        </div>

	        <div class="form-group">
		    <div class="row">
			<label class="col-md-2" for="Site">Site Link</label>
			<div class="col-md-10"><input type="text" id="Site" placeholder="Enter Site Link......." class="form-control" name="l"></div>
		    </div>
	        </div>

	        <div class="form-group">
		    <div class="row">
			<label class="col-md-2" for="Site">Site Keyword</label>
			<div class="col-md-10"><input type="text" id="Site" placeholder="Enter Site Keyword......." class="form-control" name="k"></div>
		    </div>
	        </div>

	        <div class="form-group">
		    <div class="row">
			<label class="col-md-2" for="Site">Site Description</label>
			<div class="col-md-10"><textarea placeholder="Enter Title Description......" name="d" class="form-control"></textarea></div>
		    </div>
	        </div>

	        <div class="form-group">
		    <div class="row">
			<label class="col-md-2" for="Site">Site Image</label>
			<div class="col-md-10">
				<input type="file" id="Site" name="i" class="form-control">
			</div>
		    </div>
	        </div>
	        <center>
	        <input type="submit" name="add" class="btn btn-danger" value="Add Website" style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <input type="reset" name="" class="btn btn-primary" value="Cancel" style="font-size: 20px;">
	        </center>
		</form>
	</div>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['add']))
{
	$title=$_POST['t'];
	$link=$_POST['l'];
	$Keyword=$_POST['k'];
	$Description=$_POST['d'];
	$Image=$_FILES['i']['name'];
	$Imagetemp=$_FILES['i']['tmp_name'];
	move_uploaded_file($Imagetemp,"images/$Image");
	$con=mysqli_connect("localhost","root","","engine");
	$sql="INSERT INTO `site`(`title`, `link`, `keyword`, `des`, `img`) VALUES ('$title','link','$Keyword','$Description','$Image')";
	$run=mysqli_query($con,$sql);
	if($run)
	{
		?>
		<script type="text/javascript">
			alert("Website Add Successfully");
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Some Errors Ckeck Please");
		</script>
		<?php
	}

}
?>