<?php
     class FetchNews{
		 
           public $databaseObject = null;
		   
		 function fetchNewsfuction($type){	
         
            $this->databaseObject2 = new database();
		    $this->databaseObject2 -> connect(); 
			 $sql = "select news.newsid,news.datePosted as dates,news.subject, news.message,concat(admin.fName, ' ', admin.Lname) as name, admin.title from newsboard as news inner join admindetails as admin on news.adminid = admin.adminId ;";
								 							 
								 if($result = (($this->databaseObject2)->conn)->query($sql)){
									 $sno = 0;
									 $number = $result-> num_rows;
									 if($number>0){
										 	 while($rows = $result-> fetch_object()){
										 $newsid = $rows->newsid;		 
										 $date = $rows->dates;
										 $subject = $rows->subject;
										 $name = $rows->name;
										 $title = $rows->title;
                                         $message = $rows->message;										 
                                         $sno++;
                                         if($type == 1){
											echo "<tr>
										             <td>$sno</td>
													 <td>$name</td>
													 <td>$title</td>
													 <td>$subject</td>
													 <td>$date</td>
										       </tr>";
											    
										 }										 
										 else if($type == 2){
											 echo "<tr>
										             <td>$sno</td>
													 <td>$name</td>
													 <td>$title</td>
													 <td>$subject</td>
													 <td>$date</td>
													  <td>
                                                        <div class=\"row\">
                                                                                        <div class=\"col\">
                                                                <form action=\"newsDashboard.php?id=$newsid\" method=\"post\"><button class=\"btn btn-warning\" type=\"submit\" style=\"border-radius: 50%\" data-toggle=\"\" title=\"view\" name=\"view\"><i class=\"fa fa-eye\" style=\"font-size:20px;color:rgb(255,255,255);\"></i></button></form>
                                                            </div>
                                                            <div class=\"col\">
                                                                <form action=\"newsDashboard.php?id=$newsid\" method=\"post\"><button class=\"btn btn-success active\" type=\"submit\" style=\"border-radius:50%\" data-toggle=\"modal\" data-target = \"#modal\" title=\"edit\" name=\"edit\"><i class=\"fa fa-edit\" style=\"font-size:26px;\"></i></button></form>
                                                            </div>
                                                            <div class=\"col\">
                                                                <form action=\"newsDashboard.php?id=$newsid\" method=\"post\"><button class=\"btn btn-danger\" type=\"submit\" style=\"border-radius:50%\" data-toggle=\"tooltip\" title=\"delete\" name=\"delete\"><i class=\"fa fa-trash\" style=\"font-size:26px;\"></i></button></form>
                                                            </div>
                                                        </div>
                                                    </td>
										                                   </tr>";
										 }
										 else if($type == 3){
											 
											 $message = substr($message,0,50);
											 
											 echo "<div class=\"col-md-6 col-lg-4 mb-5\">
                                                     <div class=\"block-20\">
                                                       <figure>
                                                         <img src=\"images/image_3.jpg\" alt=\"Image placeholder\" class=\"img-fluid\">
                                                       </figure>
                                                       <div class=\"text text-center\">
                                                         <h3 class=\"heading\"><a href=\"#\">$subject</a></h3>
                                                         <div class=\"meta mb-3\">
                                                           <div><a href=\"#\"><span class=\"fa fa-calendar\"></span> $date</a></div>
                                                           <div><a href=\"#\"><span class=\"fa fa-user\"></span> $title</a></div>
                                                           <div><a href=\"#\"><span class=\"fa fa-comment\"></span> 19</a></div>
                                                         </div>
                                                         <p>$message</p>
                                                         <p><a href=\"blog-single.php?newsid=$newsid&newsSubject=$subject&dateNews=$date\"><strong>Read More</strong></a></p>
                                                       </div>
                                                     </div>
                                                   </div>";
											 
											 
										 }
										 else if($type = 4){
											 echo "
                                            <div class=\"block-21 d-flex mb-4\">
                                              <div class=\"text\">
                                                <h3 class=\"heading mb-0\"><a href=\"blog-single.php?newsid=$newsid&newsSubject=$subject&dateNews=$date\">$subject</a></h3>
                                                <div class=\"meta\">
                                                  <div><a href=\"#\"><span class=\"fa fa-calendar\"></span> $date</a></div>
                                                  <div><a href=\"#\"><span class=\"fa fa-user\"></span> $title</a></div>
                                                  <div><a href=\"#\"><span class=\"fa fa-comment\"></span> 19</a></div>
                                                </div>
                                              </div>
                                            </div>  ";
										 }
									 }
									 
									 
									
									 }
								else{
										 echo "<tr><td style = \"text-align:center;\"><b>No event/news.</b><td></tr>";
									 }									 
								 }
								 else{
									 echo (($this->databaseObject2)->conn)->error . "Is the problem when doing the etting of the record.";
								 }
		 }
		      function fetchNewsForBlog($id){
				  
				  $this->databaseObject = new database();
		          $this->databaseObject-> connect(); 
				  
				 
				  
				  $sql6 = "select subject,message,datePosted from newsboard where newsid = $id;";
				  
				  if($results = $this->databaseObject->conn->query($sql6)){
					  
					  while($rows = $results-> fetch_object()){
						  $message = $rows->message;
						  $subject = $rows->subject;
						  echo "<h3>".$subject."</h3>";
						  echo $message;
					  }
				  }
			  }
			  
			  function recentEvents(){
				  $this->databaseObject = new database();
		          $this->databaseObject-> connect(); 
				  
				  $sql7  = "select newsid,subject,datePosted from newsboard order by newsid desc limit 3;";
				    if($results = $this->databaseObject->conn->query($sql7)){
					  
					  while($rows = $results-> fetch_object()){
						  $subject = $rows->subject;
						  $newsid = $rows->newsid;
						  $date = $rows->datePosted;
						echo "<li>
                  <a href=\"blog-single.php?newsid=$newsid&newsSubject=$subject&dateNews=$date\" class=\"d-flex\">
                    <figure class=\"image mr-3\">
                      <img src=\"images/image_1.jpg\" alt=\"\" class=\"img-fluid\">
                    </figure>
                    <div class=\"text\">
                      <h3 class=\"heading\">$subject</h3>
                    </div>
                  </a>
                </li>";
					  }
				  }
				  
			  }
	 }
			?>