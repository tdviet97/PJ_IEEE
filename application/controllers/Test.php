<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends MY_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */


    public function __construct(Type $var = null)
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->var = $var;
    }


    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function test()
    {
        
        echo site_url('assets/pdf/Document.pdf');
        $parser = new \Smalot\PdfParser\Parser();
        $pdf    = $parser->parseFile(site_url('assets/pdf/test2.pdf'));
 
        $text = $pdf->getText();
        echo $text;
    }
}
