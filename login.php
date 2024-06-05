<?php
	$title = "User";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="user_verify.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Pass</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-primary">
		<a href="signup.php"><input type="button" name="signup" class="btn btn-primary" value="Signup"></a>
	</form>

<?php
	require_once "./template/footer.php";
?>