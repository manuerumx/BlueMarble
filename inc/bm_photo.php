<?php
namespace photo;
/**
 * Class used for handle Photo information
 * @package BlueMarble
 * @subpackage inc
 * @version    1.0
 * @author MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @copyright Copyright (R) 2013, MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 *  
 */
require_once '/config/bm_config.php';
/**
 * Class used for handle Photo information
 * @package BlueMarble
 * @subpackage inc
 * @version    1.0
 * @author MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @copyright Copyright (R) 2013, MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 *  
 */
class bm_photo extends \BlueMarble\config{
    /**
     * Initialize the class
     */
    public function __construct(){}
    /**
     * Destroy the class
     */
    public function __destruct(){
        $this->clearConfig();
    }
    /**
     * Get a stored Value
     * 
     * @param string $key
     * @param string $default
     * @return string
     */
    public function getValue($key, $default = "") {
        if(isset($this->myconf[$key]) && !empty($this->myconf[$key])){
            return $this->myconf[$key];
        }else{
            return $default;
        }
    }
    /**
     * Store a value
     * 
     * @param string $key
     * @param string $value
     */
    public function setValue($key, $value) {
        $this->myconf[$key] = $value;
    }
    /**
     * Clear the stored data
     */
    public function clearConfig() {
        $this->myconf = NULL;
    }
}
?>
