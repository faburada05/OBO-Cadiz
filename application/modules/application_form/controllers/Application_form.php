<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Application_form extends MY_Controller
    {
        private $data = [];
        protected $session;
        public function __construct()
        {
            parent::__construct(); 
            // $this->session = (object)get_userdata(USER);
            
            // if(is_empty_object($this->session)){
            // 	redirect(base_url().'dashboard/authentication', 'refresh');
            // }
    
            $model_list = [
                'application_form/Application_form_model' => 'aModel',
                'application_form/service/Application_form_service_model' => 'asModel'			
            ];
            $this->load->model($model_list);
        }

        public function index(){
            $this->data['content'] = "application_form_index";
            $this->load->view('layout', $this->data);
        }
    }
?>