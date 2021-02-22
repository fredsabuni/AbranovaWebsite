
<script>

    function  calculateIntrest(val) {

        var roi = val;
        var investmentAmount = $('#investment').val();
        var result;

        if(investmentAmount == ""){
            alert("please insert the Investment Amount");
            $('#district').focus();
        }else {

            result = ((roi+100)/100)*investmentAmount;
            var rounded = Math.round(result);
            var currency_format = (rounded + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");

            $("#result").fadeIn(2000);
            document.getElementById('resultDiv').style.display = 'block';
            document.getElementById('result').style.display = 'block';
            document.getElementById('result').innerHTML = "Expected ROI: " + "$ " + currency_format;
            document.getElementById('calculate').style.display = 'none';
            document.getElementById('_Now').style.display = 'block';
            document.getElementById('calculate_now').style.display = 'block';

        }
        
    }

    function displayCalculate() {

            document.getElementById('calculate').style.display = 'block';
            document.getElementById('_Now').style.display = 'none';

    }


    function add_bookmarks(investor,project ) {

        var investorID = investor;
        var projectID = project;

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ;?>add-bookmarks",
            data:  {'investorID':investorID,'projectID':projectID },
            dataType : "json",
            cache: "false",
            success: function (response_data) {
                console.log(response_data);
            },
            fail: function (response) {
                console.log(response);
            }
        });

    }


</script>

<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1200,height=900');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>

<section class="section nova-section-top section-full">
       <div class="container web-first">
          <div class="row">
          	<div class="col-md-6 order-md-1">
          	<h3 style="font-size: 20px; font-family: OttomatBold; color: #ffffff;">
              <?php echo $project_item -> project_title ;?>
            </h3>
            <h4 style="font-size: 16px; font-family: OttomatBold; color:#ffffe6;"><i class="fas fa-map-marker-alt"></i>  <?php echo $project_item -> project_location ;?></h4>
            <br/>
            <div class="row">
          	<div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  PROJECT COST
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php echo '$ '.number_format($project_item->project_cost) ;?>
                </p>
             </div>
             <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  RETURN ON INVESTMENT (ROI)
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                 <?php echo $project_item->project_roi ;?>%
                </p>
              </div>  
            </div>  
          	</div> 
          	<div class="col-md-6 mb-0 zero-padding order-md-2" style="padding-bottom: 0rem;">
              	<div class="row">
              <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  INVESTMENT TYPE
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  Equity
                </p>
              </div>
              <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  PROJECT CURRENT PHASE
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php
                      if ($project_item->phase_number){
                         echo $project_item->phase_number." ".$project_item->task_name;
                      }else{
                          echo "No phase updated";
                      }
                  ?>
                </p>
              </div>
            </div> 
            <br/>
            <div class="row">
              <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  TOTAL AMOUNT INVESTED
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php  echo '$ '.number_format($project_item->invested_amount) ;?>
                </p>
              </div>
              <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  AMOUNT YOU CAN INVEST
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php if(($project_item->invested_amount) >= ($project_item->project_cost)){ echo 'Project Fully Invested';}else{echo '$ '.number_format($project_item->project_cost - $project_item->invested_amount) ;}  ?>
                </p>
              </div>
            </div>
             </div> 
          </div> 
      </div>

      <div class="container mobile-first">
          <div class="row">
          	<div class="col-md-6 order-md-1">
          	<h3 style="font-size: 20px; font-family: OttomatBold; color: #ffffff;">
              <?php echo $project_item -> project_title ;?>
            </h3>
            <h4 style="font-size: 16px; font-family: OttomatBold; color:#ffffe6;"><i class="fas fa-map-marker-alt"></i><?php echo $project_item -> project_location ;?></h4>
            <br/>
            <div class="row">
          	<div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  PROJECT COST
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php echo '$ '.number_format($project_item->project_cost) ;?>
                </p>
             </div>
             <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  RETURN ON INVESTMENT (ROI)
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php echo $project_item->project_roi ;?>%
                </p>
              </div>  
            </div> 
            <div class="row">
              <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  INVESTMENT TYPE
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  Equity
                </p>
              </div>
              <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  PROJECT CURRENT PHASE
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php
                      if ($project_item->phase_number){
                         echo $project_item->phase_number." ".$project_item->task_name;
                      }else{
                          echo "No phase updated";
                      }
                  ?>
                </p>
              </div>
            </div> 
            <br/>
            <div class="row">
              <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  TOTAL AMOUNT INVESTED
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php  echo '$ '.number_format($project_item->invested_amount) ;?>
                </p>
              </div>
              <div class="col-md-6">
                <p style="font-size: 14px; color:#ffffe6; font-family: Ottomat;">
                  AMOUNT YOU CAN INVEST
                </p>
                <p style="font-size: 16px; font-family: OttomatBold; color: #ffffff;">
                  <?php if(($project_item->invested_amount) >= ($project_item->project_cost)){ echo 'Project Fully Invested';}else{echo '$ '.number_format($project_item->project_cost - $project_item->invested_amount) ;}  ?>
                </p>
              </div>
            </div> 
          	</div>  
          </div> 
      </div>
    </section>

    <section class="nova-section section-full" style="padding-bottom: 0rem; margin-bottom: :0rem">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div id="wrapper">
              <section class="slideshow" id="js-header">
                <?php 
                x = 0;
                foreach ($images as $image) { 
                x = x + 1;
                echo ' 
                <div class="slideshow__slide js-slider-home-slide is-current" data-slide=".'x'.">
                  <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
                    <div class="slideshow__slide-background-load-wrap background-absolute">
                      <div class="slideshow__slide-background-load background-absolute">
                        <div class="slideshow__slide-background-wrap background-absolute">
                          <div class="slideshow__slide-background background-absolute">
                            <div class="slideshow__slide-image-wrap background-absolute">
                              <div class="slideshow__slide-image background-absolute" style="background-image: url("'.base_url().$image->image_path.'?auto=compress&cs=tinysrgb&dpr=2&h=1080&w=1920");"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> '; 
                }?>

                <div class="c-header-home_footer">
                  <div class="o-container">
                    <div class="c-header-home_controls -nomobile o-button-group">
                      <div class="js-parallax is-inview" data-speed="1" data-position="top" data-target="#js-header">
                        <button class="o-button -white -square -left js-slider-home-button js-slider-home-prev" type="button">
						<span class="o-button_label">
							<svg class="o-button_icon" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-prev"></use></svg>
						</span>
                        </button>
                        <button class="o-button -white -square js-slider-home-button js-slider-home-next" type="button">
						<span class="o-button_label">
							<svg class="o-button_icon" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-next"></use></svg>
						</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg">
                  <symbol viewBox="0 0 18 18" id="arrow-next">
                    <path id="arrow-next-arrow.svg" d="M12.6,9L4,17.3L4.7,18l8.5-8.3l0,0L14,9l0,0l-0.7-0.7l0,0L4.7,0L4,0.7L12.6,9z"/>
                  </symbol>
                  <symbol viewBox="0 0 18 18" id="arrow-prev">
                    <path id="arrow-prev-arrow.svg" d="M14,0.7L13.3,0L4.7,8.3l0,0L4,9l0,0l0.7,0.7l0,0l8.5,8.3l0.7-0.7L5.4,9L14,0.7z"/>
                  </symbol>
                </svg>
              </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section class="nova-section section-full" style="padding-top: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 order-md-2 mb-md-0">
            <!-- Preheading -->
            <!-- div class="row"> 
              <div class="col-md-6" style="text-align: left;">
                 <i class="fa fa-print" aria-hidden="true"> <span style="font-family: Ottomat;"> Print</span></i>   
              </div> 
              <div class="col-md-6" style="text-align: right;">
                 <i class="fa fa-file" aria-hidden="true"> <span style="font-family: Ottomat;"> Save</span></i>
              </div>
            </div> -->
            <div class="row">    
            	   <table width="100%">
            	   	 <tr>
            	   	 	<td align="left" style="padding-left: 24px;">
            	   	 	  <i class="fa fa-print" aria-hidden="true" onclick="PrintDiv();"> <span style="font-family: Ottomat;"> Print</span></i> 
            	   	 	</td>
            	   	 	<td align="right" style="padding-right: 24px;">
            	   	 	  <i class="fa fa-file" aria-hidden="true"> <span style="font-family: Ottomat;" onclick="add_bookmarks(<?php echo $this->session->userdata('InvestorID');?> , <?php echo $project_item->project_id; ?>)"> Save</span></i> 
            	   	 	</td>
            	   	 </tr>
            	   </table>
            </div>
            <!-- Heading -->
            <h6 class="mb-4" style="padding-top: 16px; font-family: Ottomat; font-size: 17px;">
              CALCULATE ESTIMATED RETURN
            </h6>
            <!-- Form -->
            <form class="mb-5 mb-md-0">
              <div class="form-group">
                <label style="font-family: Ottomat;">
                  Return on Investment(ROI): <?php echo $project_item->project_roi.'%'; ?>
                </label>
                <div class="input-group">
                  <input type="number" class="form-control order-1">
                  <div class="input-group-append order-0">
                    <div class="input-group-text"> 
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-12">
                  <div class="alert alert-primary closeable" id="resultDiv" style="display: none;">
                       <p id="result" style="display: none;"></p>
                        <?php if(($this->session->userdata('logged_in'))) { ?>
                            <a class="close"></a>
                        <?php } else { ?>
                            <a class="close" onclick="displayCalculate()"></a>
                     <?php } ?> 
                  </div>
                  <!-- Button -->
                  <button class="btn btn-outline-primary btn-block mt-3" onclick="calculateIntrest(<?php echo $project_item->project_roi; ?>)">
                    Calculate
                  </button>
                  <?php if(($this->session->userdata('logged_in'))) { ?>
                         <button class="btn btn-outline-primary btn-block mt-3" id="calculate_now" style="display: none;" onclick="calculateIntrest(<?php echo $project_item->project_roi; ?>)">Calculate</button>
                        <?php } else { ?>
                            <a class="btn btn-outline-primary btn-block mt-3" id="_Now" href="<?php echo  base_url('login'); ?>" style="display: none;">Invest</a>
                    <?php } ?>
                </div>
              </div>
            </form>
            <hr/>
            <h6 class="mb-4" style="padding-top: 16px; font-family: Ottomat; font-size: 17px;">
              INSIGHT VIDEO
            </h6>
            <div class="row">
              <div class="col-sm-12 order-md-1">
                <iframe src="https://www.youtube.com/embed/3bfsmrDSSBU?landscape=1&quot;" seamless="" width="100%" height="205"></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <!-- Nav -->
            <nav class="nav nav-tabs mb-5">
              <a href="#itemDescription" class="nav-item nav-link active" data-toggle="tab">
                Description
              </a>
              <a href="#itemDetails" class="nav-item nav-link" data-toggle="tab">
                Details
              </a>
              <a href="#itemLocation" class="nav-item nav-link" data-toggle="tab">
                Location
              </a>
            </nav>

            <!-- Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="itemDescription">

                <p class="text-sm">
                  <?php echo $project_item->project_desc ;?>
                </p>

              </div>
              <div class="tab-pane fade" id="itemDetails">
                <div class="row">
                  <div class="col-md-4">
                    <p style="font-size: 14px; color:#6a6a6d; font-family: Ottomat;">
                      START DATE:
                    </p>
                    <p style="font-size: 16px; font-family: OttomatBold;">
                      <?php echo date_format(date_create($project_item->project_sdate),'jS M | Y')  ;?>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p style="font-size: 14px; color:#6a6a6d; font-family: Ottomat;">
                      COMPLETION DATE:
                    </p>
                    <p style="font-size: 16px; font-family: OttomatBold;">
                      <?php echo  date_format(date_create($project_item->project_cdate),'jS M | Y') ;?>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p style="font-size: 14px; color:#6a6a6d; font-family: Ottomat;">
                      PROJECT STATUS:
                    </p>
                    <p style="font-size: 16px; font-family: OttomatBold;">
                      <?php echo $project_item -> project_type ;?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="itemLocation">
                <div class="row">
                  <div class="col-12">
                    <div class="map">
                      <div class="map-container" data-markers="[[<?php echo $project_item->latitude; ?>, <?php echo $project_item->longitudes; ?>]]" data-zoom="12" style="overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>