<?= $this -> extend('template/loginRegisterUser')?>
<?= $this-> section('contentLoginUser')?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url(/assetsUser/fruit/assets/img/obat2.jpg);">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Register Kasir
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Type your name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="container-login100-form-btn p-t-30 p-b-31">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Register
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-25">
						<span class="txt1 p-b-17">
							Or Sign In Using
						</span>

						<a href="/loginUser" class="txt2">
							Sign In
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