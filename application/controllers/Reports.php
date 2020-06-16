<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Reports extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('reports_model');
        $this->isLoggedIn();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
    }    
  
    public function index()
    {
        $this->global['pageTitle'] = APP_NAME.' : Dashboard';
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }    
  
    function Reports_listing()
    {      
        $this->global['pageTitle'] = APP_NAME.' : Reports Listing';
        $data['action']='Reports_listing';
        $this->loadViews("reports_list_view", $this->global, $data, NULL);
    }

    function expence_report()
    {
        $this->global['pageTitle'] = APP_NAME.' : Expence Reports';
        if($this->input->post())
        {
            $val=$this->input->post();
            $this->load->library('pagination');
            $data['servicesRecords'] = $this->reports_model->get_expence_report_data($val);
            $this->loadViews("expence_report_list_view", $this->global, $data, NULL);
        }
        else
        {
            $data['action']='expence_report';
            $data['buildings'] = $this->reports_model->get_buildings();
            $this->loadViews("expence_report_form_view", $this->global, $data, NULL);
        }
    }   
}
?>