<?php
require_once('inc/bm_session.php');
require_once 'inc/bm_user.php';
require_once ('config/bm_conn.php');

$session = new sess\bm_session("bluemarble");
$me = new user\bm_user();
$cnn = new cnn\Connection();

$cnn->Close();
$idusr = $session->Get("Id");
$usr = $session->Get("Usr");
$lang = $session->Get("Lang");

if($idusr != ""){
    $Msj = "Welcome home " .$usr;
    
}else{
    $Msj = "Error Unknown";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Welcome - The Blue Marble Project</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="Blue Marble NASA SpaceApps Challenge Image"/>
        <meta name="description" content="Small project for SpaceApps Challenge 2013"/>
        <meta name="author" content="Manuel Gonzalez R"/>
        <meta name="robots" content="INDEX,FOLLOW"/>        
        <meta name="viewport" content="width=1350px" />        
        <link rel="shortcut icon" type="image/x-icon" href="media/favicon.ico">
        <link type="text/css" rel="stylesheet" href="css/bluemarble.css"/>
    </head>
    <body>        
        <div id="bluemarble_top_section">
            <div class="bluemarble_container">                
                <div id="blumarble_toolbar">                    
                    <nav class="mnulang">
                        <ul>                            
                            <li>
                                <a href="#">English</a>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Espa&ntilde;ol</a></li>
                                </ul>

                            </li>

                        </ul>
                    </nav>
                </div>
                <div id="bluemarble_header">
                    <div id="bluemarble_logo_area">
                        <h2>The Blue Marble</h2>
                        <p>Look again at that dot. That's here. That's home.</p>
                    </div>               
                    <div id="bluemarble_header_right"></div>
                    <div class="cleaner"></div>                
                    <div id="bluemarble_menu">
                        <ul>
                            <li class="current">
                               <a href="#">Home</a>
                                <p>Start here</p>
                            </li>                                                       
                            <li>
                                <a href="#">News</a>
                                <p>News &amp; Events</p>
                            </li>
                            <li>
                                <a href="#">The Blue</a>
                                <p>Marble</p>
                            </li>
                            <li>
                                <a href="/BlueMarble" target="_parent">Archives</a>
                                <p>Discover our home</p>
                            </li> 
                            <li>
                                <a href="#">Help Us</a>
                                <p>Get involved</p>
                            </li>
                            <li class="last">
                                <a href="login.php">Login</a>
                                <p>Register</p>
                            </li>                            
                        </ul> 
                    </div>
                </div>
            </div><!-- End Of Container  -->        
        </div><!-- End Of Top Section -->   
        <div id="bluemarble_middle_section">  
            <div class="bluemarble_container">
                <div id="bluemarble_content">
                    <div class="bluemarble_3_col left_section">                        
                        <h1>news &amp; events</h1>
                        <h2>Aenean cursmaecenas</h2>                        
                        <p>
                           <?php 
                           
                           $me->setValue("Test", "World");
                           $me->setValue("MgR","Hello");
                           $me->setValue("Lang", "en_US");
                           
                           echo $me->getValue("MgR", "Error");
                           echo "<br/>";
                           echo $me->getValue("Test","Error 2");
                           echo "<br/>";
                           echo $me->getValue("Lang","Error Lang");
                           echo "<br/>";
                           //echo $Msj;
                           ?>
                        </p>                                           
            </div>               
            <div class="bluemarble_3_col middle">
                <h1>header 1</h1>
                <h2>header 2</h2>
                <h3>header 3</h3>
                <h4>header 4</h4>                
                <p>
                 hello world   
                 <br />
                 <a href="#"><strong>View All</strong></a>
                </p>
            </div>

            <div class="bluemarble_3_col right_section">
                <h1>about us</h1>                
                <p>Duis vitae velit sed dui malesuada dignissim. Donec mollis aliquet ligula. Maecenas adipiscing elementum ipsum. Pellentesque vitae magna. Sed nec est. Suspendisse a nibh tristique justo rhoncus volutpat.</p>                   
                <ul class="bluemarble_list">
                    <li><a href="#">Quisque in diam a justo condimentum</a></li>
                    <li><a href="#">Fusce urna tortor, consequat eu stie</a></li>
                    <li><a href="http://www.bluemarble.com" target="_parent">Download Free Website Templates</a></li>
                </ul>               
            </div>
            <div class="cleaner"></div>
        </div>
    </div><!-- End Of Container  -->    
</div><!-- End Of Middle Section  -->   

  <div id="bluemarble_buttom_section">
<div class="bluemarble_container">
<div class="bluemarble_bottom_panel">
            <div class="bluemarble_3_col bottom_left">
                <div class="nasa">
                <a href="http://www.nasa.gov/" target="_blank">
                    <img src="media/page/nasa_logo.png" alt="NASA logo" Title="NASA"/>                
                </a>
                </div>
            </div>               
            <div class="bluemarble_3_col bottom_middle">
                <h2>Useful Links</h2>
                <ul class="bluemarble_list bullet_arrow">
                    <li><a href="#">Cras ornare tris tique</a></li>
                    <li><a href="#">Vivamus vestibulum nulla </a></li>
                    <li><a href="#">Praesent placerat risus</a></li>
                    <li><a href="#">Fusce pellentesque sus</a></li>
                    <li><a href="#">Integer vitae libero</a></li>
                </ul>                   
                <ul class="bluemarble_list bullet_arrow">
                    <li><a href="#">Vestibulum commodo felis</a></li>
                    <li><a href="#">Ut aliquam sollicitudin</a></li>
                    <li><a href="#">Cras iaculis ultricies</a></li>
                    <li><a href="#">Sus risus nulla tique</a></li>
                    <li><a href="http://www.bluemarble.com" target="_blank">Free CSS Templates</a></li>
                </ul>
            </div>               
            <div class="bluemarble_3_col bottom_right">
                <div class="spaceapps">
                <a href="http://spaceappschallenge.org/" target="_blank">
                    <img src="media/page/spaceappschallenge-125x129.png" alt="SpaceAppsChallenge logo" Title="Space Apps Challenge 2013"/>                
                </a>
                </div>
            </div>                
            <div class="cleaner"></div>
        </div>
        <div id="bluemarble_copy"></div>                
    </div><!-- End Of Container  -->   
    </div><!-- End Of Bottom Section  -->           
    </body>
</html>