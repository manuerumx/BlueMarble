<?php
namespace BlueMarble;

define('DB_HOST', 'localhost');
define('DB_DATABASE', 'BlueMarble');
define('DB_USER', 'root');
define('DB_PASS', 'Adivina01');
define('DB_PERSIST', true);

require_once 'mysqli.class.php';
require_once '/inc/bm_user.php';

class config{
    private $lang;
    private $utctime;
    private $sessionid;
    private $userid;
    private $cnnx;
    private $user;    
    /**
     * Initialize the class
     */
    public function __construct() {        
        $this->cnnx = new \cnn\mysqliConn;
        if(!$this->cnnx){
            echo "Not Connected";            
        }else{
            echo "Connected<br/>";
            //$this->cnnx->Query("select * from actor");
            //echo $this->cnnx->numRows();
        }
    }
    /**
     * Destroy the class
     */
    public function __destruct() {        
        if($this->cnnx!=null){
            $this->cnnx->Close();
        }
    }    
    
    public function SayHi(){
        return 'Hello World!';
    }
    
    public function logIn(){}
    public function logOut(){}
    
    public function startSession(){}
    public function endSession(){}
    
    public function setConfig(){}
    public function getConfig(){}      
}
?>