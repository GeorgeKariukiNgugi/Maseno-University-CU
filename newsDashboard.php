<?php session_start();
   include('includes/databaseClass.php');
   include('includes/fetchingnews.php');
   include('includes/insertngNews.php');
   $id = null;
   // on submitting to make the new event.
   if(isset($_POST['submitevent'])){
	    $subject = $_POST['subject'];
	   $message = $_POST['message'];
	   
	   $insertingNewsObject = new AddNewNews();
	   
	   $insertingNewsObject->addnews($subject,$message,"newsDashboard.php");
   }
   
   if(isset($_POST['edit'])){
	
	     $editid = $_GET['id'];
	   $_SESSION['editid'] = $editid;
	  echo " <script src=\"assets/js/jquery.min.js\"></script>";
	  echo "<script> $(function(){
		$(\"#edit\").modal();
	});</script>";  
   }
   if(isset($_POST['delete'])){
	
	      $id = $_GET['id'];
		  $_SESSION['id'] = $id;
	  echo " <script src=\"assets/js/jquery.min.js\"></script>";
	echo "<script> $(function(){
		$(\"#mymodal\").modal();
	});</script>";
   }
   
   if(isset($_POST['view'])){
	   $viewid = $_GET['id'];
	   $_SESSION['viewid'] = $viewid;
	  echo " <script src=\"assets/js/jquery.min.js\"></script>";
	  echo "<script> $(function(){
		$(\"#view\").modal();
	});</script>"; 
   } 
   
   if(isset($_POST['deleteRecord'])){
	   $databasedelete = new database();
	   $databasedelete->connect();
	   $sql3 = "delete from newsboard where newsid =". $_SESSION['id'].";";
	   //$result = ($databasedelete->conn)->query($sql3);
	   
	   if($result = ($databasedelete->conn)->query($sql3)){
		    echo " <script src=\"assets/js/jquery.min.js\"></script>";
	echo "<script> $(function(){
		$(\"#modaldeletionsuccess\").modal();
	});</script>";
		   
	   }
	   else{
		  echo "sql query error". $databasedelete->conn->error;
	   }
   }
   
   // BEGIN FROM EDITING THE EVENTS.
   
   if(isset($_POST['editrecord'])){
	   $newSubject = $_POST['newSubject'];
	   $newMessage = $_POST['newMessage'];
	   $sql5 = "update newsboard set subject = '".$newSubject.".', message = '". $newMessage ."' where newsid = ". $_SESSION['editid'] .";";
	   
	                  $upadtedatabase = new database();
					  $upadtedatabase->connect();
					  
					  if($upadtedatabase->conn->query($sql5)){
						  echo "update done.";
					  }
					  else{
						  echo $upadtedatabase->conn->error;
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

<body>
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
            <li class="breadcrumb-item"><a href="index.php"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="login.php"><span>Login</span></a></li>
            <li class="breadcrumb-item"><a href="superAdmin.php"><span>Admin Dashboard</span></a></li>
        </ol>
        <div class="row">
            <div class="col">
                <h1 style="font-family:times new roman;">News Table .</h1>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3 offset-6"><button class="btn btn-primary btn-lg"  type="submit" data-toggle= "modal" data-target = "#addnews"><i class="fa fa-plus"></i><strong>ADD EVENT.</strong></button></div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-dark table-sm">
                <caption>Table Caption</caption>
                <thead>
                    <tr>
                        <th>SNo</th>
                        <th>Author</th>
                        <th>Author Tite</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
				<?php
				                $fechObject = new FetchNews();
								
								$fechObject->fetchNewsfuction(2);
				?>
				       
                    <!--tr>
                        <td>1</td>
                        <td>Maureen Koech</td>
                        <td>Media and IT</td>
                        <td>Subject</td>
                        <td>dATES</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <form action="superAdmin.php" method="post"><button class="btn btn-warning" type="submit" style="border-radius: 50%" data-toggle="tooltip" title="view" name="view"><i class="fa fa-eye" style="font-size:20px;color:rgb(255,255,255);"></i></button></form>
                                </div>
                                <div class="col">
                                    <form action="superAdmin.php" method="post"><button class="btn btn-success active" type="submit" style="border-radius:50%" data-toggle="tooltip" title="edit" name="edit"><i class="fa fa-edit" style="font-size:26px;"></i></button></form>
                                </div>
                                <div class="col">
                                    <form action="superAdmin.php" method="post"><button class="btn btn-danger" type="submit" style="border-radius:50%" data-toggle="tooltip" title="delete" name="delete"><i class="fa fa-trash" style="font-size:26px;"></i></button></form>
                                </div>
                            </div>
                        </td>
                    </tr-->
                </tbody>
                <tfoot>
                    <tr>
                        <td><strong>SNo</strong><br></td>
                        <td><strong>Author</strong><br></td>
                        <td><strong>Author Tite</strong><br></td>
                        <td><strong>Subject</strong><br></td>
                        <td><strong>Date</strong><br></td>
                        <td><strong>Operations</strong><br></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
	
		<div role="dialog" tabindex="-1" class="modal fade" id="addnews">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#f9d44f;">
                <h4 class="modal-title">Add Event ...</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="background-color:#f9d44f;">
                <form action="newsDashboard.php" method="post">
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
<div role="dialog" tabindex="-1" class="modal fade" id = "mymodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style = "background-color:#f7c9c9;">
                <h4 class="modal-title">Confirm !!!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style = "text-align:center;">
                <p> Do you want to delete this event ???</p>
				 <!--div class = "row">
				   <div class = "col-3 offset-5"></div>
				</div--> 
				<form action = "newsDashboard.php" method = "post">
				<button class="btn btn-success" type="submit" style = "color:white" name = "deleteRecord"><span class = "fa fa-thumbs-up"></span>OK !!</button>
				</form>
            </div>
            <div class="modal-footer" style = "background-color:#f7c9c9;color:white;"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>


<div role="dialog" tabindex="-1" class="modal fade" id = "edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style = "background-color:#f7c9c9;">
                <h4 class="modal-title">Confirm !!!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style = "color:black;">
                <p> Do you want to edit this event ???</p> 
				<form action = "newsDashboard.php" method = "post">
				
				<?php
					  $sql4 = "SELECT datePosted,subject,message from newsboard where newsid = '" .$_SESSION['editid']. "';";
					  
					  $viewdatabase = new database();
					  $viewdatabase->connect();
					  
					  if($result = ($viewdatabase->conn)->query($sql4)){
						  $number = $result->num_rows;
						  if($number == 1){
							   while($rows = $result->fetch_object()){
							  $date = $rows->datePosted;
							  $subject = $rows->subject;
							  $message = $rows->message;
							  
							  //echo $subject."This is subject.";
							  
							 echo "<p>Subject:</p>
				<textarea name = \" newSubject\"rows=\"2\" cols=\"50\" placeholder = \"". $subject."\"></textarea>
				<p>Message:</p>
				<textarea name = \"newMessage\"rows=\"6\" cols=\"50\" placeholder = \"$message\"></textarea>
				<div class = \"row\">
				     <div class = \"col-3 offset-5\">
					       <button class=\"btn btn-success\" type=\"submit\" style = \"color:white\" name = \"editrecord\"><span class = \"fa fa-thumbs-up\"></span>OK !!</button>
					 </div>
				</div>";
						  } 
						  }
						
					  }
					  else{
						  echo $conn->error;
					  }
					  ?>
				
				
				</form>
            </div>
            <div class="modal-footer" style = "background-color:#f7c9c9;color:white;"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>



 <div role="dialog" tabindex="-1" class="modal fade" id = "view">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style = "background-color:#f7c9c9;">
                <h4 class="modal-title">View !! </h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style = "font-family:'Times new roman'">
                 <?php
					  $sql4 = "SELECT datePosted,subject,message from newsboard where newsid = '" .$_SESSION['viewid']. "';";
					  
					  $viewdatabase = new database();
					  $viewdatabase->connect();
					  
					  if($result = ($viewdatabase->conn)->query($sql4)){
						  $number = $result->num_rows;
						  if($number == 1){
							   while($rows = $result->fetch_object()){
							  $date = $rows->datePosted;
							  $subject = $rows->subject;
							  $message = $rows->message;
							  echo "<b>DATE:</b>   ".$date."</br>";
							  echo "<b>SUBJECT:</b>   ".$subject."</br>";
							  echo "<b>MESSAGE:</b>   ".$message."</br>";
						  } 
						  }
						
					  }
					  else{
						  echo $conn->error;
					  }
				?>
            </div>
            <div class="modal-footer" style = "background-color:#f7c9c9;color:white;"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade" id = "modaldeletionsuccess">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style = "background-color:#f7c9c9;">
                <h4 class="modal-title">Confirm !!!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style = "text-align:center;">
                <p> The record has successfully been deleted</p>
            </div>
            <div class="modal-footer" style = "background-color:#f7c9c9;color:white;"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
   <?php
		
		   include("includes/footer.php");
		?>
		
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/modalHide.js"></script>
</body>

</html>