<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Common_ajax extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->tank_auth->is_logged_in()) {
            redirect('auth/login/');
        }
        $this->load->Model('Remove_records');
    }

}
