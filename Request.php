<?php
/* 
 * Task Manager
 * J. Femister
 * CSE 297
 * Saleh AlSaleh
 * Added A comment
 */

class Request {
    private $request = array();
    
    public function __construct() {
        if (!empty($_POST)) $this->request = $_POST;
        if (!empty($_GET)) $this->request = $_GET;
        // A constructor
    }
    
    public function get($name) {
        if (array_key_exists($name, $this->request)) return $this->request[$name];
        return '';
    }
    
    public function set($name, $value) {
        $this->request[$name] = $value;
    }
    
    public function getCommand() {
        if (isset($this->request['cmd']))
            return $this->request['cmd'];
        else
            return 'mainform';
    }
    public function getGroup() {
        if (isset($this->request['grp']))
            return $this->request['grp'];
        else
            return 'DisplayList';
    }
}

?>
