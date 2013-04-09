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
?>
