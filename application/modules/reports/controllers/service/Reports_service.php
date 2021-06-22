<?php
    class Reports_service extends MY_Controller
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
                'reports/Reports_model' => 'rModel',
                'reports/service/Reports_service_model' => 'rsModel'			
            ];
            $this->load->model($model_list);
        }
    }
?>