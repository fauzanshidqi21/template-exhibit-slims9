<?php
section('navbar', function() {
    ob_start();
    ?>
        <navbar id="header" id="home">
                <div class="container header-top">
                    <div class="row">
                        <div class="col-6 top-head-left">
                            <ul>
                                <li><a href="#">Visit Us</a></li>
                                <li><a href="#">Buy Ticket</a></li>
                            </ul>
                        </div>
                        <div class="col-6 top-head-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>			  			
                    </div>
                </div>
                <hr>
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="event.html">Events</a></li>
                        <li><a href="ticket.html">Ticket</a></li>
                        <li><a href="blog-home.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="menu-has-children"><a href="">Pages</a>
                        <ul>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="elements.html">Elements</a></li>
                        </ul>
                        </li>			          
                    </ul>
                    </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </navbar><!-- #header -->
    <?php
    return ob_get_clean();
        
});