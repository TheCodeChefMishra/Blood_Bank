<html>
   <head>
       <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"></link>
		 <link href="blood_bank.css" rel="stylesheet" type="text/css"></link>
		 <link href="menustyles.css" rel="stylesheet" type="text/css"></link>
		  <script src="dist/js/jquery-3.2.1.js"></script>
		  <script src="dist/js/menuscript.js"></script>
		 <script src="dist/js/bootstrap.min.js"></script>
		 <link href="font/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		 <link href="animation/css/libs/animate.css" rel="stylesheet"/>
		 <script src="animation/dist/wow.min.js"></script>
	</head>
  <body>
     <div class="container" style="margin-top:20px;">
		   <div id='cssmenu'>
<ul>
   <li><a href='index.php'>Home</a></li>
  
   <li><a href='#'>About</a></li>
   <li><a href='#'>Contact</a></li>
     <li><a href='#' data-toggle="modal" data-target="#myModal">Login</a></li>
	  <li><a href='#'>Registration</a></li>
</ul>
</div>
		    
	 </div>
	  <div class="container" style="margin-top:100px; background-color:pink;">
	   <div class="col-md-offset-2 col-md-8" style="margin-top:100px; margin-bottom:50px;">
	   <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" style="height:50px;"required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email"style="height:50px;" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" style="height:50px;"placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *"style="height:50px;" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
			</div>
	   </div>
   </body>
 </html>