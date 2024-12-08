<?php
section('header', function(){
    ob_start();
    ?>
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center" style="height: 945px;">
						<div class="banner-content col-lg-8">
							<h6 class="text-white">Openning on 21st February, 2018</h6>
							<h1 class="text-white">
								Exhibition on Modern Era				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>											
					</div>
				</div>					
			</section>
        <!-- End banner Area -->	
         
    <?php
    return ob_get_clean();
});