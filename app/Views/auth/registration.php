



<div id="login">

<div class="container">
	<div id="login-row" class="row justify-content-center align-items-center">
		<div id="login-column" class="col-lg-6">
			<div id="login-box" class="col-lg-12">
				<form id="login-form" class="form" action="<?= base_url('/auth/regist'); ?>">
					<h3 class="text-center text-info">Registration</h3>
					<div class="form-group">
						<label for="username" class="text-info">Username</label><br>
						<input type="text" name="username" id="username" required="" placeholder="Masukkan Username" class="form-control">
					</div>
					<div class="form-group">
						<label for="email" class="text-info">Email</label><br>
						<input type="text" name="email" id="email" required="" placeholder="Masukkan Email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password" class="text-info">Password</label><br>
						<input type="password" name="password" id="password" required="" placeholder="Masukkan Password" class="form-control">
					</div>
					<div class="form-group">
						<br>

						<input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
					</div>
					<div id="register-link" class="text-right">
						<a href="<?= base_url('/auth/login'); ?> " class="text-info">Login here</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>




