<?php
require_once 'inc/bm_session.php';
require_once 'config/bm_conn.php';
//require_once 'config/bm_config.php';
//require_once 'inc/bm_user.php';
$session = new sess\bm_session("bluemarble");
$type = $_POST['bmtype'];
$session->Set("type", $type);
if($type=='log'){
    $usr = $_POST['logusr'];
    $psw = $_POST['logpsw'];
    if(bm_login($usr, $psw)){
        $session->Set("Login", "true");
        header('Location: blue.php');
    }else{
        $session->Set("Login", "false");
        header('Location: login.php');
    }
}elseif($type=='reg'){    
    $usr = $_POST['regusr'];
    $psw = $_POST['regpsw'];
    $eml = $_POST['regeml'];
    if(bm_register($usr, $psw, $eml)){
        $session->Set("Login", "true");
        header('Location: profile.php');
    }else{
        $session->Set("Login", "false");
        header('Location: login.php');
    }
}else{    
    $session->delete();
    header( 'Location: index.php' ) ;
    exit();
}

function bm_login($usr, $psw){
    $cnn = new cnn\Connection();
    try{
        if(!$cnn){            
            return false;
        }else{                
            $sql = "select * from bm_user where bm_username = '$usr' and bm_pass = '$psw' ";            
            $cnn->Query($sql);
            if($cnn->errno == 0 && $cnn->numRows() > 0 ){                
                while($cnn->Fetch(false)){
                    echo "here <br/>";                   
                    echo $cnn->row[2];
                }
                return true;
            }elseif( $cnn->errno ==0 && $cnn->numRows()==0){
                echo "user/pass not found";
            }else{  
                echo "Error: " .  $cnn->errdesc;
                return false;
            }
            $cnn->Close();
        }        
    }Catch(Exception $ex) {
        echo $ex->getMessage();
    }
}

function bm_register($usr, $psw, $eml){
    $cnn = new cnn\Connection();
    try{        
        if(!$cnn){
            return false;
        }else{
            $sql = "insert into bm_user (bm_username, bm_email, bm_pass, bm_lastlog) ";
            $sql.= " values ('$usr', '$eml', '$psw', CURRENT_TIMESTAMP)";            
            $cnn->Query($sql);
            if($cnn->affectedRows() > 0 ){                
                $idusr = $cnn->getInsertedId();                
                return true;                
            }else{
                if($cnn->errno==1062){
                    echo "User already exist";                    
                }                
                return false;
            }
            $cnn->Close();
        }
    }Catch(Exception $ex){        
        echo $ex->getMessage();
    }
}
?>
