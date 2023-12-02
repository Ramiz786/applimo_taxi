<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Book_taxi extends CI_Controller
{
    public $table_name = TBL_BOOK_TAXI_REQ;
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data["extra_js"] = array();
        $data['page_title'] = "American Platinum Limousine Taxy";
        $data['type'] = $this->input->get('type');
        $data['main_content'] = 'pages/book_taxi';
        $this->load->view('main_content', $data);
    }
    function submit_form()
    {
        if ($this->input->post()) {

            $response = array("status" => "error", "heading" => "Unknown Error", "message" => "There was an unknown error that occurred. You will need to refresh the page to continue working.");
            $error_element = error_elements();
            $this->form_validation
                ->set_rules('full_name', 'Full Name', 'required')
                ->set_rules('mobile', 'Mobile No', 'required')
                ->set_rules('email', 'Email', 'required')
                ->set_rules('package_type', 'Package Type', 'required')
                ->set_rules('passengers', 'No Of Passengers', 'required')
                ->set_rules('start_dest', 'Start Destination', 'required')
                ->set_rules('end_dest', 'End Destination', 'required')
                ->set_rules('ride_date', 'Ride Date', 'required')
                ->set_rules('ride_time', 'Ride Time', 'required')
                ->set_error_delimiters($error_element[0], $error_element[1]);

            if ($this->form_validation->run()) {
                $full_name = $this->input->post('full_name');
                $mobile = $this->input->post('mobile');
                $email = $this->input->post('email');
                $package_type = $this->input->post('package_type');
                $passengers = $this->input->post('passengers');
                $start_dest = $this->input->post('start_dest');
                $end_dest = $this->input->post('end_dest');
                $ride_date = $this->input->post('ride_date');
                $ride_time = $this->input->post('ride_time');

                $post_data = array(
                    "Name" => $full_name,
                    "Mobile" => $mobile,
                    "Email" => $email,
                    "Type" => $package_type,
                    "Persons" => $passengers,
                    "StartDestination" => $start_dest,
                    "EndDestinaion" => $end_dest,
                    "Date" => ($ride_date != "") ? date("Y-m-d", strtotime($ride_date)) : '',
                    "Time" => ($ride_time != "") ? date("H:i", strtotime($ride_time)) : '',
                );
                $type = 'book_taxi';
                $email = 'info@aplimo.co';
                $email_data['post_data'] = $post_data;
                $this->_send_email($type,$subject ='Booking Request', $email, $email_data);
                $this->_send_email($type,$subject ='Booking Request', 'ramizmg@gmail.com', $email_data);
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