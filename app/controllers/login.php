<?php
    class login extends DController{
      
        public function __construct(){
            $data=array();
            $message=array();
            
            parent::__construct();
         }
         public function index(){
            $this->login();
            
         }
         public function login(){
           // $this->load->view('header'); 
            Session::init();
            if(Session::get('login')==true){
                header("Location:".BASE_URL."/login/dashboard");

            }
            $this->load->view('cpanel/login');
           // $this->load->view('footer');
        }
        public function dashboard(){
            Session::checkSession();
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/dashboard');
            $this->load->view('cpanel/footer');
        }

        public function authentication_login(){
           $username=$_POST['username'];
           $password=md5($_POST['password']);
           $table_admin='tbl_admin';
           $loginmodel=$this->load->model('loginmodel');

           $count=$loginmodel->login($table_admin,$username,$password);

           if($count==0){
            $message['msg']="user or pass invaild";

            header("Location:".BASE_URL."/login");
           }else
           {
               $result= $loginmodel->getLogin($table_admin,$username,$password);
            //    echo $result[0]['username'];
            //    echo $result[0]['password'];
                Session::init();
                Session::set('login',true);
                Session::get('username',$result[0]['username']);
                Session::get('userid',$result[0]['admin_id']);
                header("Location:".BASE_URL."/login/dashboard");
           }
        }
        public function logout(){
            Session::init();
            //Session::destroy();
            unset($_SESSION['login']);
            header("Location:".BASE_URL."/login");

        }
        
    }

?>