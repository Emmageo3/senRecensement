<?php

class UserController{
    public $model;
    
    public function __construct(){
        $this->model = new UserModel();
        
    }
    
    public function Redirect( $controller = 'User', $action = 'Login' ){
        header( "location: " . BASE_URL . "/{$controller}/{$action}" );
        die;
    }
    
    public function Login(){
        if( $this->IsLoggedIn() ){
            $this->Redirect( 'User', 'LoggedIn' );
        }
        $this->View( 'LoginForm' );
    }
    
    public function ProcessLogin(){
        $username = (isset( $_POST['username'] ) && $_POST['username'] != '' ) ? strip_tags( $_POST['username'] ) : '';
        $password = (isset( $_POST['password'] ) && $_POST['password'] != '' ) ? strip_tags( $_POST['password'] ) : '';
       
        if( $this->model->is_user_exists( $username, $password ) ){
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username']     = $username;
            
            $this->Redirect( 'User', 'LoggedIn' );
        }else{
            $_SESSION['__message'] = 'Erreur !';
            $this->Redirect( 'User', 'Login' );
        }
    }
    
    public function LoggedIn(){
        if( $this->IsLoggedIn() ){
            $this->View( 'LoggedIn' );
        }else{
            $this->Redirect( 'User', 'Login' );
        }
    }
    
    public function IsLoggedIn(){
        if( isset( $_SESSION['is_logged_in'] ) && $_SESSION['is_logged_in'] == true ){
            return true;
        }
        return false;
    }
    
    public function Logout(){
        session_unset();
        session_destroy();
        $this->Redirect( 'User', 'Login' );
    }
    
    public function Register(){
        $this->View( 'RegisterForm' );
    }
    
    public function Registered(){
        $this->View( 'Registered' );
    }
    
    public function ProcessRegister(){
        $data = array(
            'fullname'     => (isset( $_POST['fullname'] ) && $_POST['fullname'] != '' ) ? strip_tags( $_POST['fullname'] ) : '',
            'username'     => (isset( $_POST['username'] ) && $_POST['username'] != '' ) ? strip_tags( $_POST['username'] ) : '',
            'password'     => (isset( $_POST['password'] ) && $_POST['password'] != '' ) ? strip_tags( $_POST['password'] ) : '',
            're-password'  => (isset( $_POST['re-password'] ) && $_POST['re-password'] != '' ) ? strip_tags( $_POST['re-password'] ) : '',
        );
        
        $errors = array();
        foreach( $data as $key=> $value ){
            if( $value === '' ){
                $errors[] =  'Erreur !'. ucfirst( $key ) . '</b>.';
            }
        }
        
        if( $data['password'] != '' && $data['re-password'] && $data['password'] != $data['re-password'] ){
            $errors[] = 'Password và Re-password không khớp.';
        }
        
        if( $this->model->is_username_exists( $data['username'] ) ){
            $errors[] = 'Erreur.';
        }
        
        if( empty( $errors ) ){
            if( $this->model->Addnew( $data ) ){
                $this->Redirect( 'User', 'Registered' );
            }else{
                $_SESSION['__errors'] = 'Erreur!';
                $this->Redirect( 'User', 'Register' );
            }
        }else{
            $_SESSION['__errors'] = $errors;
            
            $this->Redirect( 'User', 'Register' );
        }
        
    }
    
    public function View( $view_name, $data = false ){
        $file_name = BASE_DIR . '/Views/User/' . $view_name . '.php';
        if( $data ){ 
            extract( $data ); 
        }
        if( file_exists( $file_name ) ){
            include( $file_name );
        }else{
            echo "hey!";
            
        }
    }
}