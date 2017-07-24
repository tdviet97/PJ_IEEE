<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home page
 */
class Compare extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->_init();
    }

    public function _init()
    {
        $script = array(
            site_url('jsloader/file/jquery.min.js'),
            site_url('jsloader/file/excanvas.min.js'),
            site_url('jsloader/file/jquery.ui.custom.js'),
            
            site_url('jsloader/file/codemirror.js'),
            site_url('jsloader/file/mergely.js'),
            site_url('jsloader/file/compare-head.js'),
            site_url('jsloader/file/bootstrap.min.js')
        );
        $this->add_script($script, true, 'head');


        $script1 = array(
            site_url('jsloader/file/ajax-form-1.js'),
            site_url('jsloader/file/ajax-form-2.js')
        );
        $this->add_script($script1, true, 'foot');
    }

    public function index()
    {
        $this->render('compare', 'full_width');
    }

    


   
    public function test()
    {
        $parser = new \Smalot\PdfParser\Parser();
        $pdf    = $parser->parseFile('document.pdf');
 
        $text = $pdf->getText();
        echo $text;
    }

    public function getfile()
    {
        if ($this->mMethod === 'POST') {

        }
            if(!empty($_FILES['icon']['name'])){
            	$upload = $this->_do_icon_upload('icon', $_FILES['icon']['name']);
				if($upload['error'])
				{
					$this->system_message->set_error($upload['messages']);
					
				}	
				$upload_path = $upload['path'];
			}

        $this->render('compare', 'full_width');
    }

    public function getText()
    {
        
    }

    private function _do_icon_upload($fieldName, $name)
    {
    		$result = array('error'=>FALSE, 'data'=>array(), 'messages'=>'', 'path'=>'');

    		$path = './assets/pdf/';
    		if(file_exists($path) || mkdir($path, 0777, true))
    		{
	            $config['upload_path']          = $path;
	            $config['allowed_types']        = 'gif|jpg|png|pdf';
	            $config['max_size']             = 10240;
	            $config['file_name']			= $name;
	            $config['overwrite']			= TRUE;

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload($fieldName))
	            {
	            		$result['error'] = TRUE;
	                    $result['messages'] = $this->upload->display_errors();
	            }
	            else
	            {
	                    $result['data'] = $this->upload->data();
	                    $result['path'] = mb_substr($path, 2).$result['data']['file_name'];
	            }
        	} else {
        		$result['error'] = TRUE;
        		$result['messages'] = lang('profile_upload_img_fail');
        	}

            return $result;
    }
}
