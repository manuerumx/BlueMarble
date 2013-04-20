<?php
function getUsrData($idusr, $cnn, $sess){
    $sql = "select * from bm_user where idbm_user=" . $idusr;
    $cnn->Query($sql);
    while($cnn->Fetch(true)){
        $cnn->row["idbm_user"];        
    }
}
/**
* Returns the actual server time/date converted to UTC
* 
* @return String
*/
function getServTime(){
    $oldTimezone = date_default_timezone_get();
    date_default_timezone_set("UTC");        
    $this->servTime = date('Y-m-d T H:i:s');
    date_default_timezone_set($oldTimezone);
    return $this->servTime;
}

/**
 * 
 * @param type $msj
 */
function Error_BM($msj){    
?>
<!--Error-->
<div class="alert alert-block alert-error fade in">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">Houston we have a problem!!!</h4>
    <p>
        <?php echo $msj?>
    </p>    
</div>
<!--End Error-->
<?php 
}

function Alert_BM($msj){
?>
<!--Alert-->
<div class="alert fade in">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Atention: </strong> <?php echo $msj; ?>
</div>
<!--Ends Alert-->
<?php
}



function Login(){
?>
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
<?php
}

function Register(){
?>   
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
<?php    
}

function iss_mission($mrf){
    $data = array();
    $data = explode("-",$mrf);
    $mission = $data[0];
    return $mission;
}
function iss_thumb($mrf){
    $data = array();
    $data = explode("-",$mrf);
    $mission = $data[0];
    $base = "http://eol.jsc.nasa.gov/sseop/images/thumb/$mission/$mrf.jpg";
    return $base;
}
function iss_small($mrf){
    $data = array();
    $data = explode("-",$mrf);    
    $mission = $data[0];
    $base = "http://eol.jsc.nasa.gov/sseop/images/ESC/small/$mission/$mrf.jpg";
    return $base;
}
function iss_large($mrf){
    $data = array();
    $data = explode("-",$mrf);
    $mission = $data[0];
    $base = "http://eol.jsc.nasa.gov/sseop/images/ESC/large/$mission/$mrf.jpg";
    return $base;
}
?>

