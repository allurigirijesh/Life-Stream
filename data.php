<?php require('dbconnect.php'); ?>
<?php
$username = $_POST['name'];
$phone = $_POST['mobile'];
$email = $_POST['email'];
$age = $_POST['age'];
$bloodgroup = $_POST['bloodgroup'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];


if(empty($username) or empty($phone) or empty($email) or empty($age) or empty($bloodgroup) or empty($gender) or empty($address) or empty($pincode)){
    echo "<script>alert('Invalid user details.')</script>";
    header( "refresh:0.1;URL=Donate.php" );
}

else if($age > 60 or $age <18){
    echo "<script>alert('Blood can be donated in the age group between 18 - 60')</script>";
    header( "refresh:0.1;URL=Donate.php" );
}
else{

$sql = "insert into lifestream.users(name,age,mobile,gender,address,bloodgroup,email,pincode) values ('$username','$age','$phone','$gender','$address','$bloodgroup','$email','$pincode')";
    if($conn->query($sql) == TRUE){
        echo "<script>alert('Registerd Successfully.')</script>";
        header( "refresh:0.1;URL=Donate.php" );

    }
}
  

?>