<?php 
$showAlert = false; 
$showError = false; 
$exists=false;
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "ecomproject";
     $conn = mysqli_connect($servername, 
         $username, $password, $database);
    if($conn) 
	{
				echo "success"; 
			$username = $_POST["Uname"]; 
			$password = $_POST["Upassword"]; 
			$firstName=$_POST["Fname"];
			$lastName=$_POST["Lname"];
			$phone=$_POST["phoneNumber"];
			$email=$_POST["Uemail"];
			$sql = "Select * from login";
			$result = mysqli_query($conn, $sql);  
					$sql = "INSERT INTO `login` ( `FirstName`, 
						`LastName`, `UserName`,`Password`,`PhoneNumber`,`email`) VALUES ('$firstName','$lastName','$username', 
						'$password','$phone','$email');";
			
					$result = mysqli_query($conn, $sql);
					// echo"The data is going to get inserted";
			
					if ($result) 
					{
						$showAlert = true; 
					// echo"Data insertion done";
					}      
					else
					{
						echo"There is some error!";
					}
    
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
    
}
    ?>

    <!DOCTYPE html>
    <html lang="en">
  <head>
  	<title>Signin</title>
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
			      			<h3 class="mb-4" style="color:#2D3E4E">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="index.php" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-home"></span></a>
									</p>
								</div>
			      	</div>
							<form action="" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" >First Name</label>
                                    <input type="text" class="form-control" name="Fname" placeholder="First Name" required style="border-color:#9F78FF;">
                                </div>
                          <div class="form-group mb-3">
                              <label class="label" >Last Name</label>
                            <input type="text" class="form-control" name="Lname" placeholder="Last Name" required style="border-color:#9F78FF;">
                          </div>
			      		<div class="form-group mb-3">
			      			<label class="label" >Username</label>
			      			<input type="text" class="form-control"name="Uname" placeholder="Username" required style="border-color:#9F78FF;">
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" >Password</label>
		              <input type="password" class="form-control"name="Upassword" placeholder="Password" required style="border-color:#9F78FF;">
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label" >Phone Number</label>
		              <input type="number" class="form-control" name="phoneNumber"placeholder="Phone Number" required style="border-color:#9F78FF;">
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label" >Email Address</label>
		              <input type="email" class="form-control"  name="Uemail" placeholder="Email Address" required style="border-color:#9F78FF;">
		            </div>
		            <div class="form-group">
		            	<input type="submit" class="form-control btn  rounded submit px-3" id="SigninBtn"style="background-color:#9F78FF;">
		            </div>
		          </form>
		          <!-- <p class="text-center">Not a member? <a data-toggle="tab" href="" name="">Sign Up</a></p> -->
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
