<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

<script>
function showHint(str)
{
if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    return;
} else {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET.html","gethint03d2.html?q="+str,true);
    xmlhttp.send();
}    
}
</script>
  <title>Disaster Management System</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/landing-page.css" rel="stylesheet">
  <!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAgMew92j2GTAtthu96_VT8fFUm_Vj0Jnk"></script>-->
  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>

</script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand topnav" href="#">Disaster Management System</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#about">About</a>
          </li>
          <li>
            <a href="#main">Main</a>
          </li>
          <li>
            <a href="#volunteer">Volunteer</a>
          </li>
          <li>
            <a href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>


  <!-- Header -->
  <a name="about"></a>
  <div class="intro-header">
    <div class="container">



<!--Carousel-->

<br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
     <!-- <li data-target="#myCarousel" data-slide-to="3"></li>-->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/disaster1.jpg" alt="Chaos">
        <div class="carousel-caption">
        <h1><b>ABOUT</b></h1>
        <p>Welcome to Disaster Management System. </p>
      </div>
      </div>

      <div class="item">
        <img src="img/disaster2.jpg" alt="recovery">
         <div class="carousel-caption">
       <h1 style="color:black;"><b>ABOUT</b></h1>
        <p style="color:black;">A system that offers quality and accurate information in event of disasters.</p>
      </div>
      </div>
    
      <div class="item">
        <img src="img/disaster4.jpg" alt="plan">
         <div class="carousel-caption">
        <h1 style="color:black;"><b>ABOUT</b></h1>
        <p style="color:black;">Just identify yourself with details of any disaster and volunteer according to  capability.Thankyou</p>
      </div>
      </div>

      <!--<div class="item">
        <img src="img_flower2.jpg" alt="Flower" width="460" height="345">
      </div>-->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--/End Carousel-->


<!--
      <div class="row">
        <div class="col-lg-12">
          <div class="intro-message">
            <h1>About</h1>
            <h3>Learn about Crowd-sourced Disaster Management System</h3>
            <p></p>
            <hr class="intro-divider">

          </div>
        </div>
      </div>
-->
    </div>
    <!-- /.container -->

  </div>
  <!-- /.intro-header -->

  <!-- Page Content -->

  <a name="main"></a>
  <div class="content-section-a">
   
    
      <div class="container">
        
        <div class="well">
           <!--<canvas id="mapCanvas">-->
             <!-- JavaScript to show google map -->
                  
                  <iframe scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php require  'locations.php'; ?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php require 'locations.php'; ?>&amp;z=12&amp;output=embed" width="1100" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>

<!--<iframe scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php// echo "Dedan+Kimathi+University+Of+Technology"?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php //echo "Dedan+Kimathi+University+Of+Technology"?>&amp;z=12&amp;output=embed" width="1100" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>-->


         <!--</canvas>-->
       </div>

      </div>
      <!-- /.container -->

  </div>
  <!-- /.content-section-a -->



  <a name="volunteer"></a>
  <div class="content-section-b">

    <div class="container">

      <?php
function sanitizeString($var)
{
$var = stripslashes($var);
$var = strip_tags($var);
$var = htmlentities($var);
return $var;
}
    $hn = 'localhost';
    $db = 'disastermanagement';
    $un = 'root';
    $pw = 'password';
    
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    
    if (!$conn) {
     echo "Error: Unable to connect to MySQL." . PHP_EOL;
     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
     exit;
    
    }


   
   // if (isset($_POST['firstName'])) $firstName= filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);//
    if (isset($_POST['firstName'])) $firstName = sanitizeString($_POST['firstName']);
    //if (isset($_POST['lastName'])) $lastName=filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);//
   if (isset($_POST['lastName'])) $lastName = sanitizeString($_POST['lastName']);
    if (isset($_POST['emailaddress'])) $exampleInputEmail=filter_var($_POST['emailaddress'], FILTER_SANITIZE_EMAIL);
        
    if (isset($_POST['telnumber'])) $telephonenumber=filter_var($_POST['telnumber'], FILTER_SANITIZE_NUMBER_INT);
    
    //if (isset($_POST['howtohelp'])) $volunteer=filter_var($_POST['howtohelp'], FILTER_SANITIZE_STRING);//
 if (isset($_POST['howtohelp'])) $volunteer = sanitizeString($_POST['howtohelp']);
        $query= "INSERT INTO `disastermanagement`.`formsdata` (`firstName`, `lastName`, `emailaddress`, `telnumber`, `howtohelp`)
            VALUES ( '".$firstName."', '".$lastName."', '".$exampleInputEmail."', '".$telephonenumber."', '".$volunteer."') ";
            mysqli_query($conn,$query) or die(mysqli_error($conn));
        
      
      
    
    mysqli_close($conn);
    ?>

        <form action="index.php" method="POST">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
          </div>
          <div class="form-group">
            <label for="emailaddress">Email address</label>
            <input type="email" class="form-control" name="emailaddress" id="emailaddress" placeholder="Email" required>
          </div>

          <div class="form-group">
            <label for="telnumber">Telephone number</label>
            <input type="number" class="form-control" name="telnumber"  id="telnumber" placeholder="Telephone number" required>
          </div>
          <div class="form-group">
            <label for="howtohelp">How do you want to volunteer?</label>
            <textarea class="form-control" rows="5" name="howtohelp"  id="howtohelp" placeholder="How do you want to volunteer?" required></textarea>
          </div>
          <br>
          <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-lg" aria-haspopup="true" aria-expanded="false">
              Submit </button>


          </div>
          </br>
        </form>
    </div>
    <!-- /.container -->

  </div>
  <!-- /.content-section-a -->


  <a name="contact"></a>
  <div class="banner">

    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <h2>Contact Us:</h2>
        </div>
        <div class="col-lg-6">
          <ul class="list-inline banner-social-buttons">
            <li>
              <a href="tel:+254714547724" class="btn btn-default btn-lg"><i class="fa fa-phone fa-fw"></i> <span class="network-name">Call</span></a>
            </li>
            <li>
              <a href="mailto:princesstheush2@gmail.com" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-envelope"></i> <span class="network-name">Mail</span></a>
            </li>

          </ul>
        </div>
      </div>

    </div>
    <!--container -->

  </div>
  <!-- /.banner -->

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="list-inline">
            <li>
              <a href="#about">About</a>
            </li>
            <li class="footer-menu-divider">&sdot;</li>
            <li>
              <a href="#main">Main</a>
            </li>
            <li class="footer-menu-divider">&sdot;</li>
            <li>
              <a href="#volunteer">Volunteer</a>
            </li>
            <li class="footer-menu-divider">&sdot;</li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
          <p class="copyright text-muted small">Copyright &copy; Disaster Management System 2016. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>

</html>