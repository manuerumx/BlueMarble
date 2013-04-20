<?php
require_once '../config/bm_conn.php';
$cnn = new cnn\Connection();
$sql = "select * from iss_dataset  limit 5;"; //order by RAND()
$cnn->Query($sql);
function parseToXML($htmlStr) 
{ 
    $xmlStr=str_replace('<','&lt;',$htmlStr); 
    $xmlStr=str_replace('>','&gt;',$xmlStr); 
    $xmlStr=str_replace('"','&quot;',$xmlStr); 
    $xmlStr=str_replace("'",'&#39;',$xmlStr); 
    $xmlStr=str_replace("&",'&amp;',$xmlStr); 
    return $xmlStr; 
} 

header("Content-type: text/xml");
// Start XML file, echo parent node
echo '<markers>';
if($cnn->errno == 0 && $cnn->numRows() > 0 ){
    while($cnn->Fetch(false)){
        echo '<marker ';
        echo 'mission="' . parseToXML($cnn->row[0]) . '" ';  
        echo 'lat="' . $cnn->row[1] . '" ';
        echo 'lng="' . $cnn->row[2] . '" ';  
        echo '/>';
    }
}
// End XML file
echo '</markers>';
?>
