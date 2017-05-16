<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{

    /**
     * Inicio constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        
        $var['title']="Proyecto CI";
        $this->load->view('frontend',$var);
    }
}