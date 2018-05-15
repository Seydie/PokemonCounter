<?php

class Database
{
    private $_servername = 'localhost';
    private $_username = 'root';
    private $_password = 'root';
    private $_dbname = 'pokefarm';
    public $mysqli;

    function __construct() {
        $mysqli = new mysqli("localhost", "root", "root", "pokefarm");
        $this->mysqli = $mysqli;

        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }
    }

    public function query($query) {
        $result = $this->mysqli->query($query);
    }
}