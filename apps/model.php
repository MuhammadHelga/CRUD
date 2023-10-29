<?php

class model {
    protected $db = null;

    public function __construct() {
        $this->db = new DB();
        $this->db->connect('mysql','localhost','root', '', 'mvcapp');
    }
}
?>