<?php
namespace cnn;
/**
 * Class used for handle MySQL connections
 * @package BlueMarble
 * @subpackage config
 * @version    1.0
 * @author MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @copyright Copyright (R) 2013, MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 *  
 */
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'BlueMarble');
define('DB_USER', 'root');
define('DB_PASS', 'GuessWho');
define('DB_PERSIST', true);
/**
 * Class used for handle MySQL connections
 * @package BlueMarble
 * @subpackage config
 * @version    1.0
 * @author MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @copyright Copyright (R) 2013, MANUEL GONZALEZ RIVERA <mgrivera@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 *  
 */
class Connection{
    /**
     * The active connection
     *
     * @var object Connection Object 
     */
    protected $conn;
    /**
     * The active recordset
     *
     * @var object Active Recordset
     */
    public $rs;
    /**
     * Associative array with the current row
     *
     * @var array Current Row
     * @see $rs
     */
    public $row = array();    
    /**
     * Active/Last Sql Query
     *
     * @var string SQL Query
     */
    public $sql;
    /**
     * Database host
     *
     * @var string Database Host 
     */
    protected $host;
    /**
     * Database name
     *
     * @var string Database name
     */
    protected $database;
    /**
     * Database username
     *
     * @var string Database User
     */
    protected $user;
    /**
     * Database password
     *
     * @var string Database Password
     */
    protected $password;
    /**
     * Defines if the connection is persistent
     * 
     * @var string Connection Option
     */
    protected $persistant;
    
    public $errno = 0;
    public $errdesc = "";
    
    /**
     * Initialize the class
     * 
     * @param $host string
     * @param $database string
     * @param $user string
     * @param $password string
     * @param $persistant boolean
     */
    public function __construct($host =DB_HOST, $database = DB_DATABASE, $user = DB_USER, $password = DB_PASS, $persistant = DB_PERSIST) {        
        $this->host = $host;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
        $this->persistant = $persistant;
        $this->Conn();        
    }
    /**
     * Open the connection
     * 
     */
    protected function Conn() {        
        try{
            if($this->persistant == true){
                $this->conn = mysqli_connect('p:'.$this->host, $this->user, $this->password, $this->database);
            }else{
                $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);        
            }
            if(!$this->conn){                     
                //$this->HtmlC->display_error('mysqliConn:Conn()', mysqli_connect_error());
                echo "Connection fail";
            }
        }catch(Exception $e){
            echo $e->getMessage();
           //$this->HtmlC->display_error('mysqliConn:Conn()',$e->getMessage());
        }
    }
    /**
     * Get the connection info
     * 
     * return string
     */
    public function ConnSummary() {
        return $this->user.'@'.$this->database.':'.$this->host;  
    }
    /**
     * Returns an associative array with the following record
     * 
     * @param boolean $assoc
     * @return mixed
     */
    public function Fetch($assoc = true){
        if($assoc == true){
            $this->row = mysqli_fetch_assoc($this->rs);
        }else{
            $this->row = mysqli_fetch_array($this->rs);
        }
        return is_array($this->row);
    }
    /**
    * Try running a SQL query. If the parameter is empty, it takes the variable $this->sql
    *
    * @param string $sql Sql Query
    */
    public function Query($sql = '') {
        if(is_resource($this->rs)) {
            mysqli_free_result($this->rs);
        }
        $this->sql = ($sql=="" ? $this->sql : $sql);
        $this->rs = mysqli_query($this->conn,$this->sql);
        if(mysqli_error($this->conn)){
            $this->errno = mysqli_errno($this->conn);
            $this->errdesc = mysqli_error($this->conn);
        }
    }
    /**
    * Move the pointer to the index consultation indicated
    *
    * @param int $num
    * @return boolean
    */
    public function Seek($num = 0){
        if(!empty($this->rs)) {
            $this->row = mysqli_data_seek($this->rs, $num);            
            return true;
        }
        return false;
    }    
    /**
    * Returns the number of rows affected by a query update, insert or delete
    *
    * @return int
    */
    public function affectedRows() {
        if(!empty($this->rs)){
            return mysqli_affected_rows($this->conn);        
        }else{
            return 0;
        }
    }
    /**
    * Return the last id inserted
    *
    * @return int
    */
    public function getInsertedId() {
        if(!empty($this->rs)){
            return mysqli_insert_id($this->conn);
        }else{
            return 0;
        }
    }
    /**
    * Returns the number of columns in the query result
    *
    * @return int
    * @throws ExceptionRecorset
    */
    public function numColumns() {
        if(!empty($this->rs)){
            return mysqli_num_fields($this->rs);        
        }else{
            return 0;
        }            
    }
    /**
    * Returns the number of rows for a SELECT query resolved
    *
    * @return int    
    */
    public function numRows() {
        if(!empty($this->rs)){
            return mysqli_num_rows($this->rs);        
        }else{
            return 0;
        }
    }
    /**
     * Destroy
     */
    public function __destruct() {
        $this->Close();
    }
    /**
     * Close the connection
     */
    public function Close() {                
        $type = (is_resource($this->conn) ? get_resource_type($this->conn) : "none");
        if(strstr($type,"mysqli")){
            mysqli_close($this->conn);                        
        }else{
            if($type=='none'){
                //no active connection
            }elseif($type=='Unknown'){
                //unknown resource type 
            }
        }        
    }    
}
?>