<?php  include 'header.php'; ?>
<?php include 'connection.php'; ?>
<?php
$id = '';
$userame = '';
$email = '';
$phone = '';
$flag = 0;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $flag = $_POST['flag'];
    // If information of user is already filled in the form then update the profile
    if ($flag == 1) {
        $updateData = " UPDATE users SET  username = '$username', email = '$email',  phone ='$phone' WHERE id = $id";
        $updateResult = mysqli_query($conn, $updateData);
        if (!$updateResult) {
            echo ("ERROR: " . mysqli_error() . "\n$updateResult\n");
        }
    }
}
echo ("Data is updated successfully.\n");
?>
