<?php

    class OrgModel{
        public $conn;

        public function __construct(){
            $this->conn = mysqli_connect('localhost', 'root', '', 'mvc');
        }
    }