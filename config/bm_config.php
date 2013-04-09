<?php
namespace BlueMarble;
abstract class config{
    private $userId;
    private $userName;
    private $userTime;
    private $servTime;
    private $userLang;
    private $lang;
    private $utctime;
    private $sessionid;
    
    protected $myconf = array();
    abstract function getValue($key, $default="");
    abstract function setValue($key, $value);
    abstract function clearConfig();
}
?>