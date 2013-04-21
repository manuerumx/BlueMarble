<?php
require_once 'inc/bm_functionality.php';
set_time_limit(200);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Picture - The Blue Marble Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Blue Marble NASA SpaceApps Challenge Image">
    <meta name="description" content="Small project for SpaceApps Challenge 2013">
    <meta name="author" content="Manuel Gonzalez R">
    <meta name="robots" content="INDEX,FOLLOW">    
    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    
    <!-- Fav and touch icons -->    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.ico">    
  </head>
  <body>
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">
      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <img src="img/bluemarble.png" alt="BlueMarble" style="position: absolute;"/>
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">The Blue Marble Project</a>
            <div class="nav-collapse collapse">                
                <ul class="nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Archives <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-globe"></i> Search by Mission</a></li>
                            <li><a href="#"><i class="icon-globe"></i> International Space Station</a></li>
                            <li><a href="#"><i class="icon-search"></i> Advanced Search</a></li>                            
                            <li class="divider"></li>
                            <li class="nav-header">NASA Links</li>
                            <li><a href="http://www.nasa.gov/multimedia/imagegallery/iotd.html" target="_blank"><i class="icon-picture"></i> Picture of the Day</a></li>                            
                        </ul>
                    </li>
                    <li><a href="random.php"><i class="icon-picture icon-white"></i> Random</a></li>
                </ul>    
                <!-- User options -->                                  
                <ul class="nav pull-right">
                    <li class=""><a href="#myModal" role="button"  data-toggle="modal">Login</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="label">manuerumx</span> 
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">User</li>
                            <li><a href="#"><i class="icon-edit"></i> Settings </a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-off"></i> Log Out </a></li>
                        </ul>
                    </li>
                </ul>
                
                <!-- End Users options -->
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
      <!-- Begin page content -->
      <div class="container">
          <h3>Gallery</h3>
            <?php 
            require_once 'config/bm_conn.php';
            $cnn = new \cnn\Connection();
            $sql = "SELECT  i.*
            FROM    (
                    SELECT  @cnt := COUNT(*) + 1,
                            @lim := 36
                    FROM    iss_dataset
                    ) vars
            STRAIGHT_JOIN
                    (
                    SELECT  r.*,
                            @lim := @lim - 1
                    FROM    iss_dataset r
                    WHERE   (@cnt := @cnt - 1)
                            AND RAND() < @lim / @cnt
                    ) i;";
            $cnn->Query($sql);
            $i=1;
            while($cnn->Fetch(false)){
                $img = $cnn->row[0];
                $pic = iss_thumb($img);
                $mission = iss_mission($img);
                if($i==1){
                ?>
                <div class="row-fluid">
                <?php
                }
                ?>
                <div class="span2 well well-small ">                    
                    <a href="random.php?img=<?php echo $img;?>">                        
                    <img class="img-rounded" src="<?php echo $pic;?>"/>
                    <span class="label label-info">
                        Mission: <?php echo $mission;?>
                    </span>
                    </a>
                </div><!--/span-->
                <?php                
                if($i % 6 == 0){
                    echo "<!-- $i -->"; 
                    $i = 0;
                ?>
                    </div><br><!--/row--> 
                <?php
                }
                $i++;
            }
            ?>            
            <div class="pagination pull-right">
                <ul>
                  <li class="disabled"><a href="#">Prev</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">Next</a></li>
                </ul>
            </div>
            
            
        
      </div>     
            <div id="push"></div>
    </div>

    <div id="footer">        
      <div class="container">
          <div class="row-fluid">
            <div class="span3 pull-left">
                <a href="http://www.nasa.gov/" target="_blank">
                <img src="img/nasa_logo.png" alt="NASA" width="66px" height="55px" style="margin-top:5px;" title="NASA"/>
                </a>
            </div>
            <div class="span1">
                &nbsp;
            </div>
            <div class="span4">
                <p class="muted credit text-center small">
                    Copyright &copy; 2013 MGR<br />                  
                    <a href="http://en.wikipedia.org/wiki/MIT_License">MIT License</a>
                </p>
            </div>
            <div class="span1">
                &nbsp;
            </div>
            <div class="span3">
                <a href="http://www.spaceappschallenge.org/" target="_blank">
                <img src="img/spaceappschallenge.png" alt="spaceappschallenge" width="53px" height="55px" style="margin-top:5px;" class="pull-right" title="Space Apps Challenge 2013"/>
                </a>
            </div>
          </div>
      </div>
    </div>    
    <?php 
    echo Login();
    echo Register();
    ?>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>    
    //$("#example").popover("show");    
    </script>
  </body>
</html>
