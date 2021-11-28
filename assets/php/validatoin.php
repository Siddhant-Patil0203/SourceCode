<?php
session_start();

//connect
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'form-details');
//details
$username = $_POST['username'];
$pass = $_POST['password'];

$s = "SELECT * FROM logindetails WHERE username = '$username' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['name'] = $username;
    header('location: home.php');
}
else{
    echo "<script language = 'javascript'>
          alert('Wrong Username or password')
          </script>";
    include('index.html');
}
?>

