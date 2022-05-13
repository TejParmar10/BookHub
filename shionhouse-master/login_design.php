
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style_register_login.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(assets/img/gallery/bg-1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4" id="small-headers">Log In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="index.php" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-home"></span></a>
									</p>
								</div>
			      	</div>
							<form action="login.php" class="signin-form" method="POST">
					<div class="form-group mb-3">
						<label class="label" id="small-headers" >Username</label>
						<input type="text" class="form-control" placeholder="Username" name="Uname"required style="border-color:#9F78FF;">
					</div>
					<div class="form-group mb-3">
						<label class="label"  id="small-headers">Password</label>
						<input type="password" class="form-control" placeholder="Password"name="Upassword" required style="border-color:#9F78FF;">
					</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn  rounded submit px-3" value="Login" name="submit" id="LoginBtn" style="background-color:#9F78FF;">Log In</button>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a href="signup.php" style="color:#9F78FF">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		const SigninBtn=document.getElementById("SigninBtn");
		SigninBtn.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	</script>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>