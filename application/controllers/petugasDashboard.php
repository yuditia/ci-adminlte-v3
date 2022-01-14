<?php

defined('BASEPATH') or exit('No direct script access allowed');

class petugasDashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('views/perpus/petugasDashboard');
    }
}