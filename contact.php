<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JMRB</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">

</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div> 
	
    <?php include('header.php');?>
   
  	<!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/4.jpg);">
    	<div class="auto-container">
        	<h1>Contact</h1>
        	<ul class="bread-crumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            
            	<!--Form Column-->
            	<div class="column form-column col-md-7 col-sm-12 col-xs-12">
                	<div class="default-title"><h3>Send Us Message</h3><div class="separator"></div></div>
					<div class="contact-form default-form">
						<form method="post"  id="contact-form" action="sendmail.php">
							<div class="row clearfix">

								

								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<input type="text" name="username" value="" placeholder="Name *">
									</div>
								</div>


								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="group-inner">
										<input type="text" name="mobileno" required maxlength="10" value="" placeholder="Mobile No *" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
									</div>
								</div>

								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="group-inner">
										<input type="email" name="email" value="" placeholder="Email *">
									</div>
								</div>

								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<input type="text" name="subject" placeholder="Subject">
									</div>
								</div>

								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<textarea name="message" placeholder="Message *"></textarea>
									</div>
								</div>

								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
				<div class="g-recaptcha" data-sitekey="6LebukgUAAAAAAK48M9sm-JqB3ithtRxq8n3fNs0" ></div>
									</div>
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<!-- <button type="submit"  name="submit" value="Submit" class="theme-btn btn-style-one">SUBMIT </button> -->
									<input type="submit" name="submit" value="Submit" class="theme-btn btn-style-one" >
								</div>
							</div>
						</form>
					</div>
                </div>
                
                <!--Info Column-->
                <div class="column info-column col-md-5 col-sm-12 col-xs-12">
                
                	<div class="inner-box">
                        <!--Default Title-->
                        <div class="default-title"><h3>Contact Us</h3><div class="separator"></div></div>
                        <!--Contact Info-->
                        <div class="contact-info">
                            <ul>
                                <li><span class="icon flaticon-placeholder"></span>123 North West, Florida, USA</li>
                                <li><span class="icon flaticon-close-envelope"></span>info@boltonconsulting.com</li>
                                <li><span class="icon flaticon-telephone"></span>+012 345 6789</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

   	<!--Map Section-->
    <section class="map-section">
    	<div class="map-outer">
			<!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="13"
                data-lat="-37.817085"
                data-lng="144.955631"			  
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"							
                style="height: 450px;">
            </div>

        </div>
    </section>
	<!--End Map Section-->

	
    <?php include('footer.php');  ?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fa fa-close"></span></div>
	<div class="popup-inner">
    
    	<div class="search-form">
        	<form method="post" action="http://html.tonatheme.com/2017/consultation/index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>
        
        </div>
        
    </div>
</div>
<!--End Search Popup-->



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->











</body>

</html>
