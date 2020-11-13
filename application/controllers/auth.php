<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('regis');
        $this->load->helper('form', 'url');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $this->load->view('login');
    }
    
    public function register(){
        $this->load->view('register');        
    }
    
    public function new_user(){
        $data=$this->regis->save_account();
        echo json_encode($data);
    }
    
    public function check_username(){
        if(!empty($_POST["username"])){
            $username = $this->input->post('username');
            $username = $this->regis->check_username_exist($username);
            if($username>0){
                echo "0";
            } else {
                echo '1';
            }
        }
    }
    
    public function authenticate(){
        $username =  $this->input->post('username');
        $password =  $this->input->post('password');
        
        $check = $this->regis->authenticate($username, $password);
            if($check->num_rows() > 0){
                foreach ($check->result()as $sess){
                    $this->session->set_userdata('masuk', TRUE);
                    $sess_data['username'] = $sess->username;
                    $sess_data['password'] = $sess->password;
                    $sess_data['nama'] = $sess->nama;
                    $sess_data['level'] = $sess->level;
                    $this->session->set_userdata($sess_data);
                    }
                    echo json_encode($sess);
                    }
                    else{
                        $sess = $this->session->set_flashdata('msg','Username Atau Password Salah');
                        echo json_encode($sess);
                        }
    }
}