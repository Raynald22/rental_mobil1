<?php

class Errors extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_error/header');
        $this->load->view('404_not_found');
        $this->load->view('template_error/footer');
    }
}
