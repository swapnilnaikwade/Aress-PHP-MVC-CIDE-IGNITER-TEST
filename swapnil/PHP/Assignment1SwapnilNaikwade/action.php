<head>
    <!--Bootstrap CSS-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--Custom CSS-->
    <link href="assets/css/master.css" rel="stylesheet">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3" >
            <form>
                <!--Name-->
                <div class="form-group">
                    <label>Name : </label>
                    <?php 
                        if($_POST)   {
                        if($_POST["name"]!= '') {
                        $name=$_POST["name"];
                        } else {
                        $name = '';
                        }
                        }		
                        echo  $name; ?>
                </div>
                <!--Email address-->
                <div class="form-group">
                    <label>E-mail : </label>
                    <?php
                        if($_POST)   {
                         if($_POST["email"]!= '') {
                           $email=$_POST["email"];
                         } else {
                          $email = '';
                         }
                         }		
                        	echo $email; ?>
                </div>
                <!--Address-->
                <div class="form-group">
                    <label>Address : </label>
                    <?php 
                        if($_POST){
                        if($_POST["Address"]!= ''){
                        $Address=$_POST["Address"];
                        } else {
                        $Address = '';
                        }
                        }		
                        echo $Address; ?>
                </div>
                <!--City-->
                <div class="form-group">
                    <label>City : </label>
                    <?php
                        if($_POST){
                         if($_POST["City"]!= ''){
                           $City=$_POST["City"];
                         } else {
                          $City = '';
                         }
                         }		
                       	echo $City ; ?>
                </div>
                <!--Phone number-->
                <div class="form-group">
                    <label>Phone : </label>
                    <?php 
                        if($_POST){
                        if($_POST["phone"]!= ''){
                        $phone=$_POST["phone"];
                        } else {
                        $phone = '';
                        }
                        }
                        echo $phone; ?>
                </div>
                <!--Education-->
                <div class="form-group">
                    <label>Education </label>
                    <?php 
                        if($_POST){
                        if($_POST["education"]!= ''){
                        $education=$_POST["education"];
                        } else {
                        $education = '';
                        }
                        }		
						echo $education; ?>
                </div>
				<!--Redirect To User Profile Submission Page-->
                <input type="button" onclick="window.location.href='http://localhost/assignment1SwapnilNaikwade/index.html'" value="Go Back"/>
            </form>
        </div>
    </div>
</div>