<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('data_model');
    }
    
    public function index(){
        $id_speakers = 1;
        $data['data_speaker'] = $this->data_model->get_speaker_by_id($id_speakers);
        $this->load->view('home_view', $data);
    }
    
    public function speakers_detail(){
        $data = $this->data_model->get_speakers();
        echo json_encode($data);
    }
    
    public function get_speaker_details($id_speakers){
        $data['data_speaker'] = $this->data_model->get_speaker_by_id($id_speakers);
        echo json_encode($data['data_speaker']->result_array());
    }
    
    public function partnership(){
        $data = $this->data_model->get_partnership();
        echo json_encode($data);
    }
}