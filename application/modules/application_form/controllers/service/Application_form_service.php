<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Application_service extends MY_Controller
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
                'application/Application_model' => 'aModel',
                'application/service/Application_service_model' => 'asModel'			
            ];
            $this->load->model($model_list);
        }           
    }
?>