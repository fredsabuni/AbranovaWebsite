 
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
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

    <title>Abranova Inc</title>
  </head>
  <body> 

    <!-- MODALS
    ================================================== -->
    <div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-video-header" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-video modal-lg" role="document">
        <div class="modal-content">

          <!-- Header -->
          <div class="modal-header">

            <!-- Title -->
            <h4 class="modal-title text-white" id="modal-video-header">
              Abranova Inc.
            </h4>

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="modal-body">
        
            <!-- Video --> 
            <iframe width="650" height="350" class="video-fluid" src="https://www.youtube.com/embed/Omj7Mzu5OP0?rel=0&amp?landscape=0"></iframe>  

          </div>
        </div> <!-- / .modal-content -->
      </div> <!-- / .modal-dialog -->
    </div> <!-- / .modal -->

    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-xl navbar-dark  navbar-togglable  fixed-top">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="#"> 
          <img src="<?php echo base_url();?>assets/new-assets/ico/abranova_red_logo.jpg" style="max-width: 70px; max-width: 70px;"/>
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
                <a class="dropdown-item " href="<?php echo base_url().'abranova/#how'?>">
                  How it works
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
      <div class="bg-cover" style="background-image: url(<?php echo base_url();?>assets/new-assets/img/38.jpg)"></div>

      <!-- Overlay -->
      <div class="bg-overlay"></div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-5 align-self-end">

            <!-- Preheading -->
            <!-- <p class="font-weight-medium text-xs text-uppercase text-white text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
               Invest
            </p> -->
            
            <!-- Heading -->
            <h1 class="text-white mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
              Invest, Anayze & Build for future.
            </h1>

            <!-- Subheading -->
            <p class="text-white text-muted mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis provident et ab, ullam in quidem nostrum quo sunt beatae odio fugit.
            </p>

            <!-- Button -->
            <div class="mb-5 mb-md-0" data-toggle="animation" data-animation="fadeUp" data-animation-order="3" data-animation-trigger="load">
              <a href="#" target="_blank" class="btn btn-outline-white text-white">
                Invest
              </a>
            </div>

          </div>
          <div class="col-md-4 col-lg-7 align-self-center d-flex justify-content-end">
            
            <!-- Heading -->
            <h4 class="text-vertical text-white mb-0">
              <span>Abranova Inc</span>
            </h4>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
          
            <!-- Heading -->
            <h2 class="mb-4 text-center">
              Our Perfomance
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted text-left mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo officiis odio repudiandae illum molestiae.
            </p>
          
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-3">

            <!-- Item -->
            <div class="mb-5 mb-md-0">
              
              <!-- Icon -->
              <div class="text-center text-primary mb-4">
                <img src="<?php echo base_url();?>assets/new-assets/ico/projects_icon.svg" style="max-width: 100px; max-height: 100px;"/>
              </div>

              <!-- Heading -->
              <h4 class="text-center mb-3">
                PROJECTS
              </h4>

              <!-- Content -->
              <p class="text-center text-muted mb-0">
                In development accross United States
              </p>

            </div>

          </div>
          <div class="col-md-3">

            <!-- Item -->
            <div class="mb-5 mb-md-0">
              
              <!-- Icon -->
              <div class="text-center text-primary mb-4">
                <img src="<?php echo base_url();?>assets/new-assets/ico/invest_icon.svg" style="max-width: 130px; max-height: 130px;"/>
              </div>

              <!-- Heading -->
              <h4 class="text-center mb-3">
                INVESTED 
              </h4>

              <!-- Content -->
              <p class="text-center text-muted mb-0">
                In our projects accross the United States
              </p>

            </div>

          </div>
          <div class="col-md-3">

            <!-- Item -->
            <div class="mb-5 mb-md-0">
              
              <!-- Icon -->
              <div class="text-center text-primary mb-4">
                <img src="<?php echo base_url();?>assets/new-assets/ico/employee_icon.svg" style="max-width: 100px; max-height: 100px;"/>
              </div>

              <!-- Heading -->
              <h4 class="text-center mb-3">
                EMPLOYEES
              </h4>

              <!-- Content -->
              <p class="text-center text-muted mb-0">
                In development accross United States
              </p>

            </div>

          </div>
          <div class="col-md-3">

            <!-- Item -->
            <div>
              
              <!-- Icon -->
              <div class="text-center text-primary mb-4">
                <img src="<?php echo base_url();?>assets/new-assets/ico/location_icon.svg" style="max-width: 100px; max-height: 85px;"/>
              </div>

              <!-- Heading -->
              <h4 class="text-center mb-3">
                LOCATIONS
              </h4>

              <!-- Content -->
              <p class="text-center text-muted mb-0">
                In development accross United States
              </p>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- FEATURES
    ================================================== -->
    <section class="section" style="padding-top: 0rem;">

      <!-- Content -->
      <div class="container">
        <row class="row">
          <div class="col-9 col-md-9 col-lg-9 ">
            <h2 class="mb-4 text-left">
              Our Projects
            </h2>
            <!-- <p class="text-left text-muted text-left mb-5">
              Working closely with our clients to help them find their dream property and place. 
            </p> -->
          </div> 
          <div class="col-3 col-md-3 col-lg-3">
            <h5 class="text-md-right mb-4">
              View All
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

            <!-- Item -->
            <div class="mb-5 mb-md-0">
              
              <!-- Image -->
              <?php $limit = 0;
			          foreach ($images as $image) {
                if($image->project_id == $row->project_id) {
                    $limit = $limit + 1;
                    if($limit == 1){
                      echo '<div class="img-effect mb-3"> <img src="' . base_url() . $image->image_path . '"  class="img-fluid" 							alt="..."> </div>';   
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
                 Expected Completion Date: <span> <?php echo date_format(date_create($row->project_cdate),'jS M | Y') ; ?>
              </p>

              <h6 class="mb-3">
                PROJECT COST: <b><?php echo '$ '.number_format($row->project_cost); ?></b>
              </h6>

              <!-- Button -->
              <div class="text-center text-md-left">
              <button type="submit" class="btn btn-outline-primary">
                  <a href="<?php echo base_url() .'invest/'.$row->project_id ; ?>">
                  Invest Now
                  </a>
              </button> 
              </div>

            </div>

          </div>
           
          <?php } ?>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

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
              Schedule a call with us
            </h3>

            <!-- Content -->
            <p class="text-white text-muted mb-4 mb-md-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae dolores, voluptates atque dicta vero quibusdam laudantium saepe sequi harum.
            </p>

          </div>
          <div class="col-md-4">
            
            <!-- Button -->
            <a href="#" class="btn btn-outline-white text-white">
              Get in touch with us
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
      
      <!-- Content -->
      <section class="section">

        <!-- Content -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-lg-5 offset-lg-1">
              
              <!-- Image -->
              <div class="img-effect img-effect-solid mb-5 mb-md-0">
                <img src="<?php echo base_url();?>assets/new-assets/img/41.jpg" class="img-fluid" alt="...">
              </div>
  
            </div>
            <div class="col-md-6 col-lg-4 offset-lg-1">
  
              <!-- Heading -->
              <h2 class="mb-4">
                Everything you need to enjoy your living
              </h2>
  
              <!-- Content -->
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maiores, aperiam. Excepturi assumenda non quasi ipsa quidem.
              </p>
  
              <!-- Button -->
              <a href="#modal-video" data-toggle="modal" class="btn btn-outline-primary btn-circle mr-3">
                <i class="fas fa-play"></i>
              </a> Play Video
              
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
  
      </section>
    
    
    <section>
      <div class="container section pb-0 mb-5">
        <row class="row">
          <div class="col-9 col-md-9 col-lg-9 ">
            <h3 class="text-left mb-4">
              LATEST NEWS.
            </h3> 
          </div> 
          <div class="col-3 col-md-3 col-lg-3">
            <h5 class="text-left mb-4">
              View All
            </h5> 
          </div> 
        </row>
        <div class="row">  
        <div class="col-12 col-md-9 col-lg-10 order-md-1">
        <div class="row align-items-stretch">
        <?php
            foreach ($articles as $row){ 
              $start = strpos($row->article_desc, '<p>');
              $end = strpos($row->article_desc, '</p>', $start);
              $paragraph = substr($row->article_desc, $start, $end-$start+4);
              $paragraph = html_entity_decode(strip_tags($paragraph));
              echo '  
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                
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

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!--Content -->
      <div class="container">
        <div class="row align-self-center">
          <div class="col-md-auto">

            <!-- Brand -->
            <p>
              <a href="#" class="footer-brand text-white">
                <img src="<?php echo base_url();?>assets/new-assets/ico/abranova_red_logo.jpg" style="max-width: 70px; max-width: 70px;"/>
              </a>
            </p>

            <p class="text-white text-muted">
              <small>
                &copy; Copyright <span class="current-year"></span> Abranova Inc. All rights reserved.
              </small>
            </p>
        
          </div>
          <div class="col-md align-items-center">
        
            <!-- Links -->
            <ul class="list-unstyled list-inline text-md-center">
              <li class="list-inline-item mr-2">
                <a href="#" class="text-white">
                  <strong>Follow us for the latest opportunity</strong>
                </a>
              </li> 
            </ul>

            <ul class="list-inline list-unstyled text-md-center">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin" style="color: aliceblue;"></i>
                </a>
              </li>
              <li class="list-inline-item ml-3">
                <a href="#">
                  <i class="fab fa-twitter" style="color: aliceblue;"></i>
                </a>
              </li>
              <li class="list-inline-item ml-3">
                <a href="#">
                  <i class="fab fa-instagram" style="color: aliceblue;"></i>
                </a>
              </li>
              <li class="list-inline-item ml-3">
                <a href="#">
                  <i class="fab fa-facebook" style="color: aliceblue;"></i>
                </a>
              </li>
              <li class="list-inline-item ml-3">
                <a href="#">
                  <i class="fab fa-youtube" style="color: aliceblue;"></i>
                </a>
              </li>
            </ul>

            <ul class="list-unstyled text-md-center">
              <li>
                <h6 style="color: aliceblue; font-style: normal; font-weight: 100;">Abranova Inc.</h6>
              </li>
              <li>
                <h6 style="color: aliceblue; font-style: normal; font-weight: 100;">400 West Main Street, Suite# 614</h6>
              </li>
              <li>
                <h6 style="color: aliceblue; font-style: normal; font-weight: 100;">Durham, NC 27701 USA</h6>
              </li>
              <li>
                <h6 style="color: aliceblue; font-style: normal; font-weight: 100;">(919) 597-0223</h6>
              </li>

            </ul>

          </div>
          <div class="col-md">
        
            <!-- Links -->
            <ul class="list-unstyled text-md-center">
              <li class="mr-2">
                <a href="#" class="text-white">
                  Terms and conditions
                </a>
              </li>
              <li class="mr-2">
                <a href="#" class="text-white">
                  Privacy policy
                </a>
              </li>
              <li class="">
                <a href="#" class="text-white">
                  Contact us
                </a>
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