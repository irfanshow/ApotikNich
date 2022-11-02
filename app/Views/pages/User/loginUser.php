<?= $this -> extend('template/loginRegisterUser')?>
<?= $this-> section('contentLoginUser')?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url(/assetsLandingPageUser/Alstar/assets/img/obat2.jpg);">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								<a type="submit" value="Sign In" href="#" >Login</a>	
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-50">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="/registerUser" class="txt2">
							Sign Up
						</a>
						<a href="/landingPageUser" class="txt2">
							Home
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

<?= $this -> endSection() ?>