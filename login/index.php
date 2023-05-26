<?php include_once('inc/header.php'); ?>

<div style="text-align: center;margin: 10px;">
	<a href="">
      <img src="download-5.png" style="width: 40rem;">
                            </a>                       
</div>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">

		<div class="jumbotron">
			<h4>Login</h4>
		<form action="login.php" method="POST">
			<div class="form-group">
				<label>Username:</label>
				<input type="email" name="user_email" class="form-control"  value="<?php if(isset($_COOKIE["user_email"])) { echo $_COOKIE["user_email"]; } ?>" required>
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="user_password" class="form-control" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required>
			</div>
		<input type="submit" name="login" value="Login" class="btn btn-primary">
			
		</form>
	</div>
	</div>
	<div class="col-md-4"></div>
</div>
