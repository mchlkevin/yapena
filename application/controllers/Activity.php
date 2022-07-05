<?php
class Activity extends CI_Controller{

    public function index(){
        $data['judul'] = 'Aktivitas Yapena';
        $data['page'] = 'activity';
        $this->load->view('template/header', $data);
        $this->load->view('activity_page/index');
        $this->load->view('template/footer');
    }
}
