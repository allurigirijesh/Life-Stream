<?php require('dbconnect.php'); ?>
<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// if(empty($username) and empty($phone) and empty($email)){
//     echo "<script>alert('Invalid user details.')</script>";
//     header( "refresh:0.1;URL=Donate.php" );
// }

$sql = "insert into lifestream.help(name,email,phone,message) values ('$name','$email','$phone','$message')";
    if($conn->query($sql) == TRUE){
        header( "refresh:0.1;URL=help.php" );

    }  

?>