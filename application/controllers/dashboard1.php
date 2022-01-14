<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard1 extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/container');
        $this->load->view('templates/footer');
    }
}
class petugasDashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('views/perpus/petugasDashboard');
    }
}