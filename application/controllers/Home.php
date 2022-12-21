<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('controlPanel/header');
        $this->load->view('controlPanel/footer');
        $this->load->view('navbar/artikel');
    }
    public function event()
    {
        $this->load->view('controlPanel/header');
        $this->load->view('controlPanel/footer');
        $this->load->view('navbar/event');
    }
    public function galeryFoto()
    {
        $this->load->view('controlPanel/header');
        $this->load->view('controlPanel/footer');
        $this->load->view('navbar/galeryFoto');
    }
    public function klienKami()
    {
        $this->load->view('controlPanel/header');
        $this->load->view('controlPanel/footer');
        $this->load->view('navbar/klienKami');
    }
}
