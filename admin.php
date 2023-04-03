<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-primary">
	</form>
	<h3 style = "font-family:georgia,garamond,serif;text-align:center">
	A fresh approach to Sell books online.A few clicks is all it takes.
	<br>Contact us and be a part of Our Team</h3>
	<h3 style = "font-family:georgia,garamond,serif;text-align:center;color:midnightblue">
	booktrekker@gmail.com<br></h3>

<?php
	require_once "./template/footer.php";
?>