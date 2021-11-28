<?php
session_start();
if(!isset($_SESSION['name']))
      header('location: index.html');
      $con = mysqli_connect('localhost','root','');
      mysqli_select_db($con,'form-details');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Source Code</title>
        <link rel="icon" type="image/x-icon" href="logo-black.png">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Monda"> 
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <link rel="stylesheet" href="style_home.css">
    </head>
    <body>
      <header>
        <h1>Source Code</h1>
      </header>
      <div class="lgout"><a class="lg" href="logout.php">logout</a></div>
    <img alt="logo" src="logo-black.png">
        <main>
            <h1> Welcome <?php echo $_SESSION['name']; ?>!!</h1>
            <?php
            $r = $_SESSION['name'];
            $query = "SELECT * FROM logindetails WHERE username = '$r'";
            $result = $con->query($query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "<br><h2>Your Profile</h2>";
            ?>
            <div class="container">
            <div class="name">Name </div> <div class="name1"><?php echo $row["firstname"]. " " . $row["lastname"]?></div>
            <div class="gender">Gender </div> <div class="gender1"><?php echo $row["gender"]?></div>
            <div class="dob">Date of Birth </div> <div class="dob1"><?php echo $row["DOB"]?></div>
            <div class="age">Age </div> <div class="age1"><?php echo $row["age"]?></div>
            <div class="country">Country </div> <div class="country1"><?php echo $row["country"]?></div>
            <div class="state">State </div> <div class="state1"><?php echo $row["state"]?></div>
            <div class="city">City </div> <div class="city1"><?php echo $row["city"]?></div>
            <div class="pincode">Pincode </div> <div class="pincode1"><?php echo $row["pincode"]?></div>
            <div class="phoneno">Phone no. </div> <div class="phoneno1"><?php echo $row["phoneno"]?></div>
            <div class="email">Email </div> <div class="email1"><?php echo $row["email"]?></div>
            <div class="degree">Degree </div> <div class="degree1"><?php echo $row["degree"]?></div>
            <div class="college">College </div> <div class="college1"><?php echo $row["college"]?></div>
            <div class="currentyear">Stdying year </div> <div class="currentyear1"><?php echo $row["currentyear"]?></div>
            <div class="passingyear">Passing year</div> <div class="passingyear1"><?php echo $row["passingyear"]?></div>
            </div>
            <?php
                }
              } else {
                echo "0 results";
              }
              $con->close();
            ?>
        </main>
        <footer id="f">
            <div class="footer_bottom">
            <div class="footer_content">
                <h4>Source Code</h4>
                <ul class="social"> 
                <li><a href="https://github.com/Siddhant-Patil0203" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/siddhant-patil-934113205/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/sidd.0203/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/siddhant.patil.792303/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            
                <p>copyrights &copy;2021 SourceCode</p>
            </div>
        </footer>
    </body>
</html>