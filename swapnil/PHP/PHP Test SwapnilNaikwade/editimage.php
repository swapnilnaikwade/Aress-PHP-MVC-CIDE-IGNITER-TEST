<?php include 'header.php';?>
<?php include 'dbconnection.php';?>
<?php
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
    // Temporary file name stored on the server
    $tmpName = $_FILES['image']['tmp_name'];
    print_r($files1);
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $TargetPath = "upload/" . $_FILES["image"]["name"];
    echo $TargetPath;
    $query = "UPDATE images SET img='$TargetPath' WHERE id =" . $_GET['id'];
    echo $_GET['id'];
    $deleteResult = mysqli_query($cid, $query);
    //Uploading file in local storage
    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    unlink('./' . $_FILES["image"]["name"]);
    // Print results
    header('location:display.php');
}
?>
<div class="tableContent">
    <div class="row">
        <form action = "" method = "post" enctype = "multipart/form-data" name = "changer">
            <h1 style="color: #FFD700;">Upload your image:</h1>
            <br />
            <input name = "MAX_FILE_SIZE" value = "102400" type = "hidden"><br /><br />
            <input name = "image" accept = "image/jpeg" type = "file"><br /><br />
            <input type = "submit" class = "btn btn-primary" value = "Submit">
        </form>
    </div>
</div>
<?php include 'footer.php';?>