 
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/new-assets/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/new-assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/new-assets/ico/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>assets/new-assets/ico/site.webmanifest">
    <link rel="mask-icon" href="<?php echo base_url();?>assets/new-assets/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/new-assets/ico/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo base_url();?>assets/new-assets/ico/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/new-assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/new-assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/new-assets/libs/fullpage.js/dist/fullpage.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/new-assets/libs/highlightjs/styles/codepen-embed.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/new-assets/libs/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/new-assets/libs/incline-icons/style.min.css">
	
	 

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/new-assets/css/theme.min.css">
	
	<!-- CHAT BOT -->
    <script>(function(w, d) { w.CollectId = "6004533add5fd55abf04a11b"; var h = d.head || d.getElementsByTagName("head")[0]; var s = 		d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", 					"https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>


    <title>Abranova Inc</title>
  </head>
  <body> 
 
    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-xl navbar-dark  navbar-togglable  fixed-top">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo base_url()?>"> 
          <img src="<?php echo base_url();?>assets/new-assets/ico/redLogo.png" style="max-width: 100px; max-width: 100px;"/>
        </a> 
  
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Social -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fab fa-linkedin"></i> 
                <span class="d-xl-none ml-2">
                  LinkedIn
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fab fa-facebook"></i> 
                <span class="d-xl-none ml-2">
                  Facebook
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fab fa-twitter"></i> 
                <span class="d-xl-none ml-2">
                  Twitter
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fab fa-instagram"></i> 
                <span class="d-xl-none ml-2">
                  Instagram
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fab fa-youtube"></i> 
                <span class="d-xl-none ml-2">
                  Youtube
                </span>
              </a>
            </li>
          </ul>

          <!-- Links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url().'about-us'?>" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us
              </a> 
              <div class="dropdown-menu" aria-labelledby="navbarLandings">
                <a class="dropdown-item " href="<?php echo base_url().'abranova/#ourPerformance'?>">
                  Our performance
                </a>
                <a class="dropdown-item " href="<?php echo base_url().'about-us'?>">
                  our team
                </a> 
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url()?>resources" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Resources
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarLandings">
                <a class="dropdown-item " href="<?php echo base_url()?>resources">
                  Articles
                </a>
                <a class="dropdown-item " href="<?php echo base_url().'faqs'?>">
                  FAQs
                </a> 
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo base_url()?>contact-us">Contact</a> 
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo base_url()?>careers-us">
                Career
              </a> 
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url()?>invest-project" target="_blank" class="nav-link">
                Invest
              </a>
            </li>
            <?php
              if (!($this->session->userdata('logged_in'))){ ?>
            <li class="nav-item ">
              <a href="<?php echo base_url() ?>login" class="nav-link">
                Login
              </a>
            </li> 
            <li class="nav-item">
              <a href="<?php echo base_url() ?>register" target="_blank" class="nav-link">
                Register
              </a>
            </li> 
            <?php } elseif(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true && $_SESSION['Role'] == 'Investor') { ?>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>my-account" target="_blank" class="nav-link">
                My Profile
              </a>
            </li> 
            <li class="nav-item ">
              <a href="#" class="nav-link">
                Change Password
              </a>
            </li> 
            <?php if(($this->session->userdata('UserChannel')) == "Google_Signin") {
             echo '<li class="nav-item"> <a href="'.base_url().'google-signout" class="nav-link"> Log Out </a> </li>';
              }else {  ?>
             <li class="nav-item ">
              <a href="#" class="nav-link">
                Logout
              </a>
            </li> 
            <?php } }?>
          </ul>
        </div> <!-- / .navbar-collapse -->
  
      </div> <!-- / .container -->    
    </nav>

    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url(<?php echo base_url();?>assets/new-assets/img/39.png)"></div>

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="bg-text col-md-8 col-lg-5 align-self-end">

            <!-- Preheading -->
            <!-- <p class="font-weight-medium text-xs text-uppercase text-white text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
               Invest
            </p> -->
            
            <!-- Heading -->
            <h1 class="abranova-white mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load" style="margin-top: 16px; font-size: 40px;  font-family: 'OttomatBold';">
              Invest in a Better<br/> 
              Future Today.
            </h1> 

            <p class="abranova-white mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load" style="font-family: 'OttomatBold'; ">
              We want you to be a part of this journey with us!
            </p>

            <!-- Button -->
            <div class="mb-5 mb-md-0" data-toggle="animation" data-animation="fadeUp" data-animation-order="3" data-animation-trigger="load">
              <a href="https://novartp.com/" target="_blank" class="btn btn-outline-white text-white" style="margin-bottom: 16px;">
                Invest
              </a>
            </div> 

          </div>
           
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
	  
	<section class="section-mobile">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8 col-lg-5 align-self-end"> 
            <!-- Heading -->
            <h1 class="abranova-primary mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load" style="margin-top: 16px; font-size: 40px;  font-family: 'OttomatBold';">
              Invest in a Better<br/> 
              Future Today.
            </h1> 

            <p class="abranova-gray mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load" style="font-family: 'OttomatBold'; ">
              We want you to be a part of this journey with us!
            </p>

            <!-- Button -->
            <div class="mb-5 mb-md-0" data-toggle="animation" data-animation="fadeUp" data-animation-order="3" data-animation-trigger="load">
              <a href="https://novartp.com/" target="_blank" class="btn btn-outline-primary abranova-primary" style="margin-bottom: 16px;">
                Invest
              </a>
            </div> 
          </div> 
        </div>
      </div>
    </section>

    <section class="section-video mb-0">
		<div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            
            <!-- Image -->
            <div class="img-effect img-effect-solid mb-5 mb-md-0">
              <iframe height="350" width="700" class="video-design" src="https://www.youtube.com/embed/Omj7Mzu5OP0?rel=0&amp?landscape=0"></iframe>  
            </div>
 

          </div>
          <div class="col-md-4 ">

            <!-- Heading -->
            <h2 class="mb-4" style="font-family: 'OttomatBold'; color: #ad1f24;">
              <span style="border-style: solid; border-width: 1.5px; font-size: 24px; padding: 16px; border-color: #c2c2c2;">About Us</span> 
            </h2>

            <!-- Content -->
            <p class="text-muted mb-0" id="ourPerformance">
              Abranova is a full-stack real estate investment and construction development company. The core mission of the company is to democratize real estate development by providing investment opportunities to everyone through our real estate crowdfunding platform. 
            </p> 
          </div>
        </div> <!-- / .row -->
      </div> 
    </section>
	
	<section class="section">
      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6" style="margin-bottom: 8px;">
          
            <!-- Heading -->
            <h2 class="mb-4 text-center" style="font-family: 'OttomatBold'; color: #ad1f24;">
              <span style="border-style: solid; border-width: 1.5px; font-size: 24px; padding: 16px; border-color: #c2c2c2;">Our Perfomance</span>  
            </h2> 
          
          </div>
        </div> <!-- / .row -->
        <div class="row " style="margin-top: 2rem;">
          <div class="col-md-4 align-self-end"> 
            <!-- Item -->
            <div> 
              <!-- Icon -->
              <div class="text-center text-primary mb-4">
                <img class="responsive-img" src="<?php echo base_url();?>assets/new-assets/ico/banner_01.svg" style="max-width: 550px; border: 1px solid rgb(209, 206, 206); max-height: 350px;"/> 
              </div>   
            </div> 
          </div>
           
          <div class="col-md-4 text-right"> 
            <!-- Item -->
            <div> 
              <!-- Icon -->
              <div class="text-center text-primary mb-4">
                <img class="responsive-img" src="<?php echo base_url();?>assets/new-assets/ico/banner_02.svg" style="max-width: 550px; border: 1px solid rgb(209, 206, 206); max-height: 350px;"/>
              </div> 
              <!-- Heading -->
            </div>

          </div>

          <div class="col-md-4 text-right"> 
            <!-- Item -->
            <div> 
              <!-- Icon -->
              <div class="text-center text-primary mb-4">
                <img class="responsive-img" src="<?php echo base_url();?>assets/new-assets/ico/banner_03.svg" style="max-width: 550px; border: 1px solid rgb(209, 206, 206); max-height: 350px;"/>
              </div> 
              <!-- Heading -->
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
	  
	<section class="section section-full"> 
      <!-- Cover -->
      <div class="bg-cover" style="background-image: url('<?php echo base_url();?>assets/new-assets/img/11.jpg');"></div>
      
      <!-- Content -->
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 col-lg-8"> 
            <div class="bg-white text-center shadow py-5 px-4 p-md-6"> 
              <div class="mb-4">
                <img src="<?php echo base_url();?>assets/new-assets/ico/RTP-Logo-Red-02.png" 
					 style="max-width: 150px; max-height: 100px;" class="icon icon-diamond icon-2x"></img>
              </div>
   
              <a href="https://novartp.com/" class="btn btn-outline-primary" target="_blank">
                Visit our Latest Project
              </a> 
            </div> 
          </div>
        </div> 
        </div>  
    </section> 
	
    <section class="section nova_projects"> 
      <!-- Content -->
      <div class="container">
		<row class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <h2 class="mb-4 text-center" style="font-family: 'OttomatBold'; color: #ad1f24;">
              <span style="border-style: solid; border-width: 1.5px; font-size: 24px; padding: 16px; border-color: #c2c2c2;">Our 					Projects</span>
            </h2> 
          </div>  
        </row>
        <row class="row"> 
          <div class="col-12 col-md-12 col-lg-12">
            <h5 class="text-md-right mb-4">
              <a href="<?php echo base_url()?>invest-project"><span style="font-family: 'OttomatBold'; color: #ad1f24;">View All</span></a>
            </h5> 
          </div> 
        </row>
        <div class="row justify-content-center">
          <!-- <div class="col-md-8 col-lg-6"> -->
          
            <!-- Heading -->
            <!-- <h2 class="mb-4 text-center">
              Our Projects
            </h2> -->

            <!-- Subheading -->
            <!-- <p class="text-center text-muted text-left mb-5">
              Working closely with our clients to help them find their dream property and place. 
            </p>
          
          </div> -->
        </div> <!-- / .row -->
        <div class="row"> 

          <!-- Listing Item -->
          <?php  
          foreach ($projects as $row) {  
            ?>
           <div class="col-md-4"> 
			<a href="<?php echo base_url() .'invest/'.$row->project_id ; ?>" style="text-decoration: none;">
            <!-- Item -->
            <div class="mb-5 mb-md-0"> 
              <!-- Image -->
              <?php $limit = 0;
			          foreach ($images as $image) {
                if($image->project_id == $row->project_id) {
                    $limit = $limit + 1;
                    if($limit == 1){
                      echo ' 
					  <div class="ribbon mb-3" style="background: url('.base_url() . $image->image_path.'); background-size: cover;"> 
                    	<span class="ribbon4" style="font-family: OttomatBold;">Completed</span>
                	  </div> ';   
                    } 
                  }
                } ?>

              <!-- Heading -->
              <h4 class="text-left mb-3">
                <?php echo $row->project_title; ?>
              </h4>

              <!-- Content -->
              <p class="text-left text-muted mb-3">
                 Investment Type: <span> <?php echo $row->project_type; ?></span>, Return on Investment (ROI): <span> <?php echo $row->project_roi; ?></span>,
                 Expected Completion Date: <span> <?php echo date_format(date_create($row->project_cdate),'jS M | Y') ; ?></span>
              </p>

              <h6 class="mb-3">
                PROJECT COST: <b><?php echo '$ '.number_format($row->project_cost); ?></b>
              </h6>

              <!-- Button -->
              <!--<div class="text-center text-md-left">
              <button type="submit" class="btn btn-outline-primary">
                  <a href="<?php echo base_url() .'invest/'.$row->project_id ; ?>">
                  Invest Now
                  </a>
              </button> 
              </div>-->

            </div>
			 </a>
          </div>
           
          <?php } ?>
          </div>  
      </div>  
    </section> 
  

    <!-- CTA
    ================================================== -->
    <section class="section bg-grey">

      <!-- Pattern -->
      <div class="bg-triangle bg-triangle-light bg-triangle-top bg-triangle-right"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8">
            
            <!-- Heading -->
            <h3 class="text-white mb-4">
              Get to know Us
            </h3>

            <!-- Content -->
            <p class="text-white text-muted mb-4 mb-md-0">
              Fill out this form to connect with our business directly.
            </p>

          </div>
          <div class="col-md-4">
            
            <!-- Button -->
            <a href="<?php echo base_url()?>contact-us" class="btn btn-outline-white text-white">
              Get in touch with us
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> 
    
    <section>
      <div class="container section pb-0 mb-5">
        <row class="row">
          <div class="col-12 col-md-12 col-lg-12 ">
            <h3 class="text-center mb-4" style="font-family: 'OttomatBold'; color: #ad1f24;">
               <span style="border-style: solid; border-width: 1.5px; font-size: 24px; padding: 16px; border-color: #c2c2c2;">Latest 					News</span>
            </h3> 
          </div>  
        </row>
		<row class="row"> 
          <div class="col-12 col-md-12 col-lg-12">
            <h5 class="text-md-right mb-4">
				<a href="<?php echo base_url()?>resources"><span style="font-family: 'OttomatBold'; color: #ad1f24;">View All</span></a>
            </h5> 
          </div> 
        </row>
        <div class="row">  
        <div class="col-md-12 order-md-1">
        <div class="row align-items-stretch">
        <?php
            foreach ($articles as $row){ 
              $start = strpos($row->article_desc, '<p>');
              $end = strpos($row->article_desc, '</p>', $start);
              $paragraph = substr($row->article_desc, $start, $end-$start+4);
              $paragraph = html_entity_decode(strip_tags($paragraph));
              echo '  
                <div class="col-md-4 mb-4 mb-lg-0">
                
                <a class="card h-100" href="'.base_url().'resource/'.$row->article_id.'">
                  <div class="card-body">
    
                    <!-- Meta -->
                    <div class="row align-items-center no-gutters mb-4">
                      <div class="col-auto">
                        
                        <div class="avatar mr-3">
                          <img src="'.base_url().$row->article_image.'" alt="..." class="img-cover rounded-circle">
                        </div>
    
                      </div>
                      <div class="col">
                        
                        <p class="mb-0 text-xs text-muted">
                          <strong class="text-body">'.date_format(date_create($row->date_posted),'jS M | Y').'</strong>
                        </p>
    
                      </div>
                    </div> <!-- / .row -->
                    
                    <!-- Heading -->
                    <h4>
                    '.$row->article_title.'
                    </h4>
    
                    <!-- Text -->
                    <p class="mb-0 text-sm text-muted">
                      '.$paragraph.'
                    </p>
    
                  </div>
                </a>
    
              </div>'; } ?> 
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
    
    <!-- FOOTER
    ================================================== -->
    <footer class="section bg-gradient" style="margin-bottom: 0px;">
		
		<div class="bg-bottom bg-bottom-bottom"></div>
		
		<div class="container">
        <div class="row align-self-center"> 
        
          <!-- </div> -->
          <div class="col-md align-items-center text-center">
        
            <!-- Links --> 
            <ul class="list-unstyled list-inline text-md-center">
              <li class="list-inline-item mr-2">
                <a href="#" class="text-white">
                  <img src="<?php echo base_url();?>assets/new-assets/ico/whiteLogo.png" style="max-width: 110px; max-width: 110px;"/>
                </a>
              </li> 
            </ul> 

            <ul class="list-unstyled list-inline text-md-center">
              <li class="list-inline-item mr-2">
                <a href="#" class="text-white">
                  <small style="font-family: 'OttomatBold'; "> &copy; Copyright <span class="current-year"></span> Abranova Inc. All rights reserved. </small>
                </a>
              </li> 
            </ul>

            <ul class="list-unstyled list-inline text-md-center">
              <li class="list-inline-item mr-2">
                <a href="#" class="text-white">
                  <h5 style="font-family: 'OttomatBold'; color: #ffffff; ">Follow us for the latest opportunity:&nbsp;&nbsp;<a href="#"><i class="fab fa-youtube" style="color: aliceblue;"></i></a>&nbsp;&nbsp;  <a href="#"><i class="fab fa-facebook" style="color: aliceblue;"></i></a> &nbsp;&nbsp; <a href="#"><i class="fab fa-instagram" style="color: aliceblue;"></i></a> &nbsp;&nbsp;<a href="#"><i class="fab fa-twitter" style="color: aliceblue;"></i></a>&nbsp;&nbsp;<a href="#"><i class="fab fa-linkedin" style="color: aliceblue;"></i></a></h5>
                </a>
              </li> 
            </ul> 

            <ul class="list-unstyled text-md-center">
              <li>
                <h6 style="color: aliceblue; font-style: normal; font-family: 'OttomatBold'; color: #ffffff; font-weight: 100;">Abranova Inc. 400 West Main Street, Suite# 614 Durham, NC 27701 USA (919) 597-0223</h6>
              </li> 
            </ul>

            <ul class="list-unstyled text-md-center">
              <li>
                <h6 style="color: aliceblue; font-style: normal; font-family: 'OttomatBold'; color: #ffffff; font-weight: 100;">Terms and conditions&nbsp; | &nbsp;Privacy policy&nbsp; | &nbsp;Contact us</h6>
              </li> 
            </ul> 
          </div> 
 
        </div>

    </footer> 
    <script src="<?php echo base_url();?>assets/new-assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

    <!-- Plugins JS -->
    <script src="<?php echo base_url();?>assets/new-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/new-assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>assets/new-assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="<?php echo base_url();?>assets/new-assets/libs/jquery-parallax.js/parallax.min.js"></script>
    <script src="<?php echo base_url();?>assets/new-assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/new-assets/libs/waypoints/lib/shortcuts/inview.min.js"></script>
    <script src="<?php echo base_url();?>assets/new-assets/libs/fullpage.js/vendors/scrolloverflow.min.js"></script>
    <script src="<?php echo base_url();?>assets/new-assets/libs/fullpage.js/dist/fullpage.min.js"></script>
    <script src="<?php echo base_url();?>assets/new-assets/libs/highlightjs/highlight.pack.min.js"></script>

    <!-- Theme JS -->
    <script src="<?php echo base_url();?>assets/new-assets/js/theme.min.js"></script>

  </body>

 </html>