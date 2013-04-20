<?php
namespace sess;
/**
 * Class used for handle Session information
 * @package BlueMarble
 * @subpackage inc
 * @version    1.0
 * @author MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @copyright Copyright (R) 2013, MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 *  
 */
/**
 * Class used for handle Session information
 * @package BlueMarble
 * @subpackage inc
 * @version    1.0
 * @author MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @copyright Copyright (R) 2013, MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 *  
 */
session_start();
class bm_session {
    private $time = 600;
    private $SessionName = 'Default';
    private $idSession;
    /**
     * Initialize the class
     *
     * @param String $SessionName
     */     
    public function __construct($SessionName){
        $SessionName = ($SessionName == 'Default' ? $this->genRandomString() : $SessionName);
        $this->SessionName = $SessionName;
        $this->idSession = session_id();
    }
    /**
     * Set a key value
     * 
     * @param string $Setting
     * @param Var $Value
     */
    public function Set($Setting, $Value){
        $_SESSION[$this->SessionName][$Setting]= $Value;
    }
    /**
     * Get a key value
     * 
     * @param string $Setting
     * @param var $Default
     * @return var
     */
    public function Get($Setting, $Default=''){
        if(isset($_SESSION[$this->SessionName][$Setting]) && !empty($_SESSION[$this->SessionName][$Setting])){
            return $_SESSION[$this->SessionName][$Setting];
        }else{
            return $Default;
        }
    }
    /**
     * Sets the expire time for the session when user is idle
     * 
     * @param int $time
     */
    public function setTime($time = 0){
        $this->time = ($time > 0 ? $time: $this->time);
    }
    /**
     * Delete the active session
     */
    public function delete(){
        session_destroy();
    }
    
    private function genRandomString() { 
        $len = 20; 
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $temp = ''; 
        for ($p = 0; $p <= $len; $p++) { 
            $temp .= $chars[mt_rand(0, strlen($chars))]; 
        } 
        return $temp; 
    }
}
?>
