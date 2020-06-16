<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Property_unit_size extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('property_unit_size_model');
        $this->isLoggedIn();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
    }    
  
    public function index()
    {
        $this->global['pageTitle'] = APP_NAME.': Dashboard';
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }    
  
    function property_unit_size_listing()
    {   
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');
        $count = $this->property_unit_size_model->property_unit_sizeListingCount($searchText);
        //echo "<pre>";print_r($count);die;
		$returns = $this->paginationCompress ( "property_unit_size_listing/", $count, 10 );
		//echo "<pre>";print_r($returns);die;
        $data['servicesRecords'] = $this->property_unit_size_model->property_unit_sizeListing($searchText, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = APP_NAME.' : Unit Size Listing';
        $this->loadViews("property_unit_size_list_view", $this->global, $data, NULL);
    }
   
    function add_new_property_unit_size()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
        	if($this->input->post())
            {
                $value=$this->input->post();
                $property_unit_size_name=$this->security->xss_clean($this->input->post('property_unit_size_name'));
               	$vals = array('property_unit_size_name'=>$property_unit_size_name,'property_unit_size_created_at'=>date('Y-m-d H:i:s'),'property_unit_size_updated_at'=>date('Y-m-d H:i:s'));
                $result = $this->property_unit_size_model->add_new_property_unit_size($vals);
                redirect('property_unit_size_listing');
            }
            else
            {
	            $this->load->model('property_unit_size_model');
	            $data['action']='add_new_property_unit_size';
	            $this->global['pageTitle'] =APP_NAME. ' : Add New Unit Size';
	            $this->loadViews("add_new_property_unit_size", $this->global, $data, NULL);
	        }
        }
    }

    function edit_property_unit_size()
    {
        if($this->input->post())
        {
            $value=$this->input->post();
            $result = $this->property_unit_size_model->edit_property_unit_size($value);
            redirect('property_unit_size_listing');
        }
        else
        {
            $last = $this->uri->total_segments();
            $id = $this->uri->segment($last);
            $data['list'] = $this->property_unit_size_model->get_property_unit_size_info($id);
            $data['action']='edit_property_unit_size';
            $this->global['pageTitle'] = APP_NAME.' : Edit Unit Size';
            $this->loadViews("add_new_property_unit_size", $this->global, $data, NULL);
        }           
    }    
    
    function delete_property_unit_size()
    {
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            $result = $this->property_unit_size_model->delete_property_unit_size($record_num);
            redirect('property_unit_size_listing');
    }
}
?>