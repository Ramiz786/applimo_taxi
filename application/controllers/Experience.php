<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Experience extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        
    }

    function index()
    {
        $data["extra_js"] = array();
        $data['page_title'] = "Experience - Nasr Polo";
        
        $data['main_content'] = 'pages/experience';
        $this->load->view('main_content', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */