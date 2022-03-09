<?php
session_start();

$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '' . dirname( $_SERVER['SCRIPT_NAME'] );
define ( 'BASE_URL', $base_url );
define ( 'BASE_DIR', dirname(__FILE__) );

$controller = "User";
$action     = "Login";
$param      = "";

if( isset( $_GET['controller'] ) && $_GET['controller'] != '' ){
    $controller = $_GET['controller'];
}

if( isset( $_GET['action'] ) && $_GET['action'] != '' ){
    $action = $_GET['action'];
}

if( isset( $_GET['param'] ) && $_GET['param'] != '' ){
    $param = $_GET['param'];
}

$controller_name = $controller ."Controller";

$controller_file = "Controllers/{$controller}Controller.php";
$model_file      = "Models/{$controller}Model.php";

if( file_exists( $model_file ) ){
    require_once( $model_file );
}

if( file_exists( $controller_file ) ){
    require_once( $controller_file );
    
    $object = new $controller_name();
    
    if( $param != '' ){
        $object->$action( $param );
    }else{
        $object->$action( );
    }
    
}



