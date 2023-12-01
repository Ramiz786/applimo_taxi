<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_us extends CI_Controller
{
    public $table_name = TBL_CONTACT_US;

    function __construct()
    {
        parent::__construct();

        
    }

    function index()
    {
        $data["extra_js"] = array();
        $data['page_title'] = "Contact Us - American Platinum Limousine";
        
        $data['main_content'] = 'pages/contact_us';
        $this->load->view('main_content', $data);
    }

    function submit_form()
    {
        if ($this->input->post()) {

            $response = array("status" => "error", "heading" => "Unknown Error", "message" => "There was an unknown error that occurred. You will need to refresh the page to continue working.");
            $error_element = error_elements();
            $this->form_validation
                ->set_rules('firstname', 'First Name', 'required')
                ->set_rules('lastname', 'Last Name', 'required')
                ->set_rules('email', 'Email', 'required')
                ->set_rules('phone', 'Mobile No', 'required')
                ->set_rules('message', 'Message', 'required')
                ->set_error_delimiters($error_element[0], $error_element[1]);

            if ($this->form_validation->run()) {
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $message = $this->input->post('message');
                $post_data = array(
                    "FirstName" => $firstname,
                    "LastName" => $lastname,
                    "Email" => $email,
                    "Mobile" => $phone,
                    "Message" => $message,
                );
                $type = 'contact';
                $email = 'info@aplimo.co';
                $email_data['post_data'] = $post_data;
                $this->_send_email($type,$subject ='Contact Us', $email, $email_data);
                $this->_send_email($type,$subject ='Contact Us', 'ramizmg@gmail.com', $email_data);
                if ($this->Common->add_info($this->table_name, $post_data)) :
                    $response = array("status" => "ok", "heading" => "Add successfully...", "message" => "Details added successfully.");
                else :
                    $response = array("status" => "error", "heading" => "Not Added successfully...", "message" => "Details not added successfully.");
                endif;
            } else {
                $errors = $this->form_validation->error_array();
                $response['error'] = $errors;
            }
            echo json_encode($response);
            die;
        }

       
    }

    function _send_email($type,$subject, $email, $data)
    {
        $this->load->library('email');
        $config = array(
            'protocol' => 'sendmail',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE

        );
        $this->email->initialize($config);
        $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
        $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
        $this->email->to($email);
        $this->email->set_mailtype("html");
        $this->email->subject($subject);
        $this->email->message($this->load->view('email/' . $type . '-html', $data, TRUE));
        $this->email->set_alt_message($this->load->view('email/' . $type . '-txt', $data, TRUE));
        $this->email->send();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */