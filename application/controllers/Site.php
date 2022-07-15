<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Site extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("site_model");
        //initialize db
        //load model
        //load helper (optional)
    }

    public function index()
    {
        $this->load->view('site_index');
        // $this->load->view('site/site_clients');
    }

    public function err_404()
    {
        $this->template->load('site/template', 'site/pages/404');
    }       
    public function client()
    {
        $data['h'] = $this->site_model->select_all_clients();
        /* echo "<pre>";
        print_r($data); */
        $this->template->load('site/template', 'site/pages/site_clients', $data);
    }

    public function search_result()
    {
        $data['h'] = $this->site_model->get_search_results();
        $this->template->load('site/template', 'site/pages/site_clients', $data);
    }
    
    public function add_successful()
    {
        $this->template->load('site/template', 'site/pages/add_success');
    }
    public function update_client()
    {
        $recvdID = $this->input->get('id');
        $data['h'] = $this->site_model->get_single_client($recvdID);
        $row = mysqli_fetch_array($data['h'], MYSQLI_ASSOC);
        
    }


    public function add_client()
    {
        // $this->load->view('edit_clients');

        $this->load->library('form_validation');
        $this->load->helper('form');

        $this->form_validation->set_rules("email", "Email", "required|valid_email");
        $this->form_validation->set_rules("name", "Name", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("address", "Address", "required");
        $this->form_validation->set_rules("company", "Company", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("gender", "Gender", "required");
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->template->load('site/template', 'site/pages/add_clients');
        }
        else
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $email = $name = $address = $company = $gender = "";
                $data = array(
                    'email' => $_POST["email"],
                    'name' => $_POST["name"],
                    'address' => $_POST["address"],
                    'company' => $_POST["company"],
                    'gender' => $_POST["gender"]
                );

                $this->site_model->insert_client_data($data);

            }
            $this->add_successful();
        }

        //$this->template->load('site/template', 'site/pages/edit_clients');
    }

}