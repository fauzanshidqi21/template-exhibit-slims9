<?php
section('banner', function(){
    ob_start();
    ?>
    <!-- Start service Area -->
			<section class="service-area pt-100" id="about">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-clock"></span>
							  <h4>Openning Hours</h4>
							  <p>
							  	Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
							  </p>						 	
							  <div class="overlay">
							    <div class="text">
							    	<p>
							    		Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
							    	</p>
							    	<a href="#" class="text-uppercase primary-btn">Buy ticket</a>
							    </div>
							  </div>
							</div>							
						</div>
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-rocket"></span>
							  <h4>Ongoing Exhibitions</h4>
							  <p>
							  	Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
							  </p>						 	
							  <div class="overlay">
							    <div class="text">
							    	<p>
							    		Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
							    	</p>
							    	<a href="#" class="text-uppercase primary-btn">Buy ticket</a>
							    </div>
							  </div>
							</div>							
						</div>
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-briefcase"></span>
							  <h4>Openning Events</h4>
							  <p>
							  	Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
							  </p>						 	
							  <div class="overlay">
							    <div class="text">
							    	<p>
							    		Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features that we use in life Here, I focus on a range of items and features.that we use in life
							    	</p>
							    	<a href="#" class="text-uppercase primary-btn">Buy ticket</a>
							    </div>
							  </div>
							</div>							
						</div>												
					</div>
				</div>	
			</section>
		<!-- End service Area -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/imagesloaded.pkgd.min.js"></script>
			<script src="js/justified.min.js"></script>					
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
    <?php
    return ob_get_clean();
});