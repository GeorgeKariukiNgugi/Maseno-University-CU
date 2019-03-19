<?php
include("includes/databaseClass.php");
include("includes/fetchingnews.php");  
      
?>
<!doctype html>
<html lang="en">
 <?php
       include("includes/header.php");
 
 ?>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-8 text-center">
  
            <div class="mb-5 element-animate">
              <div class="block-17">

                <h1 class="heading mb-4"><?php echo $_GET['newsSubject']?></h1>
                <span class="lead">Posted on <?php echo $_GET['dateNews']?></span>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    

    

     <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 col-lg-8 order-md-2 pl-lg-5">
            <div class="row">
              <div class="col-md-12 col-lg-12 mb-5">
                  <?php    
					     $fetchingSpecific = new FetchNews();
						 $fetchingSpecific->fetchNewsForBlog($_GET['newsid']);
					?>
					    


                  <div class="pt-5">
                    <!-- END comment-list -->
                    
                    <div class="comment-form-wrap pt-5">
                      <h3 class="mb-5">Leave a comment</h3>
                      <form action="#" class="bg-light">
                        <div class="form-group">
                          <label for="name">Name *</label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email *</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="website">Website</label>
                          <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                          <label for="message">Message</label>
                          <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Post Comment" class="btn btn-primary py-2 px-4">
                        </div>

                      </form>
                    </div>
                  </div>

              </div>
            </div>

            
          </div>
          <!-- END content -->
          <div class="col-md-6 col-lg-4 order-md-1">

            <!--div class="block-24 mb-5">
              <h3 class="heading">Categories</h3>
              <ul>
                <li><a href="#">Events <span>10</span></a></li>
                <li><a href="#">Outreach <span>43</span></a></li>
                <li><a href="#">Baptism <span>21</span></a></li>
                <li><a href="#">Charity <span>65</span></a></li>
                <li><a href="#">Donate <span>34</span></a></li>
                <li><a href="#">Building Fund <span>45</span></a></li>
                <li><a href="#">Health <span>22</span></a></li>
              </ul>
            </div-->

            <div class="block-25 mb-5">
              <div class="heading">Recent Events</div>
              <ul>
                <?php
				
				        $fetchingSpecific = new FetchNews();
						 $fetchingSpecific->recentEvents();  
					
				?>
              </ul>
            </div>
          </div>
          <!-- END Sidebar -->
        </div>
      </div>
    </div>

    
   <?php
		
		   include("includes/footer.php");
		?>
    <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>