<html>
    <head>
        <!--Bootstrap CSS-->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--Custom CSS-->
        <link href="assets/css/master.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'header.php';?>
        <?php include 'left.php';?>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div class="contact">
                    <h2>FAQ</h2>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="message" placeholder="Right your query"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'right.php';?>
        <?php include 'footer.php';?>
    </body>
</html>