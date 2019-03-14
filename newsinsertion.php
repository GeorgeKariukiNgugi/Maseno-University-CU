<?php 
include('includes/databaseConnectivity.php');
 //checking if the add news submit button has been clicked.
   if(isset($_POST['submitevent'])){
	   echo "entered.";
	   $subject = $_POST['subject'];
	   $message = $_POST['message'];
	   
	   //$sql2 = "insert into newsboard (adminid,dateposted,subject,message) values (". 1 . " 2014-04-04 ,' " .$subject."','". $message ."');";
	   $sql2 = " insert into newsboard (adminid,datePosted,subject,message) values (1,'2014-04-04','subject','message');";
	   
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
   
