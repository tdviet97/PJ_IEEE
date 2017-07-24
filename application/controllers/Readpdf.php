<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Readpdf extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }


    public function index()
    {
        $this->load->view('welcome_message');
    }
    
    public function gettext()
    {
        $text = 'err';
        if ($this->input->post('file')) {
            $parser = new \Smalot\PdfParser\Parser();
            $pdf    = $parser->parseFile(site_url('assets/pdf/'.$this->input->post('file')));
 
            $text = $pdf->getText();
            
        }
        echo $text;
    }
}
