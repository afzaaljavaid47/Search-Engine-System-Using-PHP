<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body style="padding: 0;margin: 0;">
<div class="row" style="background-color: rgba(0,0,0,0.1);">
	<div class="col-md-1"> 
	<img src="search.jpg" style="width: 55px;height: 55px;border-radius: 25px;margin-left: 30px;">
	</div>
	<form>
	<div class="col-md-6">
		<div class="input-group">
	<input type="text" name="" class="form-control">
	<input type="submit" name="" class="input-group-btn" value="Go!">
    </div>
    </form>
</div>
</body>
</html>
<?php
if(isset($_POST['search']))
{
	$t=$_POST['text'];
	if($t=="")
	{
		?>
		<script type="text/javascript">
			alert("Please Write Something In The Description");
		</script>
		<?php
		exit();
	}
	else
	{
		$con=mysqli_connect("localhost","root","","engine");
		$sql="SELECT * FROM `site` WHERE `keyword` LIKE '%$t%'";
		$run=mysqli_query($con,$sql);
		$r=mysqli_num_rows($run);
		if($r<1)
		{
			?>
		<script type="text/javascript">
			alert("Sorry No Result Found!");
		</script>
		<?php
		exit();
		}
		else
		{
			?>
			<div class="container" style="margin-left: 150px;">
				<h2>Images for <strong><?php echo $t;?></h2>
			<?php
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			<img src="images/<?php echo $data['img'];?>" style="width: 140px;height: 140px;"></td>
			<?php

		}
		?>
		<br><br>
		<div class="">
		<a href="" style="text-decoration: none;">More Images For <?php echo $t;?>			
		</a>
	</div>
		<hr style="width: 100%;margin-right: 150px;">
		<?php
	}
	}
}

?>