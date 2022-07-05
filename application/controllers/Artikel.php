<?php
class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
    }


    public function index()
    {
        $data['judul'] = 'Artikel Yapena';
        $data['page'] = 'artikel';
        $dataArtikel = $this->Artikel_model->getData();
        $this->load->view('template/header', $data);
        $this->load->view('artikel_page/index',["dataArtikel" => $dataArtikel]);
        $this->load->view('template/footer');
    }



}
