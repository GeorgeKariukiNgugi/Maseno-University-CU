    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
            <h3 class="heading">Church Quick Links</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="ministry.html">Board Ministry</a></li>
                  <li><a href="ministry.html">Media and IT Ministry</a></li>
                  <li><a  href="ministry.html">High school Ministry</a></li>
                  <li><a  href="ministry.html">Hospitality Ministry</a></li>
                  <li><a  href="ministry.html">Intercessory Ministry</a></li>
                </ul>
              </div>
 
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="about.php">About Us</a></li>               
                  <li><a href="contacts.php">Contact</a></li>
                  <li><a href="#">Privacy &amp; Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
		  
		  
		  
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
		  <h3 class="heading">Events</h3>
		  	  <?php
		  
		        $datainClient = new FetchNews();
				$datainClient->fetchNewsfuction(4);
                  ?> 
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
               <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">P.O BOX 416 ,MASENO, KENYA</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">masenocu015@gmail.com</span></a></li>
				<li><a href="login.php"><span class="icon ion-android-lock"></span><span class="text">LogIn</span></a></li>
              </ul>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site was created and is maintained <i class="fa fa-heart" aria-hidden="true"></i> by <a target="_blank" class="text-primary">Maseno CU Media and IT dept. 2019.</a>
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
    </footer>