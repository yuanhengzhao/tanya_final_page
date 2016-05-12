<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <title>Tanya Fernandes | Realtor in Milton</title>
	<link href="assert/icon.png" rel="icon" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/landing_page.js"></script>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
	<link rel="stylesheet" href="css/style.css">
  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74517567-2', 'auto');
  ga('require', 'displayfeatures')
  ga('send', 'pageview');

</script>


  </head>
<body>

<?php if (isset($_GET['s'])) {
    switch($_GET['s']) {
        default:
            $msg = "success";
            break;
        case 1:
            $msg = "No name entered";
            break;
        case 2:
            $msg = "No phone entered";
            break;
        case 3:
            $msg = "No email entered";
            break;
        case 4:
            $msg = "Email sending problem";
            break;
        case 6:
            $msg = "No address entered";
            break;
    } ?>
    <!--div class="text-center">
		<h3 style="color:red;"><?php echo "Warning: ".$msg; ?></h3>
    </div-->

<?php } ?>

	<div id="cover-page">		
		<header>
			<div id="kid" class="header" style="margin: 0;">
			
				<div id ="tanya-branding" class="site-branding col-sm-8 col-xs-12 text-left" style="margin-top: 1%">
					<div class="row">
						<div class="col-xs-6 minWidth">
							<span id="tanya-logo">
								<img class="img-responsive" src="assert/TanyaLogo.png"/>
							</span>
						</div>
						<div class="col-xs-6">
							<span id="tanya-information" >
								<i class="glyphicon glyphicon-phone"></i> &nbsp;<a href="tel:905-878-8101" onclick="ga('send', 'event', 'Telephone', 'Click');">905-878-8101</a><br />
								<i class="glyphicon glyphicon-envelope"></i> &nbsp;<a href="mailto:tanya@tanyafernandes.ca" onclick="ga('send', 'event', 'Email', 'Click');">tanya@tanyafernandes.ca</a><br />
								<a target="_blank" href="https://www.facebook.com/TanyaVakilFernandesRealty/"><i id="face-icon" class="fa fa-facebook"></i></a>
								<a target="_blank" href="https://www.linkedin.com/in/tanya-vakil-fernandes-75a1a6a2"><i id="link-icon" class="fa fa-linkedin"></i></a>
							</span>
						</div>
					</div>
				</div>
					
				<div id="tanya-company-logo" class="col-sm-4 col-xs-4 hidden-xs" style="margin-top: 1%">
					<img class="img-responsive" src="assert/TanyaCompanyLogo.png"/>
				</div>
			
			</div>
	
		<div id="cover-area" class="col-xs-12">
			<div id="title">
				<span>I'm Tanya Fernandes.
				<p style="font-family: Raleway; font-size: 35%; font-weight: 700;">If you're looking to buy or sell in Milton, I can help.</p>
				</span>
			</div>
			
			<div id="button-area" class="pink-button">
				<a id="buyer-button" href="#buyer-area" class="btn-top">WHY BUY WITH ME</a>
				<a id="buyer-button" href="#step" class="btn-top">WHY SELL WITH ME</a>
			</div>

		</div>
		
		<div id="bg-img" style="position: absolute;z-index: -1;">
			<img id="bgp" class="img-responsive" src="assert/cover.jpg"/>
			
		</div>		
	</div>
	
	<div class="row" id="buyer-area" >

	  <div class="col-sm-12">	
	  	<div class="row" style="padding:2% 0 2%;">
			<div class="area">
				<div class="col-sm-12 text-center">
					<span id="largetitle">Your <font style="vertical-align: 9%" color="#C6205E">7</font> Steps to Home Buying Success</span>
				</div>
				<div class="col-sm-10 col-sm-offset-1"><div class="row">
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div id="e-book">
						<img class="img-responsive" width=200 style="padding-top: 35px" src="assert/Tanya-Book.gif" alt="e-book" />
					</div>
				</div>	
				<div class="col-lg-5 col-md-5 col-sm-7 col-xs-10">
					<div id="buyer-information">	
					<!--h2 class="title1">Read my Home Buyer's Guide to Milton</h2-->
	                <h4>Find out the 7 steps that every Canadian needs to know when buying a home and much more, including:</h4>
	                <ul id="buyInfo-list">
		                <li><h4>Top 5 Reasons to Choose a Real Estate Professional</h4></li>
						<li><h4>4 Simple Steps to a Mortgage Pre-Approval</h4></li>
						<li><h4>Finding Your Dream Home</h4></li>
						<li><h4>Calculating Common Costs for Buyers</h4></li>
						<li><h4>14 Tips for Packing Like a Pro</h4></li>
					</ul>
					<h4>Let me help make your next move easier!</h4>
	            	</div>
	            </div>
	            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-10">
					<div>
						<form name="buyer-form" action="php/buyer-form.php" method="post"  id="buyer-form">
					    	<p class="form-title">Milton is My Home. <br>I Can Help Find Yours Too.</p>
							<!-- Text input-->
							<div class="form-group">  
							  <div class="input-group">
							  	<input name="name" id="name" placeholder="Full Name" class="form-control"  type="text">
							  </div>
							</div>
							
							<!-- Text input-->  
							<div class="form-group">
							    <div class="input-group">
							  		<input name="phone" id="phone" placeholder="Phone Number" class="form-control" type="text">
							    </div>
							</div>

							<!-- Text input-->
							<div class="form-group"> 
							    <div class="input-group">
							  		<input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="text">
							    </div>
							</div>
							
							<!-- Success message -->
							<div class="alert alert-success" role="alert" id="success_message">Success </div>

							<!-- Button -->
							<div class="submit">
								<button name="submit1" id="submit1" type="submit" class="btn-top col-lg-12 btn btn-warning">GET MY FREE BUYER'S GUIDE</button>
							</div>

						</form>
					</div>
				</div>	
			  </div></div>	
			</div>
		</div><!--End Row-->	
	  </div>
	</div><!--End Row-->
	<div class="row no-margin">
	  <div class="col-sm-12 no-padding">
	    <div id="change"></div>
	    <script>
 		$('#change').load('changeable_content.html');
 	    </script>
	  </div>	
	</div><!--End Row-->
	<div class="row" id="step">
	  <div class="col-sm-12">	
		<div>
			<h1 class="stepH1">Be an Educated Seller</h1>
			<div class="row" >
				<div class="col-md-6 text-center stepSection1">
					<img class="img-responsive" src="assert/111.png" alt="education1">
				</div>
				<div class="col-md-6 text-center stepSection2">
					<img class="img-responsive" src="assert/222.png" alt="education1">
				</div>
			</div>	
		</div>
	  </div>
	</div><!--End Row-->
	<div id="seller-area" class="area">
		<div class="content">
		    <form name="seller-form" action="php/seller-form.php" method="post"  id="seller-form">
		    	<p class="form-title" style="margin-bottom:20px;">Get Top Value for Your Home</p>
				<!-- Text input-->
				<div class="form-group">  
				  <div class="input-group">
				  	<input name="fullName" id="fullName" placeholder="Full Name" class="form-control"  type="text">
				  </div>
				</div>
				
				<!-- Text input-->  
				<div class="form-group">
				    <div class="input-group">
				  		<input name="phoneNumber" id="phoneNumber" placeholder="Phone Number" class="form-control" type="text">
				    </div>
				</div>

				<!-- Text input-->
				<div class="form-group"> 
				    <div class="input-group">
				  		<input name="emailAddress" id="emailAddress" placeholder="E-Mail Address" class="form-control"  type="text">
				    </div>
				</div>
				<!-- Text input-->      
				<div class="form-group">
				    <div class="input-group">
					  <input name="address" id="address" placeholder="Address" class="form-control" type="text">
				    </div>
				</div>

				<!-- Success message -->
				<div class="alert alert-success" role="alert" id="success_message">Success </div>

				<!-- Button -->
				<div class="submit">
					<button name="submit2" id="submit2" type="submit" class="btn-top col-lg-12 btn btn-warning">LEARN MORE</button>
				</div>

			</form>
			<div id="seller-information">
				<p id="largetitle" style="color:#fff;">D'zigned to Sell Program</p>
		<h3>	Presentation is Key. Register and learn about my D'zigned to Sell Program.
Find out how I can use my expertise in Interior Design to help you sell your home fast and for top dollar.</h3>
			</div>
		</div>
	</div>

<div class="row" id="aboutMe">
	<div class="col-sm-10 col-sm-offset-1">
	<div id="self-area" class="area">
		<span id="self-information">
			<h1 id="largetitle">About Me</h1>
	<p>I operate a full service real estate business, assisting my clients reach their real estate goals.
<p>I am an active member of the community, endorsing the Milton Chamber of Commerce & supporting local businesses.
<p>As a mother of two, I understand the importance of a great family life. Milton is a vibrant community with spaces and places where individuals and families can flourish.
<p>I believe in constantly updating my real estate knowledge, giving my clients a clear advantage at the negotiation table.
			</p>
		</span>
		<span id="self-information-image">
			<img src="assert/Tanya's Portrait.png" alt="self-information-image" />
		</span>
	</div>
	</div>
</div>
	<div id="comment-area" class="area">
		<span id="largetitle" style="margin:0 auto;color:#fff;display:block;" >Testimonials</span>
		<div id="comment-information">
			<h1></h1>
		</div>
	</div>
	

<script type="text/javascript">
	var coverwidth = document.getElementById('bg-img').offsetWidth;
	var coverheight = document.getElementById('bg-img').offsetHeight;

	document.getElementById('cover-page').setAttribute('height',coverheight);
</script>


	<div id="footer" class="row no-margin">
		
		<div class="col-sm-12">
			<div class="row">
				<div class="col-xs-6 col-sm-3 text-left">
					<img class="img-responsive" src="assert/Tanya's Logo.png" alt="logo" />
					<h4>Tanya Vakil Fernandes</h4>
	                <h5> Direct: 905 878-8101<h5>
	          
	                <h5>Office: 905 878-8101</h5>
	                
	                <h5>tanya@tanyafernandes.ca
	                </h5>
	                <a target="_blank" href="https://www.facebook.com/TanyaVakilFernandesRealty/"><i id="face-icon" class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://www.linkedin.com/in/tanya-vakil-fernandes-75a1a6a2"><i id="link-icon" class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-sm-6 hidden-xs">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.206375032526!2d-79.87956428450661!3d43.51888897912624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b6fa729ea016f%3A0x43ba1f8f4076fb51!2s475+Main+St+E%2C+Milton%2C+ON+L9T+1R1!5e0!3m2!1sen!2sca!4v1460412520037" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-xs-6 col-sm-3 text-right">
					<div style="position: relative;height: 86px;">
						<img class="img-responsive" style="width:200px; position: absolute;right: 0; margin-right: 5%" src="assert/tanya_logo_Transparent.png" alt="logo" />
					</div>
					<h4>Royal LePage</h4> 
	                <h4>Meadowtowne Realty, Brokerage</h4>
	                <h5 style="margin-top:20px;">
	                475 Main St E, Milton, ON L9T 1R1
	                </h5>
				</div>
				<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.206375032526!2d-79.87956428450661!3d43.51888897912624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b6fa729ea016f%3A0x43ba1f8f4076fb51!2s475+Main+St+E%2C+Milton%2C+ON+L9T+1R1!5e0!3m2!1sen!2sca!4v1460412520037" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		
	</div>

</div>	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
	<script src="js/sellerForm.js"></script>
	<script src="js/buyerForm.js"></script>
<?php if (isset($_GET['s']) && ($_GET['s'] == 7)) { ?>
 	<script>
 		alter("Thank You for Registering. I will be in Touch Soon! ");
 	</script>
<?php } ?>
<?php if (isset($_GET['s']) && ($_GET['s'] == 8)) { ?>
 	<script>
 		alter("Thank You! Please Check Your Email for a Link to My E-book.");
 	</script>
<?php } ?>
</body>
</html>
