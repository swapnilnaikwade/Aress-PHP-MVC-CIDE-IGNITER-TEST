<html>
    <head>
        <!--Bootstrap CSS-->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--Custom CSS-->
        <link href="assets/css/master.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'header.php';?>
        <?php include 'left.php';?>
        <!--Contact us-->
        <section class="quick-contact clearfix">
            <div class="container clearfix">
                <div class="row quick-contact-heading">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2>Quick Contact</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <form class="quick-contact-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Your Email" name="email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="8" id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="submit-btn">
                                <button type="submit" class="btn btn-primary">SUBMIT NOW</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <?php include 'right.php';?>
        <?php include 'footer.php';?>
    </body>
</html>