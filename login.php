<?php
include('includes/databaseConnectivity.php');
    include("includes/databaseClass.php");
	include("includes/fetchingnews.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$error = null;
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	echo $username;
	echo $password;
	
	
	$sql = "select id from login where username ='". $username ."' and password ='". $password . "';";
	
	if($conn-> query($sql)){
		echo "query fine";
		
		$result = $conn-> query($sql);
		
		$number = $result->num_rows;
		echo $number;
		
		if($number == 1){
			header('Location:superAdmin.php');
		}
		else{
			// SETTIN THE ARRAY IF AN ERROR IS EXPERIENCED.
			$error = array();
			array_push($error, "Wrong Credentials.");

		}
	}
	else{
		
		echo $conn->error ."error registered.";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasenoChristianUnion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
<title>Maseno university christian union Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:rgb(249,242,250);">
    <div style="margin-bottom:0px;">
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color:#6c5b7b;height:100px;">
            <div class="container"><a class="navbar-brand" href="#" style="color:rgb(255,255,255);"><img src="assets/img/cu.png">Maseno Christian Union</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    
    </div>
    </nav>
    </div>
    <div class="login-dark" style="background-image:url(&quot;assets/img/church2.jpeg&quot;);">
        <form action="login.php" method="post">
            <h2 class="text-center" style="font-family:times new roman;color:rgb(249,249,249);">Log In Page</h2>
			 <?php
			     if(isset($error)){
                      echo "<div class=\"alert alert-danger\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  $error[0]
</div>";					 
				 }
			 ?>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" required="" placeholder="username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" required="" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
        <?php
		   include("includes/footer.php");
		?>
    <!-- END f
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>