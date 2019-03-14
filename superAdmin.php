<?php
   include('includes/databaseConnectivity.php');
   if(isset($_POST['submit'])){
	   $fname = $_POST['fname'];
	   $lname = $_POST['lname'];
	   $title =  $_POST['title'];
	   $password =  $_POST['password'];
	   $year =  $_POST['year'];
	   
	  // inserting the data into the database.
	  
	  $sql = " insert into admindetails (fName,lName,title,servingYear,dateRegistred) values ('" .$fname. "','" .$lname."','".$title."','" .$year."',curdate());";
	  
	  $result = $conn->query($sql);
	  
	  if($result){
		   echo "<div role=\"dialog\" tabindex=\"-1\" class=\"modal fade show\" style=\"display: block;\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h3 style=\"color:rgb(247,5,49);\">Congratulations !!!!</h3>
                <p><strong>User has successfully been added</strong></p>
            </div>
            <div class=\"modal-footer\"><a class=\"btn btn-info\" role=\"button\" href=\"superadmin.php\">Ok.</a></div>
        </div>
    </div>
</div>";
		 
	  }
	  else{
		  echo "Error was experienced" . $conn-> error ;
	  }
   }
    
   
   //checking if the add news submit button has been clicked.
    if(isset($_POST['submitevent'])){
	   echo "entered.";
	   $subject = $_POST['subject'];
	   $message = $_POST['message'];
	   
	   //$sql2 = "insert into newsboard (adminid,dateposted,subject,message) values (". 1 . " 2014-04-04 ,' " .$subject."','". $message ."');";
	   $sql2 = " insert into newsboard (adminid,datePosted,subject,message) values ( 1 ,'".date("Y-m-d")."','$subject','$message');";
	   
	   if($conn -> query($sql2)){
		   		   echo "<div role=\"dialog\" tabindex=\"-1\" class=\"modal fade show\" style=\"display: block;\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h3 style=\"color:rgb(247,5,49);\">Congratulations !!!!</h3>
                <p><strong>You have successfully added an event.</strong></p>
            </div>
            <div class=\"modal-footer\"><a class=\"btn btn-info\" role=\"button\" href=\"superadmin.php\">Ok.</a></div>
        </div>
    </div>
</div>";
	   }
	   else{
		   echo $conn -> error . "This is the error in insertion.";
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
    <div style="margin-bottom:110px;">
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color:#6c5b7b;height:100px;">
            <div class="container"><a class="navbar-brand" href="#" style="color:rgb(255,255,255);"><img src="assets/img/cu.png">Maseno Christian Union</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <p class="text-right ml-auto navbar-text" style="color:#ffffff;"><strong>Welcome ?? Admin Name ??&nbsp;</strong></p><span class="ml-auto navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#"><strong>Log Out</strong></a></span></div>
    </div>
    </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 style="font-family:times new roman;">Super Administrator DashBoard.</h3>
            </div>
            <div class="col-3 offset-1 align-self-end mr-md-auto">
                <div class="dropdown"><button class="btn btn-warning btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><strong>Manage Content</strong></button>
                    <div class="dropdown-menu dropdown-menu-left" role="menu"><a class="dropdown-item" role="presentation" href="#">Add Users</a><a class="dropdown-item" role="presentation" href="#">Add Posts</a><a class="dropdown-item" role="presentation" href="#">Add Comments</a></div>
                </div>
            </div>
        </div>
        <ol class="breadcrumb" style="background-color:rgb(86,198,198);margin-top:16px;">
            <li class="breadcrumb-item"><a href="index.html"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="login.html"><span>Login</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span>Admin Dashboard</span></a></li>
        </ol>
        <div class="row">
<div class="col-md-3">
    <div class="card">
        <div class="card-header" style="background:linear-gradient(90deg ,rgba(171,226,101,0.03),rgba(171,226,101,0.03));background-color:#7ef048;">
            <h5 class="mb-0">Navigation</h5>
        </div>
        <div class="card-body" style="color:rgb(0,0,0);">
            <div class="list-group"><button class="list-group-item list-group-item-action" id = "newMessage" data-target = "#addnews" data-toggle = "modal"><span><strong>New Event.</strong></span></button><button class="list-group-item list-group-item-action" id = "homeMessage"><span><strong>Home Message</strong></span></button><button class="list-group-item list-group-item-action " href = "newsboard.php"><span><strong>News Table</strong></span></button></div>
        </div>
    </div>
</div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color:#7ef048;">
                        <h5 class="mb-0">Frequent Actions.</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="color:rgb(0,0,0);">
                                <div class="card" style="background:linear-gradient(90deg,rgb(200,100,200) 0%,rgb(153,3,190) 100%);color:rgb(255,255,255);" data-target="#modal" data-toggle="modal">
                                    <div class="card-body">
                                        <p style="color:rgb(255,255,255);"><i class="fa fa-user" style="font-size:55px;color:rgb(249,249,249);"></i>&nbsp; &nbsp; <strong>Manage&nbsp;</strong></p>
                                        <p><strong>Users</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="color:rgb(0,0,0);"><a href = "managecomments.html">
                                <div class="card" style="background:linear-gradient(90deg,#3f5efb 0%, #fc466b 100%);">
                                    <div class="card-body" style="color:rgb(255,255,255);">
                                        <p><i class="fa fa-comments" style="font-size:55px;"></i>&nbsp; &nbsp; <strong>Manage&nbsp;</strong></p>
                                        <p><strong>Comments</strong></p>
                                    </div>
                                </div></a></div>
                            <div class="col"><a href = "manageevents.html">
                                <div class="card" style="background:linear-gradient(90deg, #11998e 0%, #38ef7d 100%);">
                                    <div class="card-body" style="color:rgb(255,255,255);">
                                        <p><i class="fa fa-newspaper-o" style="font-size:55px;"></i>&nbsp; &nbsp; <strong>Manage&nbsp;</strong></p>
                                        <p><strong>News /Events&nbsp;</strong></p>
                                    </div>
                                </div></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 style="margin-top:20px;margin-bottom:10px;font-family:&quot;Times New Roman&quot;;">News.</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-dark">
                <caption>News table.</caption>
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Author</th>
                        <th>Author Title</th>
                        <th>Subject</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
							<?php
							
							     // the sql query to get the news.
								 
								 $sql = "select news.datePosted as dates,news.subject, concat(admin.fName, ' ', admin.Lname) as name, admin.title from newsboard as news inner join admindetails as admin on news.adminid = admin.adminId ;";
								 							 
								 if($result = $conn->query($sql)){
									 $sno = 0;
									 $number = $result-> num_rows;
									 if($number>0){
										 	 while($rows = $result-> fetch_object()){
										 $date = $rows->dates;
										 $subject = $rows->subject;
										 $name = $rows->name;
										 $title = $rows->title;	
                                         $sno++;										 
										 echo "<tr>
										             <td>$sno</td>
													 <td>$name</td>
													 <td>$title</td>
													 <td>$subject</td>
													 <td>$date</td>
										       </tr>";
									 }
									
									 }
								else{
										 echo "<tr><td style = \"text-align:center;\"><b>No event/news.</b><td></tr>";
									 }									 
								 }
								 else{
									 echo $conn->error . "Is the problem when doing the etting of the record.";
								 }
							
							?>
                <tfoot>
                    <tr>
                        <td>Sno</td>
                        <td>Name</td>
                        <td>Title</td>
                        <td>Subject</td>
                        <td>Date</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-family:times new roman;"><strong>MANAGE USERS.</strong></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col"><button class="btn btn-success btn-block btn-lg" type="button" id="add" data-toggle="modal" data-target="#modal1"><strong>ADD USER</strong></button></div>
                        <div class="col"><button class="btn btn-danger btn-block btn-lg" type="button" id="remove" data-toggle="modal" data-target="#modal"><strong>REMOVE USER</strong></button>
                            <div class="modal fade" role="dialog" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                        <div class="modal-body">
                                            <p>The content of your modal.</p>
                                        </div>
                                        <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-family:times new roman;"><strong>ADD USER.</strong></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form action="superadmin.php" method="post"><label><strong>Names :</strong></label>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">First :</span></div><input class="form-control" type="text" name="fname" required="">
                                        <div class="input-group-append"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Last :</span></div><input class="form-control" type="text" name="lname" required="">
                                        <div class="input-group-append"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label><strong>Title:</strong></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user" style="font-size:26px;"></i></span></div><input class="form-control" type="text" name="title" required="">
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                        <div class="form-group"><label><strong>Set Password:</strong></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key" style="font-size:26px;"></i></span></div><input class="form-control" type="text" name="password" required="">
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                        <div class="form-group"><label><strong>Year Elected:</strong></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar" style="font-size:26px;"></i></span></div><input class="form-control" type="text" name="year" required="">
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col"><button class="btn btn-success" type="submit" name = "submit">ADD .</button><button class="btn btn-info" type="button" data-dismiss="modal">Close</button></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
	
	<div role="dialog" tabindex="-1" class="modal fade" id="addnews">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#f9d44f;">
                <h4 class="modal-title">Add Event ...</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="background-color:#f9d44f;">
                <form action="superAdmin.php" method="post">
                    <div class="form-group"><label><strong>Subject:</strong></label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div><input type="text" name="subject" placeholder="subject" class="form-control" style="background-color:#f7eaba;" />
                            <div class="input-group-append"></div>
                        </div>
                    </div>
                    <div class="form-group"><label><strong>Message :</strong></label><textarea rows="7" name="message" placeholder="message" class="form-control" style="background-color:#f7eaba;"></textarea></div><button class="btn btn-success btn-block" type="submit" name="submitevent"><strong>ADD EVENT.</strong></button></form>
            </div>
            <div class="modal-footer" style="background-color:#f9d44f;"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
	
    <footer><footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
        <!--   <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
          </div> -->
          <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
            <h3 class="heading">Church Quick Links</h3>
            <div class="row">
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="#">Board Ministry</a></li>
                  <li><a href="#">Media and IT Ministry</a></li>
				  <li><a href="#">High school Ministry</a></li>
                  <li><a href="#">Hospitality Ministry</a></li>
                  <li><a href="#">Intercessory Ministry</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="#">Senior Adult Ministry</a></li>
                  <li><a href="#">Marriage Ministries</a></li>
                  <li><a href="#">Missions & Outreach</a></li>
                  <li><a href="#">Prayer Ministry</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Location</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Privacy &amp; Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Events</h3>
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Consectetur Adipisicing Elit</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Dolore Tempora Consequatur</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Perferendis eum illum</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">P.O BOX 416 ,MASENO, KENYA</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">masenocu015@gmail.com</span></a></li>
				<li><a href="login.html"><span class="icon ion-android-lock"></span><span class="text">LogIn</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/modalHide.js"></script>
</body>

</html>