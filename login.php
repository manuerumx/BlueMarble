<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Login - The Blue Marble Project</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="Blue Marble NASA SpaceApps Challenge Image"/>
        <meta name="description" content="Small project for SpaceApps Challenge 2013"/>
        <meta name="author" content="Manuel Gonzalez R"/>
        <meta name="robots" content="INDEX,FOLLOW"/>        
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
                            <li>
                               <a href="index.php">Home</a>
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
                            <li class="last current">
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
                    <div class="bluemarble_3_col double_section">
                        <h2>Register</h2>
                        <p>Not a member already?</p>
                        <h3>Why should you register</h3>
                        <p>
                            <ol>
                                <li>its fun</li>
                                <li>See amazing pictures from our home.</li>
                            </ol>                            
                        </p>
                        <p>
                            <?php
                            require_once 'config/bm_config.php';
                            use BlueMarble as BM;
                            $x = new BM\config();
                            echo "<br/>";
                            echo $x->SayHi();
                            ?>
                        </p>
                    </div>                    
                    <div class="bluemarble_3_col right_section">
                        <div class="boxshade">
                            <h2 class="textshadow">Login</h2>
                            <form>                                                                                    
                            <table width="100%">
                                <tr>
                                    <td><label for="user">Username</label></td>
                                    <td><input type="username" name="user" value="" size="25"/></td>
                                </tr>
                                <tr>
                                    <td><label for="pass">Password</label></td>
                                    <td><input type="password" name="pass" value="" size="25"/></td>
                                </tr>
                                <tr><td colspan="2">&nbsp;</td></tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <button type="submit" value="Send">Begin</button>
                                        <button type="reset" value="reset">Reset</button>
                                    </td>
                                </tr>
                            </table>
                            <br/>
                            </form>
                        </div>
                        <br/>
                        <div class="boxshade">
                            <h2 class="textshadow">Register</h2>
                            <form>
                                <table width="100%">
                                    <tr>
                                        <td><label for="username">Username</label></td>
                                        <td><input type="text" name="username" value="" size="25"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email">Email</label></td>
                                        <td><input type="text" name="email" value="" size="25"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="password">Password</label></td>
                                        <td><input type="password" name="password" value="" size="25"/></td>
                                    </tr>
                                    <tr><td colspan="2">&nbsp;</td></tr>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <button type="submit" value="Send">Begin</button>
                                            <button type="reset" value="reset">Reset</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
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
                <a href="http://nasa.gov/" target="_blank">
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