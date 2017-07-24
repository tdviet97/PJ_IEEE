<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

    public function __construct()
	{
		parent::__construct();
		
		$this->_init();
	}

    public function _init()
    {
        $script = array(
			site_url('jsloader/file/bootstrap-colorpicker.js'),
            site_url('jsloader/file/bootstrap-datepicker.js'),
            site_url('jsloader/file/jquery.min.js'),
            site_url('jsloader/file/excanvas.min.js'),
            site_url('jsloader/file/jquery.ui.custom.js'),
            site_url('jsloader/file/bootstrap.min.js')
        );
		$this->add_script($script, TRUE ,'head');
    }

	public function index()
	{
		$this->render('home', 'full_width');
	}

	


   
    public function test()
    {
        $parser = new \Smalot\PdfParser\Parser();
        $pdf    = $parser->parseFile('document.pdf');
 
        $text = $pdf->getText();
        echo $text;
    }
}
