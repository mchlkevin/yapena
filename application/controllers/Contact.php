<?php
class Contact extends CI_Controller{

    public function index(){
        $data['judul'] = 'Contact Yapena';
        $data['page'] = 'contact';
        $this->load->view('template/header', $data);
        $this->load->view('contactus_page/index');
        $this->load->view('template/footer');
    }
}
