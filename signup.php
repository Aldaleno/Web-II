<?php
	$title = "Signup";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="signup_verify.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">nickname</label>
			<div class="col-md-4">
				<input type="text" name="nickname" class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="pass" class="control-label col-md-4">nacionality</label>
			<div class="col-md-4">
				<input type="password" name="nacionality" class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="pass" class="control-label col-md-4">pass</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="pass" class="control-label col-md-4">profession</label>
			<div class="col-md-4">
				<input type="password" name="profession" class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="pass" class="control-label col-md-4">ID</label>
			<div class="col-md-4">
				<input type="password" name="id" class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="pass" class="control-label col-md-4">Address</label>
			<div class="col-md-4">
				<input type="password" name="address" class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="pass" class="control-label col-md-4">phone</label>
			<div class="col-md-4">
				<input type="password" name="phone" class="form-control">
			</div>
		</div>
		<input type="button" name="signup" class="btn btn-primary" value="Signup">
	</form>

<?php
	require_once "./template/footer.php";
?>