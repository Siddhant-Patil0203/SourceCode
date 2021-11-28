<?php

session_start();

//connect
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'form-details');
//details
$username = $_POST['username'];
$pass = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$degree = $_POST['degree'];
$college = $_POST['college'];
$cyear = $_POST['cyear'];
$passing = $_POST['passing'];
$interests = $_POST['survey'];

$s = "SELECT * FROM logindetails WHERE username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<script language = 'javascript'>
          alert('Username taken') 
          </script>";
    include('register.html');
   }
else{
    $reg = "INSERT INTO logindetails(username , password, firstname, lastname, dob, age, gender, country, state, city, pincode, phoneno, email, degree, college, currentyear, passingyear)
            values ('$username','$pass','$firstname','$lastname','$dob','$age','$gender','$country','$state','$city','$pincode','$phoneno','$email','$degree','$college','$cyear','$passing')";
    mysqli_query($con, $reg); 
    header("location: index.html");
}
?>
