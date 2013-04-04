<?php
namespace BlueMarble;
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
        
    }
    /**
     * Destroy the class
     */
    public function __destruct() {        
        
    }    
    
    public function SayHi(){
        return 'Hello World!';
    }
    
    public function logIn(){
               
    }
    public function logOut(){}
    
    public function startSession(){}
    public function endSession(){}
    
    public function setConfig(){}
    public function getConfig(){}      
}
?>