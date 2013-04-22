<?php
require_once 'inc/bm_functionality.php';
$img = $_GET['img'];
$pic = iss_small($img);
$mission = iss_mission($img);
$num = rand(9000, 50000);

$rand = rand(0, 100);
//$rand = $rand / 100.0;
        
$psi = number_format($rand, 2);
$pno = number_format(100 - $psi,2);
$psi.="%";
$pno.="%";

function retPerc($num){    
    $rand = rand(0, $num);
    return $rand;
}
$i = 100;
$b = 0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $img;?> - The Blue Marble Project</title>
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
                    <li><a href="about.php">About</a></li>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label">manuerumx</span> <b class="caret"></b></a>
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
        <div class="hero-unit">
            <h3><?php echo $img;?></h3>
            <div class="row-fluid">                
                <div class="span12 pagination-centered">
                    <img src="<?php echo $pic;?>" alt=""/>                    
                </div><!--/span-->
            </div><!--/row-->
            <h3>About</h3> <span class="badge"><?php echo number_format($num,0);?> anwsers</span>
            <div class="row-fluid">                
                <div class="span4">
                    <h4>It is the Earth?</h4>
                    <span class="badge badge-info">Yes <?php echo $psi;?></span>                    
                    <div class="progress progress-info progress-striped">
                        <div class="bar" style="width: <?php echo $psi;?>"></div>
                    </div>
                    <span class="badge badge-success">No <?php echo $pno;?></span>
                    <div class="progress progress-success progress-striped">
                        <div class="bar" style="width: <?php echo $pno;?>"></div>
                    </div>
                </div><!--/span-->
                <?php $b= retPerc($i);?>
                <div class="span4">
                    <h4>Which continent?</h4>    
                    <span class="badge badge-info">America <?php echo number_format($b, 2);?>%</span>
                    <div class="progress progress-info progress-striped">
                        <div class="bar" style="width: <?php echo number_format($b, 2); $i= $i-$b; $b= retPerc($i);?>%"></div>
                    </div>
                    
                    <span class="badge badge-success">Europa <?php echo number_format($b, 2);?>%</span>
                    <div class="progress progress-success progress-striped">
                        <div class="bar" style="width: <?php echo number_format($b, 2); $i= $i-$b; $b= retPerc($i);?>%"></div>
                    </div>
                    
                    <span class="badge badge-warning">Africa <?php echo number_format($b, 2);?>%</span>
                    <div class="progress progress-warning progress-striped">
                        <div class="bar" style="width: <?php echo number_format($b, 2); $i= $i-$b; $b= retPerc($i);?>%"></div>
                    </div>
                    
                    <span class="badge badge-danger2">Asia <?php echo number_format($b, 2);?>%</span>
                    <div class="progress progress-danger progress-striped">
                        <div class="bar" style="width: <?php echo number_format($b, 2); $i= $i-$b; $b= retPerc($i);?>%"></div>
                    </div>
                </div>
                <div class="span4">
                    <h4>&nbsp;</h4>
                    <span class="badge badge-info">Oceania <?php echo number_format($b, 2);?>%</span>                    
                    <div class="progress progress-info">
                        <div class="bar" style="width: <?php echo number_format($b, 2); $i= $i-$b; $b= retPerc($i);?>%"></div>
                    </div>
                    
                    <span class="badge badge-success">Antartica <?php echo number_format($b, 2);?>%</span>                    
                    <div class="progress progress-success">
                        <div class="bar" style="width: <?php echo number_format($b, 2); $i= $i-$b; $b= retPerc($i);?>%"></div>
                    </div>
                    
                    <span class="badge badge-warning">Ocean <?php echo number_format($b, 2);?>%</span>                    
                    <div class="progress progress-warning">
                        <div class="bar" style="width: <?php echo number_format($b, 2); $i= $i-$b; $b= retPerc($i);?>%"></div>
                    </div>
                    
                    <span class="badge badge-danger2">Don't Know <?php echo number_format($b, 2);?>%</span>
                    <div class="progress progress-danger">
                        <div class="bar" style="width: <?php echo number_format($b, 2); $i= $i-$b; $b= retPerc($i);?>%"></div>
                    </div>                    
                </div><!--/span-->
            </div><!--/row-->
            <div class="row-fluid">                
                <div class="span12">            
                    <h4>See any particular feature?</h4>
                </div><!--/span-->
            </div>
            <?php 
                $i = $num;
                $b= retPerc($i);
            ?>
            <div class="row-fluid">
                <div class="span3">
                    <span class="input-block-level label label-info pagination-centered">City <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>
                </div>
                <div class="span3">
                    <span class="input-block-level label label-success pagination-centered">Volcano <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>                    
                </div>    
                <div class="span3">    
                    <span class="input-block-level label label-warning pagination-centered">River <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>                    
                </div>    
                <div class="span3">
                    <span class="input-block-level label label-important pagination-centered">Coast <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>
                </div>
            </div><!--/row-->
            <hr>
            <div class="row-fluid">
                <div class="span3">
                    <span class="input-block-level label label-warning pagination-centered">Satellite <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>                    
                </div>                    
                <div class="span3">                        
                    <span class="input-block-level label label-important pagination-centered">Moon<br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>                    
                </div>                
                <div class="span3">
                    <span class="input-block-level label label-info pagination-centered">Clouds <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>                    
                </div>
                <div class="span3">
                    <span class="input-block-level label label-success pagination-centered">Mountains <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>                    
                </div>          
            </div><!--/row-->
            <hr>
            <div class="row-fluid">                    
                <div class="span4">    
                    <span class="input-block-level label label-success pagination-centered">Shuttle <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>
                </div>             
                <div class="span4">
                    <span class="input-block-level label label-info pagination-centered">ISS <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>                    
                </div>
                <div class="span4">
                    <span class="input-block-level label label-warning pagination-centered">Aurora Borealis <br><?php echo number_format($b, 0); $i= $i-$b; $b= retPerc($i);?></span>                    
                </div>
            </div><!--/row-->
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
  </body>
</html>
