<!DOCTYPE html>
<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}*/
include 'p1.php';
include 'p2.php';
error_reporting(0);
$url = mysqli_real_escape_string($conn, $_POST['img_url']);
$cap = mysqli_real_escape_string($conn, $_POST['img_cap']);
if ($cap!='')
{
$sql = "INSERT INTO pix (url, descrip) VALUES ('$url', '$cap')";
if(mysqli_query($conn, $sql))
{
    //echo "Records added successfully.";
}
}
 else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
<html lang="en">
<head>
  <title>GALLERY PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="./res/stylesheets/boots.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="font-size: 1.5em">Top</button>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="font-size: 1.8em">TheGalleri</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="image_input.html" style="font-size: 1.5em">Image Form</a></li>
      <li><a href="mailto:piali96@gmail.com" style="font-size: 1.5em">Contact Me</a></li>
      </ul>
    </div>
  </div>
</nav>
   <!-- Main jumbotron  -->
    <div class="jumbotron" style="background-color: #1ABC9C">
      <div class="container">
        <h1>GALLERI</h1>
        <h4>Organized image uploading service</h4>
      </div>
    </div>
    
   <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>

   <?php $sql="select URL,descrip from pix";
          $res = mysqli_query($conn, $sql);
              if (mysqli_num_rows($res) > 0) {
              // output data of each row
        while($row = mysqli_fetch_assoc($res)) {?>
    <div class="container">
      <div class="row">

        <div class="col-sm-4"> 
         
        <img src="<?php echo $row["URL"];?>" class="img-thumbnail" max-width="100%" alt="Image">
        <a href="<?php echo $row["URL"];?>"><button type="button" id="lnkbtn">
        <div class="text"><?php echo $row["descrip"];?></div></button></a> 
        </div>
        <?php if($row = mysqli_fetch_assoc($res)){ ?>
        <div class="col-sm-4"> 
        <img src="<?php echo $row["URL"];?>" class="img-thumbnail" max-width="100%" alt="Image">
        <a href="<?php echo $row["URL"];?>"><button type="button" id="lnkbtn">
        <div class="text"><?php echo $row["descrip"];?></div></button></a>
        </div>
        <?php } if($row = mysqli_fetch_assoc($res)){ ?>
        <div class="col-sm-4"> 
        <img src="<?php echo $row["URL"];?>" class="img-thumbnail" max-width="100%" alt="Image">
        <a href="<?php echo $row["URL"];?>"><button type="button" id="lnkbtn">
        <div class="text"><?php echo $row["descrip"];?></div></button></a>
        </div>
        <?php
              }
            }
          } else {
        echo "0 results";
          }
          ?>
      </div>
    </div>
    <br><br>
      <hr>

      <footer>
      <a href="mailto:piali96@gmail.com" style="font-size: 22px">  Made by Piali </a>
      </footer>
    </div> <!-- /container -->
    <script src="chrome-extension://gaojaekjdcfbdfiiggmklaocglaknnkd/js/jquery.min.js"></script>
    <script src="chrome-extension://gaojaekjdcfbdfiiggmklaocglaknnkd/js/bootstrap.min.js"></script>
  </body>
</html>
