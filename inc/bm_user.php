<?php
namespace user;
/**
 * Class used for handle User information
 * @package BlueMarble
 * @subpackage inc
 * @version    1.0
 * @author MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @copyright Copyright (R) 2013, MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 *  
 */

/**
 * Class used for handle User information
 * @package BlueMarble
 * @subpackage inc
 * @version    1.0
 * @author MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @copyright Copyright (R) 2013, MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 *  
 */
class bm_user {
    private $userId;
    private $userName;
    private $userTime;
    private $servTime;
    private $userLang;
    /**
     * Initialize the class
     */
    public function __construct() {}
    /**
     * Destruct the class
     */
    public function __destruct(){}
    /**
     * Returns the user ID
     * 
     * @return String
     */
    public function getUser(){
        return $this->userId;
    }
    /**
     * Sets the user ID
     * 
     * @param string $val
     */
    public function setUser($val){
        $this->userId = ($val != "" ? $val : $this->userId);
    }
    /**
     * Returns de Username
     * 
     * @return String
     */
    public function getUsername(){
        return $this->userName;
    }
    /**
     * Sets the username
     * 
     * @param string $val
     */
    public function setUsername($val){
        $this->userName = ($val != "" ? $val : $this->userName);
    }    
    /**
     * Returns the prefered user time zone
     * 
     * @return String
     */
    public function getUserTime(){
        return $this->userTime;
    }
    /**
     * Sets the preferred user time zone
     * 
     * @param string $val
     */
    public function setUserTime($val){
        $this->userTime = ($val != "" ? $val : $this->userTime);
    }
    /**
     * Returns the preferred user language
     * 
     * @return string
     */
    public function getUserLang(){
        return $this->userLang;
    }  
    /**
     * Sets the preferred user language
     * 
     * @param String $val
     */
    public function setUserLang($val){
        $this->userLang = ($val != "" ? $val : $this->userLang);
    }
    /**
     * Returns the actual server time/date converted to UTC
     * 
     * @return String
     */
    public function getServTime(){
        $oldTimezone = date_default_timezone_get();
        date_default_timezone_set("UTC");        
        $this->servTime = date('Y-m-d T H:i:s');
        date_default_timezone_set($oldTimezone);
        return $this->servTime;
    }
}
?>
