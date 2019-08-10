<html>
    <head>
        <link rel="icon" href="assets/images/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/master.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <?php include 'header.php';?>
            <?php include 'left.php';?>
        </div>
        <div class="container-fluid">
            <div class="row home-page">
                <!--Our Leaders-->
                <section class="our-leaders clearfix">
                    <div class="container clearfix">
                        <div class="row our-leaders-heading">
                            <div class="col-md-8 col-md-offset-2 wow fadeInUp">
                                <h2>Our Leaders</h2>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                        <div class="row our-leaders-image">
                            <div class="col-md-3 col-lg-3">
                                <div class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="image-box">
                                        <img class="img-responsive" src="assets/images/team-1.jpg" alt="Jason Doe">
                                        <h4>Ruhfayed Sakib</h4>
                                        <p class="lead">UI/UX Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="600ms">
                                    <div class="image-box">
                                        <img class="img-responsive" src="assets/images/team-2.jpg" alt="Timothy Clark">
                                        <h4>Shakil Hossain</h4>
                                        <p class="lead">Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                                    <div class="image-box">
                                        <img class="img-responsive" src="assets/images/team-3.jpg" alt="Vicky Tan">
                                        <h4>SM Jehad</h4>
                                        <p class="lead">Branding</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="1200ms">
                                    <div class="image-box">
                                        <img class="img-responsive" src="assets/images/team-4.jpg" alt="Kevin Peterson">
                                        <h4>Meheraj Hossain</h4>
                                        <p class="lead">Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>
        <?php include 'right.php';?>
        <?php include 'footer.php';?>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/wow.min.js"></script> 
        <script>
            jQuery(function($) {
            new WOW().init();
            $(window).scroll(function(){
            	if ($(this).scrollTop() > 100) {
            		$('.scrollup').fadeIn();
            		} else {
            			$('.scrollup').fadeOut();
            		}
            	});
            	$('.scrollup').click(function(){
            		$("html, body").animate({ scrollTop: 0 }, 1000);
            			return false;
            	});
            });
        </script>
        <script>
            function myFunction() {
            	var x = document.getElementById("myTopnav");
            	if (x.className == "topnav") {
            		x.className += " responsive";
            	} else {
            		x.className = "topnav";
            	}
            }
        </script>
    </body>
</html>