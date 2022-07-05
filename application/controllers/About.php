<?php
class About extends CI_Controller{

    public function index(){
        $data['judul'] = 'About Yapena';
        $data['page'] = 'about';
        $this->load->view('template/header', $data);
        $this->load->view('about_page/index');
        $this->load->view('template/footer');
    }
}
