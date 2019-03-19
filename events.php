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
                <h1 class="heading mb-4">News &amp; Events</h1>
                <div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde doloremque necessitatibus quidem itaque illum nulla dolores, tempora corporis eius, fuga natus esse rem animi. Doloribus animi, reiciendis voluptatum eum ullam.</div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    

    

    <section class="site-section bg-light">
      <div class="container">
        
        <div class="row">
		  
		  <?php
		  
		        $datainClient = new FetchNews();
				$datainClient->fetchNewsfuction(3);
                  ?>          
        </div>

        <div class="row mt-5">
                <div class="col-md-12 pt-5">
                  <ul class="pagination custom-pagination">
                    <li class="page-item prev"><a class="page-link" href="#"><i class="ion-ios-arrow-back"></i></a></li>
                    <li class="page-item active"><a class="page-linkx href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item next"><a class="page-link" href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                  </ul>


                </div>
              </div>
      </div>
    </section>
        <?php
		
		   include("includes/footer.php");
		?>
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