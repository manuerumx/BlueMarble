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

?>
