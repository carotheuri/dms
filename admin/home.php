<?php
ob_start();
session_start();
require_once 'dbconnect.php';
require_once 'query.php';
require_once 'msgcnt.php';
require_once 'volcnt.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
}
// select loggedin users detail
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
  <!DOCTYPE html>
  <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
  <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
  <!--[if !IE]><!-->
  <html lang="en">
  <!--<![endif]-->
  <!-- BEGIN HEAD -->

  <head>
    <meta charset="UTF-8" />
    <title>Welcome -
      <?php echo $userRow['userName']; ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
    <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
  </head>

  <!-- END HEAD -->

  <!-- BEGIN BODY -->

  <body class="padTop53 ">

    <!-- MAIN WRAPPER -->
    <div id="wrap">


      <!-- HEADER SECTION -->
      <div id="top">

        <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
          <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
            <i class="icon-align-justify"></i>
          </a>
          <!-- LOGO SECTION -->
          <header class="navbar-header">

            <a href="index.html" class="navbar-brand">
        DMS
        </a>
          </header>
          <!-- END LOGO SECTION -->
          <ul class="nav navbar-top-links navbar-right">

            <!-- MESSAGES SECTION -->

            <!--END MESSAGES SECTION -->

            <!--TASK SECTION -->

            <!--END TASK SECTION -->


            <!--ADMIN SETTINGS SECTIONS -->

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
              </a>

              <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="icon-user"></i> <?php echo $userRow['userEmail']; ?> </a>
                </li>

                <li class="divider"></li>
                <li><a href="logout.php?logout"><i class="icon-signout"></i> Logout </a>
                </li>
              </ul>

            </li>
            <!--END ADMIN SETTINGS -->
          </ul>

        </nav>

      </div>
      <!-- END HEADER SECTION -->



      <!-- MENU SECTION -->
      <div id="left">
        <div class="media user-media well-small">
          <a class="user-link" href="#">
            <!--<img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />-->
          </a>
          <br />
          <div class="media-body">
            <h5 class="media-heading"> <?php echo $userRow['userName']; ?></h5>
            <ul class="list-unstyled user-info">

              <li>
                <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

              </li>

            </ul>
          </div>
          <br />
        </div>

        <ul id="menu" class="collapse">


          <li class="panel active">
            <a href="index.php">
              <i class="icon-table"></i> Dashboard


            </a>
          </li>

        </ul>
        <ul id="menu" class="collapse">


          <li class="panel active">
            <a href="message.php">
              <i class="icon-envelope icon-2x"></i> Message


            </a>
          </li>

        </ul>

        <ul id="menu" class="collapse">


          <li class="panel active">
            <a href="tickets.php">
              <i class="icon-bolt icon-2x"></i> Tickets


            </a>
          </li>

        </ul>
        <ul id="menu" class="collapse">


          <li class="panel active">
            <a href="tokens.php">
              <i class="icon-filter icon-2x"></i> Tokens


            </a>
          </li>

        </ul>

      </div>
      <!--END MENU SECTION -->



      <!--PAGE CONTENT -->
      <div id="content">

        <div class="inner" style="min-height: 700px;">
          <div class="row">
            <div class="col-lg-12">
              <h1> Admin Dashboard </h1>
            </div>
          </div>
          <hr />
          <!--BLOCK SECTION -->
          <div class="row">
            <div class="col-lg-12">
              <div style="text-align: center;">



                <a class="quick-btn" href="#">
                  <i class="icon-envelope icon-2x"></i>
                  <span>Messages</span>
                  <span class="label label-success"><?php echo $row_cnt ?></span>
                </a>

                <a class="quick-btn" href="#">
                  <i class="icon-bolt icon-2x"></i>
                  <span>Tickets</span>
                  <span class="label label-default"><?php echo $NOR ?></span>
                </a>



              </div>

            </div>

          </div>
          <!--END BLOCK SECTION -->
          <hr />
          <!-- CHART & CHAT  SECTION -->
          <div class="row">
            <div class="col-lg-8">
              <div class="panel panel-default">
                <div class="panel-heading">
                  Map
                </div>


                <div class="demo-container">
                  <!--<div id="placeholderRT" class="demo-placeholder"></div>-->
                  <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d255340.10636571064!2d36.8576965!3d-0.461024!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1473707845170" width="550" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>

                </div>

              </div>

            </div>

            <div class="col-lg-4">

              <div class="chat-panel panel panel-success">
                <div class="panel-heading">
                  <i class="icon-comments"></i> New Events

                </div>

                <div class="panel-body">
                  <ul class="chat">

                    <?php
        
        $conn = new mysqli("localhost","root","password","disastermanagement");
        if ($conn -> connect_error) die ($conn -> connect_error);
        
        
        $query = "SELECT * FROM dms1";
        $result = $conn->query($query);
        if(!$result) die($conn ->error);
        
        $rows = $result -> num_rows;
        
        for ($j=0; $j < $rows ; ++$j) {
            # code...
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            
            echo '<li class="right clearfix">
            <div class="chat-body clearfix">
            <div class="header">
            <strong class="primary-font ">' . $row['place'] . ' </strong>';
            echo '  <small class="pull-right text-muted label label-danger">
            <i class="icon-time"></i> ' . $row['time']  . '</small>';
            echo '</div>
            <br />';
            echo '<p>' . $row['event'] . '</p>';
            echo '</div>
            </li>';
        }
        
        $result -> close();
        $conn -> close();
        ?>
                  </ul>
                </div>
              </div>


            </div>

          </div>


          <!--END CHAT & CHAT SECTION -->








        </div>

      </div>
      <!--END PAGE CONTENT -->

      <!-- RIGHT STRIP  SECTION -->
      <div id="right">


        <div class="well well-small">
          <p> Volunteering Panel</p>
          <hr>
          <ul class="list-unstyled">
            <li>Volunteers &nbsp; : <span><?php echo  $row_cnts ?></span></li>
            <li>Area Groups &nbsp; : <span><?php echo $NOR ?></span></li>
          </ul>
        </div>
        <div class="well well-small">
          <button class="btn btn-block"> Actions </button>
          <button class="btn btn-primary btn-block"> Tickets</button>
          <button class="btn btn-info btn-block"> Tokens </button>

        </div>





      </div>
      <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
      <p>&copy; DMS &nbsp;
        <?php echo date("Y") ?> &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
    <script src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>

    <!-- END PAGE LEVEL SCRIPTS -->


  </body>

  <!-- END BODY -->

  </html>
  <?php ob_end_flush(); ?>