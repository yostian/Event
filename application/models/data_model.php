<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class data_model extends CI_Model{
    
    function get_speakers(){
        $query = $this->db->get('speakers');
        return $query->result();
    }
    
    function get_speaker_by_id($id_speakers){
        $this->db->where('id_speakers', $id_speakers);
        $this->db->select("*");
        return $this->db->get('speakers');
    }
    
    function get_partnership(){
        $query = $this->db->get('partnership');
        return $query->result();
    }
}