<?php include('logic.php'); ?>
<!DOCTYPE html>
<html">
<head>
	<title>استعادة كلمة المرور</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
		<div id="language"><a href="Reset Password-en.html">English</a> | <a href="Reset Password-ar.html">العربية</a></div>
		<div id="sign"><a href="#">تسجيل جديد</a> | <a href="#">تسجيل الدخول</a></div>
	</div>
	<!--End header-->

	<!--logo-->
	<div id="logo" class="rounded mx-auto d-block">

		<a href="#"><img id="logo" src="logo.JPG" alt="logo"></a>

	</div>
	<!--End logo-->

	<!--Navbar-->
	<div style=" background-color:#F8F9FA; ;" dir="rtl" id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 70px ;   ">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation "
				style="text-align: center;  ">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto" id="space">
					<ul class="nav justify-content-center navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" id="spacing" href="#">عن الجمعية</a>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="committees.html" id="spacing" id="navbarDropdown"
								role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								اللجان
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="committee1.html" target="-blank">لجنة 1</a>
								<a class="dropdown-item" href="committee2.html" target="-blank">لجنة 2</a>
								<a class="dropdown-item" href="committee3.html" target="-blank">لجنة 3</a>
								<a class="dropdown-item" href="committee4.html" target="-blank">لجنة 4</a>
								<a class="dropdown-item" href="committee5.html" target="-blank">لجنة 5</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="committees.html">جميع اللجان</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="spacing" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								التواصل
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="https://twitter.com/aisksa2020?lang=ar"
									target="_blank">تويتر</a>
								<a class="dropdown-item" href="#">الإيميل</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="spacing" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								أخرى
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">العضويات</a>
								<a class="dropdown-item" href="#">سفراء الجمعية</a>
								<a class="dropdown-item" href="#">الدورات والفعاليات</a>
								<a class="dropdown-item" href="FAQs Page.html">الأسئلة الشائعة</a>
							</div>
						</li>
					</ul>
			</div>
		</nav>
	</div>
	<!-- END Navbar-->



	<div class="limiter"></div>
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-form-title" style="background-image: url(https://thumbs.gfycat.com/SpotlessGreatIvorybilledwoodpecker-size_restricted.gif);">

				</div>
					<br>
				<p>  إعادة تعيين كلمة المرور</p>

				<p class="tital1" style="font-size: 15px;   margin-right: 10px;" > .الرجاء إدخال البريد الإلكتروني المسجل لإرسال رابط إستعادة كلمة المرور
				</p>




				<form  name="f1" action="Reset-Password-ar.php"   class="login100-form validate-form">

					<div  class="wrap-input100 validate-input m-b-26" data-validate="Username is required"  >

						<input   id="myDiv"  class="input100" type="text" name="email" placeholder=" البريد الإلكتروني"  required >
						<span class="focus-input100"></span>

					</div>

					<span id="email1" style="font-size: 13px; ">  </span>


					<div class="container-login100-form-btn"></div>

					<div class="form-submit">

						 <input    type="submit" value="إلغاء " class="cancel" name="reset" id="cancel"  onclick="window.location.href = ''; return false;" />



						<input type="submit" value="ارسال" class="submit" name="submit" id="submit" value="register" onclick="return validate()" />
					</div>
					</div>

				</form>

			</div>
		</div>
	</div>



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
    document.getElementById("email1").innerHTML=   "البريد الإلكتروني لا يمكن تركه فارغًا" ;
	" هذا الحقل مطلوب " ;
	document.getElementById("myDiv").style.border = "1px solid red";
	document.getElementById("email1").style.display="block";
	status=false;


	}
	else if(!check_email.test(email))
	 {
    document.getElementById("email1").innerHTML=   "البريد الالكتروني غير صحيح" ;
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
