<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jsloader extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('file');
    }
    public function file($file = null){
        if (!$file) {
            header('HTTP/1.1 404 Not Found');
            return;
        }
        $contents = read_file('./assets/js/' . $file);
        if (!$contents) {
            header('HTTP/1.1 404 Not Found');
            return;
        }
        $contents = $this->parse_variables($contents);
        $this->output
            ->set_content_type('text/javascript')
            ->set_output($contents);
    }

    private function parse_variables($text) {
        preg_match_all("/lang+\[@{0,1}[a-zA-Z0-9_]+[\s]*[a-zA-Z0-9_]*\]/",$text, $matches, PREG_PATTERN_ORDER);
        foreach ($matches[0] as $match) {
            $varname = str_replace('lang[', '', $match);
            $varname = str_replace(']', '', $varname);

        $lang_value = lang($varname); // get value from lang file

        $value = ($lang_value ? $lang_value : ('['.$varname.']'));

        if ($value) {
            $text = str_replace($match, $value, $text);
        }
    }
    return $text;
} 

}
