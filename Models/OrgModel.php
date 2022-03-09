<?php

class OrgModel{
    public $conn;
    
    public function __construct(){
        $this->conn = mysqli_connect( 'localhost', 'root', '', 'mvc' ) or die ( 'Could not connect to server' );
        
    }
    
    public function Addnew( $data ){
        foreach( $data as $value ){
            if( $value === '' ){
                return false;
            }
        }
        extract( $data );
        $password = md5( $password );
        $sql = "INSERT INTO `mvc`.`user` (`ID`, `username`, `pass`, `fullname`) VALUES (NULL, '{$username}', '{$password}', '{$fullname}')";
        
        $query = mysqli_query( $this->conn, $sql );
        if( mysqli_affected_rows( $this->conn ) > 0 ){
            return true;
        }
        return false;
    }
    
    public function is_user_exists( $user_name, $password ){
        $password = md5( $password );
        $sql = "SELECT * FROM `user` WHERE `username` = '{$user_name}' AND `pass` = '{$password}'";
        
        $query = mysqli_query( $this->conn, $sql );
        if( mysqli_num_rows( $query ) > 0 ){
            return true;
        }
        return false;
    }
    
    public function is_username_exists( $user_name ){
        $sql = "SELECT * FROM `user` WHERE `username` = '{$user_name}'";
        $query = mysqli_query( $this->conn, $sql );
        if( mysqli_num_rows( $query ) > 0 ){
            return true;
        }
        return false;
    }
    
}