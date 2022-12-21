<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControlPanel extends CI_Controller
{

    public function index()
    {
        // $this->load->view('controlPanel/header');
        // $this->load->view('controlPanel/footer');
        $this->load->view('controlPanel/sidebar');
    }
}
