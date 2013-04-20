<?php
require_once('inc/bm_session.php');
require_once('inc/bm_functionality.php');
use sess as sessionx;
$session = new sessionx\bm_session("Prueba");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Blue Marble Project</title>
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Archives <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-globe"></i> Search by Mission</a></li>
                            <li><a href="#"><i class="icon-globe"></i> International Space Station</a></li>
                            <li><a href="#"><i class="icon-search"></i> Advanced Search</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">NASA Links</li>
                            <li><a href="http://www.nasa.gov/multimedia/imagegallery/iotd.html" target="_blank"><i class="icon-picture"></i> Picture of the Day</a></li>
                            <li><a href="#"><i class="icon-picture"></i> Another Pictures</a></li>
                        </ul>
                    </li>                    
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
            <div class="row-fluid">
                <div class="span8">
                    <h1>Hello, world!</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
                    <blockquote class="pull-right">
                        <p>
                            Look again at that dot. That's here. That's home.
                        </p>
                        <small>Carl Sagan in <cite title="Pale Blue Dot">Pale Blue Dot</cite></small>
                    </blockquote>
                    <br><br>
                    <p> <?php echo Error_BM('Ops ocurrio un error muy raro');
                    echo Alert_BM('Holly Guacamole, Houston we have a problem.')
                    ?>
                        
                        
                    </p>
                </div><!--/span-->            
                <div class="span4">                  
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <p>
                                    dashadshjdsajkhdashdsakjd
                                    <br>
                                    askljdsasdjkjdska
                                    asdkjdsajkadsj
                                    asddsakldsjalkadspdsajkl
                                </p>
                            </div>
                            <div class="item">
                                <img src="img/test.jpg"/>
                                <div class="carousel-caption">                                    
                                    <small>Nebula</small>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/test2.jpg"/>
                                <div class="carousel-caption">                                    
                                    <small>The first space shuttle</small>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                </div><!--/span-->
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
    
    <!--Login-->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <form class="form-signin">                
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                
            <h2 class="form-signin-heading">Please sign in</h2>
            <input type="text" class="input-block-level" placeholder="Email address" name="email">
            <input type="password" class="input-block-level" placeholder="Password" name="password">
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-primary" type="submit">Sign in</button>
            <button class="btn" type="button" data-dismiss="modal" aria-hidden="true" onClick="$('#mymodal2').modal('show');">Not a member?</button>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        </form>               
    </div>
    <!--End Login-->
    <!--Register-->
    <div id="mymodal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <form class="form-signin">                
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                
            <h2 class="form-signin-heading">Please register</h2>
            <input type="text" class="input-block-level" placeholder="Username" name="username">
            <input type="text" class="input-block-level" placeholder="Email address" name="email">
            <input type="password" class="input-block-level" placeholder="Password">
            <span class="pull-right label label-info"><i class="icon-info-sign icon-white"></i> All fields are required</span>
            <br><br>
            <button class="btn btn-primary" type="submit">Register</button>            
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        </form>
    </div>
    <!--End Register-->   
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel();    
    </script>
  </body>
</html>
