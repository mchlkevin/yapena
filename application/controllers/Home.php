<?php
class Home extends CI_Controller{

    public function index(){
        $data['judul'] = 'Yapena Home Page';
        $data['page'] = 'home';
        $this->load->model('Artikel_model');
        $dataArtikel = $this->Artikel_model->getData();
        $this->load->view('template/header', $data);
        $this->load->view('home_page/index', ["dataArtikel" => $dataArtikel]);
        $this->load->view('template/footer');
    }
}
