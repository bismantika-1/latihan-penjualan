<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }
    
    function index()
    {
        $data['judul']="Toko Penjual";
        $this->load->view('templates/header',$data);
        $this->load->view('barang/index');
        $this->load->view('templates/footer');
    }


}