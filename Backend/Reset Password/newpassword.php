<?php include('logic-en.php'); ?>
<!DOCTYPE html>
<html">
<head>
	<title>Reset your password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/Reseten.css">
<!--===============================================================================================-->

	<!-- Styleshhet -->
	<link rel="stylesheet" href="style.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous"></script>


</head>
<body>

<!--header-->
<div id="header" class="navbar-light bg-light">
	<div id="language"><a href="Reset Password-ar.html">العربية</a> | <a href="Reset Password-en.html">English</a></div>
	<div id="sign"><a href="#">sign up</a> | <a href="#">sign in</a></div>
</div>
<!--End header-->

<!--logo-->
<div id="logo" class="rounded mx-auto d-block">
	<a href="#"><img id="logo" src="logo.JPG" alt="logo"></a>
</div>
<!--End logo-->

<!--Navbar-->
<div id="nav-bar" dir="ltr">
	<nav class="navbar navbar-expand-lg navbar-light bg-light st">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto" id="space">
				<ul class="nav justify-content-center navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" id="spacing" href="#">About The Society</a>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="committees.html" id="spacing" id="navbarDropdown"
							role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Committees
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="committee1.html" target="-blank">Committee 1</a>
							<a class="dropdown-item" href="committee2.html" target="-blank">Committee 2</a>
							<a class="dropdown-item" href="committee3.html" target="-blank">Committee 3</a>
							<a class="dropdown-item" href="committee4.html" target="-blank">Committee 4</a>
							<a class="dropdown-item" href="committee5.html" target="-blank">Committee 5</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="committees.html">All Committees</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="spacing" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Communicate
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="https://twitter.com/aisksa2020?lang=ar"
								target="_blank">Twitter</a>
							<a class="dropdown-item" href="#">Email</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="spacing" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							More
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Memberships</a>
							<a class="dropdown-item" href="#">Society ambassadors</a>
							<a class="dropdown-item" href="#">Courses and events</a>
							<a class="dropdown-item" href="FAQs Page en.html">Common questions</a>
						</div>
					</li>
				</ul>
		</div>
	</nav>
</div>
<!-- END Navbar-->




	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-form-title" style="background-image: url(https://thumbs.gfycat.com/SpotlessGreatIvorybilledwoodpecker-size_restricted.gif);">

				</div>
					<br>
				<p>  Reset your password</p>

				<p class="tital1" style="font-size: 15px;   margin-left: 10px;" > Enter your  email and, we'll send you a link to reset your password. </p>




				<form  name="f1" action="Reset-Password-en"   class="login100-form validate-form">

					<div  class="wrap-input100 validate-input m-b-26" data-validate="Username is required"  >

						<input   id="myDiv"  class="input100" type="password" name="new_pass" placeholder="  New password "   >
            </div>
            <div  class="wrap-input100 validate-input m-b-26" data-validate="Username is required"  >

            <input   id="myDiv"  class="input100" type="password" name="new_pass_c" placeholder="  Re password "   >

						<span class="focus-input100"></span>

					</div>

					<span id="email1" style="font-size: 13px;  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">  </span>


					<div class="container-login100-form-btn"></div>

					<div class="form-submit">




						<input type="submit" value="Send" class="submit" name="new_password" id="submit" value="register" onclick="return validate()" />



					</div>
					</div>

				</form>

			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<!--footer-->
</script>
<script type="text/javascript">
	function validate(){
	var email=document.f1.email.value;
	var check_email=  /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;;
	var status=false;

	if(email=="")
	{
	document.getElementById("email1").innerHTML=
    document.getElementById("email1").innerHTML=   " Email must be a valid email" ;
	" هذا الحقل مطلوب " ;
	document.getElementById("myDiv").style.border = "1px solid red";
	document.getElementById("email1").style.display="block";
	status=false;


	}
	else if(!check_email.test(email))
	 {
    document.getElementById("email1").innerHTML=   "The email address is not valid" ;
    document.getElementById("myDiv").style.border = "1px solid red";
	document.getElementById("email1").style.display="block";
	status=false;
	}

	else{

	document.getElementById("myDiv").style.border = "1px solid green";
	document.getElementById("email1").style.display="none";


	}


	return status;

	}

	</script>


<script type="text/javascript">
	function google() {
	window.location = "http://google.com";
	}
	</script>

<section dir="rtl" id="footer">
	<br>
	<script language="JavaScript">
		document.write(' جميع الحقوق محفوظة، جمعية الذكاء الاصطناعي ');
		document.write(new Date().getFullYear());
		document.write(' &copy; ');
	</script>
</section>




<!--End footer-->
</body>
</html>
