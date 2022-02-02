<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // manggil konstruktor dari CI_Controller
        $this->load->model("Menu_model");
    }

    public function index()
    {
        $data['title'] = 'Contact';

        $this->load->view('templates/front_nav', $data);
        $this->load->view('home/contact', $data);
    }
}
