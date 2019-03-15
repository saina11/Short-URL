<?php
class shortener {
    protected $db;
    public function __construct() {
        $this->db = new mysqli('localhost', 'root', 'root', 'website');
    }
    protected function generateCode($num){

    }
    public function makeCode($url){

    }
    public function getUrl($code){

    }
}