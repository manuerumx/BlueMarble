<?php
namespace BlueMarble;

define('DB_HOST', 'localhost');
define('DB_DATABASE', 'sakila');
define('DB_USER', 'root');
define('DB_PASS', 'mypassword');
define('DB_PERSIST', false);

require_once 'mysqli.class.php';

class config{
    private $lang;
    private $utctime;
    private $sessionid;
    private $userid;
    private $cnnx;
   
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
    
    public function SayHi(){
        return 'Hello World!';
    }
    
    public function logIn(){}
    public function logOut(){}
    
    public function startSession(){}
    public function endSession(){}
    
    public function setConfig(){}
    public function getConfig(){}
    
    
    public function __destruct() {        
        if($this->cnnx!=null){
            $this->cnnx->Close();
        }
    }    
}    
?>