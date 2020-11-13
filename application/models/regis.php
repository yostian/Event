<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class regis extends CI_Model{
    
    function save_account(){
          $data = array(
              'username'  => $this->input->post('username'),
              'password'  => $this->input->post('password'),
              'nama' => $this->input->post('nama'),
              'no_hp' => $this->input->post('no_hp'),
              'level' => $this->input->post('level')
            );
        $this->db->insert('account',$data);
        if($this->db->affected_rows() > 0){
                return TRUE;
            } else{
                return FALSE;
            }
    }
    
    function check_username_exist($username){
        $this->db->where('username', $username);
        $query = $this->db->get('account');
        return $query->num_rows();
    }
    
    function authenticate($username, $password){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->db->where($data);
        $query = $this->db->get('account');
        return $query;
    }
}