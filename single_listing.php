<!-- Titlebar
================================================== -->

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
<div id="divToPrint" style="display:none;">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="property-title">
                    <h2><?php echo $project_item -> project_title ;?> <span class="property-badge"> <?php echo $project_item -> project_type ;?></span></h2>
                    <span>
                        <?php echo $project_item -> project_location ;?>
                    </span>
                </div>
                <!-- Property Description -->
                <div class="col-lg-8 col-md-7">
                    <div class="property-description">
                        <h3 class="desc-headline">Project Description</h3>

                        <!-- Main Features -->
                        <ul class="property-main-features">
                            <li>Estimated Home Value : <?php echo '$ '.number_format($project_item->project_cost);?></li>
                            <li>Investment Type: <span> Equity</span></li>
                            <li>Return on Investment (ROI): <span> <?php echo $project_item->project_roi ;?>%</span></li>
                            <li>Project Cost: <span> <?php echo '$ '.number_format($project_item->project_cost) ;?> </span></li>
                            <li>Expected Date of Completion: <span> <?php echo  date_format(date_create($project_item->project_cdate),'jS M | Y') ;?></span></li>
                            <li>Project Current Phase: <span> <?php

                                    if ($project_item->phase_number){
                                        echo $project_item->phase_number." ".$project_item->task_name;
                                    }else{
                                        echo "No phase updated";
                                    }
                                    ?></span></li>
                            <li>Total Amount Invested: <span> <?php  echo '$ '.number_format($project_item->invested_amount) ;?></span></li>
                            <li>Amount you can Invest: <span> <?php if(($project_item->invested_amount) >= ($project_item->project_cost)){ echo 'Project Fully Invested';}else{echo '$ '.number_format($project_item->project_cost - $project_item->invested_amount) ;}  ?></span></li>
                        </ul>

                        <!-- Details -->
                        <h3 class="desc-headline">Details</h3>
                        <ul class="property-features margin-top-0">
                            <li>Start Date: <span><?php echo date_format(date_create($project_item->project_sdate),'jS M | Y')  ;?></span></li>
                            <li>Completion Date: <span> <?php echo  date_format(date_create($project_item->project_cdate),'jS M | Y') ;?> </span></li>
                            <li>Project Status: <span> <?php echo $project_item -> project_type ;?></span></li>
                        </ul>
                        <!-- Description -->
                        <p>
                            <?php echo $project_item->project_desc ;?>
                        </p>
                    </div>
                </div>
                <!-- Property Description / End -->
            </div>
        </div>
    </div>
</div>
<div class="parallax titlebar"
     data-background="<?php echo base_url();?>assets/images/listings-parallax.jpg"
     data-color="#911938"
     data-color-opacity="0.7"
     data-img-width="800"
     data-img-height="505">

    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url()?>invest-project" class="back-to-listings"></a>
                    <div class="property-title">
                        <h2><?php echo $project_item -> project_title ;?> <span class="property-badge"> <?php echo $project_item -> project_type ;?></span></h2>
                        <span>
                            <a href="#location" class="listing-address">
                                <i class="fa fa-map-marker"></i>
                                <?php echo $project_item -> project_location ;?>
                            </a>
                        </span>
                    </div>

                    <div class="property-pricing">
                        <div style="color: #f2dede"><?php echo '$ '.number_format($project_item->project_cost);?></div>
                        <div class="sub-price">Estimated Home Value</div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content
================================================== -->
<div class="container">
    <div class="row margin-bottom-50">
        <div class="col-md-12">
            <!-- Slider -->
            <div class="fullwidth-property-slider margin-bottom-50">
                <?php foreach ($images as $image) {
                    echo '<a href = "'.base_url().$image->image_path.'" data-background-image = "'.base_url().$image->image_path.'" class="item mfp-gallery" ></a >'; 
                }?>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row">
        <div class="col-md-12">
            <?php

            if(isset($_SESSION['trans_error']) && isset($_SESSION['error_trans'])){
            echo '<div class="notification error closeable">
                    <p><span>Error!</span> Transaction Failed. Error Code <strong>'.$_SESSION['error_trans'].'</strong> </p>
                    <a class="close" href="#"></a>
                </div>';
            unset($_SESSION['trans_error']);
            unset($_SESSION['error_trans']);
            }

            if(isset($_SESSION['trans_success']) && isset($_SESSION['trans_id'])){
                echo '<div class="notification success closeable">
                        <p><span>Success!</span> You have invested successful, now relax and enjoy it. Your Transaction ID <strong>'.$_SESSION['trans_id'].'</strong> </p>
                        <a class="close" href="#"></a>
                    </div>';
                unset($_SESSION['trans_success']);
                unset($_SESSION['trans_id']);
            }
            ?>
        </div>
    </div>

    <div class="row">

        <!-- Property Description -->
        <div class="col-lg-8 col-md-7">
            <div class="property-description">

                <!-- Main Features -->
                <ul class="property-main-features">
                    <li>Investment Type: <span> Equity</span></li>
                    <li>Return on Investment (ROI): <span> <?php echo $project_item->project_roi ;?>%</span></li>
                    <li>Project Cost: <span> <?php echo '$ '.number_format($project_item->project_cost) ;?> </span></li>
                    <li>Expected Date of Completion: <span> <?php echo  date_format(date_create($project_item->project_cdate),'jS M | Y') ;?></span></li>
                    <li>Project Current Phase: <span> <?php

                            if ($project_item->phase_number){
                                echo $project_item->phase_number." ".$project_item->task_name;
                            }else{
                                echo "No phase updated";
                            }
                            ?></span></li>
                    <li>Total Amount Invested: <span> <?php  echo '$ '.number_format($project_item->invested_amount) ;?></span></li>
                    <li>Amount you can Invest: <span> <?php if(($project_item->invested_amount) >= ($project_item->project_cost)){ echo 'Project Fully Invested';}else{echo '$ '.number_format($project_item->project_cost - $project_item->invested_amount) ;}  ?></span></li>
                </ul>


                <!-- Description -->
                <h3 class="desc-headline">Description</h3>
                <div class="show-more">
                    <p>
                        <?php echo $project_item->project_desc ;?>
                    </p> 

                    <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
                </div>

                <!-- Details -->
                <h3 class="desc-headline">Details</h3>
                <ul class="property-features margin-top-0">
                    <li>Start Date: <span><?php echo date_format(date_create($project_item->project_sdate),'jS M | Y')  ;?></span></li>
                    <li>Completion Date: <span> <?php echo  date_format(date_create($project_item->project_cdate),'jS M | Y') ;?> </span></li>
                    <li>Project Status: <span> <?php echo $project_item -> project_type ;?></span></li>
                </ul>

                <!-- Location -->
                <h3 class="desc-headline no-border" id="location">Location</h3>
                <div id="propertyMap-container">
                    <div id="propertyMap" data-latitude="<?php echo $project_item->latitude; ?>" data-longitude="<?php echo $project_item->longitude; ?>"></div>
                    <a href="#" id="streetView">Street View</a>
                </div>
                <!-- Share Buttons -->
                <ul class="share-buttons margin-top-40 margin-bottom-0">
                    <li><a class="fb-share" href="http://www.facebook.com/sharer.php?u=<?php echo base_url().'invest/'.$project_id; ?>" target="_blank"><i class="fa fa-facebook"></i> Share</a></li>
                    <li><a class="twitter-share" href="https://twitter.com/share?url=<?php echo base_url().'invest/'.$project_id; ?>&amp;text=<?php echo $project_item -> project_title ;?>&amp;hashtags=abranovaRealEstate" target="_blank"><i class="fa fa-twitter"></i> Tweet</a></li>
                    <li><a class="gplus-share" href="https://plus.google.com/share?url=<?php echo base_url().'invest/'.$project_id; ?>" target="_blank"><i class="fa fa-google-plus"></i> Share</a></li>
                </ul>

            </div>
        </div>
        <!-- Property Description / End -->


        <!-- Sidebar -->
        <div class="col-lg-4 col-md-5">
            <div class="sidebar sticky right">

                <!-- Widget -->
                <div class="widget margin-bottom-30">
                    <button class="widget-button" onclick="PrintDiv();"><i class="sl sl-icon-printer"></i> Print</button>
                    <button class="widget-button save" data-save-title="Save" data-saved-title="Saved" onclick="add_bookmarks(<?php echo $this->session->userdata('InvestorID');?> , <?php echo $project_item->project_id; ?>)">
                        <?php
                        if (($this->session->userdata('logged_in'))){ ?>
                            <span class="like-icon tooltip"></span>
                        <?php }?>
                    </button>
                </div>
                <!-- Widget / End -->


                <!-- Widget -->
                <div class="widget">

                    <!-- Agent Widget -->
                    <div class="agent-widget">
                        <div class="agent-title">
                            <h6><a href="#" style="color: rgba(10,10,10,0.74);">CALCULATE ESTIMATED RETURN</a></h6>
                            <div class="clearfix"></div>
                        </div>

                        <label id="roi">Return on Investment(ROI): <?php echo $project_item->project_roi.'%'; ?> </label>
                        <input type="text" id="investment" placeholder="Investment Amount"/>
                        <div class="notification notice closeable" id="resultDiv" style="display: none;">
                            <p id="result" style="display: none;"></p>
                        <?php if(($this->session->userdata('logged_in'))) { ?>
                            <a class="close"></a>
                        <?php } else { ?>
                            <a class="close" onclick="displayCalculate()"></a>
                        <?php } ?>

                        </div>
                        <button class="button fullwidth margin-top-5" id="calculate" onclick="calculateIntrest(<?php echo $project_item->project_roi; ?>)">Calculate</button>
                        <?php if(($this->session->userdata('logged_in'))) { ?>
                         <button class="button fullwidth margin-top-5" id="calculate_now" style="display: none;" onclick="calculateIntrest(<?php echo $project_item->project_roi; ?>)">Calculate</button>
                        <?php } else { ?>
                            <a class="button fullwidth margin-top-5" id="_Now" href="<?php echo  base_url('login'); ?>" style="display: none;">Invest</a>
                        <?php } ?>

                    </div>
                    <!-- Agent Widget / End --> 

                </div>


                <?php if(($this->session->userdata('logged_in'))) { ?>
                <div class="widget">

                    <!-- Agent Widget -->
                    <div class="agent-widget" id="content_value">
                        <div class="agent-title" id="agent_title">
                            <h6><a href="#" style="color: rgba(10,10,10,0.74);">INVEST NOW</a></h6>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row" id="changeDiv" class = "changeDiv" style="display: none;">
                            <img src="<?php echo base_url('assets/images/loading_abranova.gif')?>" style="max-width: 80px; max-height: 80px;">
                            <h6>   Please wait</h6>
                            <h6 id="Investmentresult" style="display: none;"><i></i></h6>
                        </div>

                        <form id="checkout" method="post" action="<?php echo base_url('payment-checkout')?>">
                            <input type="number" min="0" max="<?php if(($project_item->invested_amount) >= ($project_item->project_cost)){ echo '0';}else{echo ($project_item->project_cost - $project_item->invested_amount) ;}  ?>" name="amount" required id="amount" placeholder="Investment Amount"/>
                            <input id="nonce" name="payment_method_nonce" type="hidden" />
                            <input name="project_id" value="<?php echo $project_item->project_id; ?>" type="hidden" />
                            <div id="payment-form"></div>
                            <button type="submit" class="button fullwidth margin-top-5">INVEST NOW</button>
                            <!--<button type="submit" class="button fullwidth margin-top-5" id="invest_now" onclick="investnow(<?php /*echo $this->session->userdata('InvestorID'); */?> , <?php /*echo $project_item->project_id; */?>)">INVEST NOW</button>-->
                        </form>

                        <script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>
                        <script>
                            // We generated a client token for you so you can test out this code
                            // immediately. In a production-ready integration, you will need to
                            // generate a client token on your server (see section below).
                            var clientToken = "<?php echo $braintree_token; ?>";

                            braintree.setup(clientToken, "dropin", {
                                container: "payment-form"
                            });

                            braintree.dropin.create({
                                authorization: clientToken,
                                selector: '#payment-form',
                                paypal: {
                                    flow: 'vault'
                                }
                            }, function (createErr, instance) {
                                if (createErr) {
                                    console.log('Create Error', createErr);
                                    return;
                                }
                                form.addEventListener('submit', function (event) {
                                    event.preventDefault();
                                    instance.requestPaymentMethod(function (err, payload) {
                                        if (err) {
                                            console.log('Request Payment Method Error', err);
                                            return;
                                        }
                                        // Add the nonce to the form and submit
                                        document.querySelector('#nonce').value = payload.nonce;
                                        form.submit();
                                    });
                                });
                            });
                        </script>

                    </div>

                </div>

                <?php } ?>
                <!-- Widget / End -->


                <div class="widget">

                    <!-- Agent Widget -->
                    <div class="agent-widget" id="content_value">
                        <div class="agent-title" id="agent_title">
                            <h6><a href="#" style="color: rgba(10,10,10,0.74);">INSIGHT VIDEO</a></h6>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            <?php
                            if($project_item->video_link != null){
                                echo '<iframe src=https://www.youtube.com/embed/'.trim($project_item->video_link).'?landscape=1" width="205" height="205" seamless=""></iframe>';
                            }else{
                                echo '<iframe src=http://player.vimeo.com/video/223044262?landscape=1" width="205" height="205" seamless=""></iframe>';
                            }
                            ?>
                        </div>

            </div>
        </div>
        <!-- Sidebar / End -->

    </div>
</div>


