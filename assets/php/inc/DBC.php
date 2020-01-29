<?php

class DBC {
    private $Host;
    private $Name;
    private $Username;
    private $Password;
    private $DSN;
    private $PDO;

    //Create Connection
    public function __construct() {
        $this->Host = 'localhost';
        $this->Name = 'webshop';
        $this->Username = 'project1182';
        $this->Password = 'a9nxXLG!Jib4';

    }

    protected function Connect() {
        $this->DSN = 'mysql:host=' . $this->Host . ';dbname=' . $this->Name;
        $this->PDO = new PDO($this->DSN, $this->Username, $this->Password);

        return $this->PDO;
    }
?>