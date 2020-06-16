<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Property_type extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('property_type_model');
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
  
    function property_type_listing()
    {
        // if($this->isAdmin() == TRUE)
        // {
        //     $this->loadThis();
        // }
        // else
        // {        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            $this->load->library('pagination');
            $count = $this->property_type_model->property_typeListingCount($searchText);
            //echo "<pre>";print_r($count);die;
			$returns = $this->paginationCompress ( "property_type_listing/", $count, 10 );
			//echo "<pre>";print_r($returns);die;
            $data['servicesRecords'] = $this->property_type_model->property_typeListing($searchText, $returns["page"], $returns["segment"]);
            $this->global['pageTitle'] = APP_NAME.' : Sub services Listing';
            $this->loadViews("property_type_list_view", $this->global, $data, NULL);
        //}
    }
   
    function add_new_property_type()
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
                $property_type_name=$this->security->xss_clean($this->input->post('property_type_name'));
               	$vals = array('property_type_name'=>$property_type_name,'property_type_created_at'=>date('Y-m-d H:i:s'),'property_type_updated_at'=>date('Y-m-d H:i:s'));
                //echo "<pre>";print_r($vals);die;
                $result = $this->property_type_model->add_new_property_type($vals);
                redirect('property_type_listing');
            }
            else
            {
	            $this->load->model('property_type_model');
	            $data['action']='add_new_property_type';
	            $this->global['pageTitle'] =APP_NAME. ' : Add New Item Unit';
	            $this->loadViews("add_new_property_type", $this->global, $data, NULL);
	        }
        }
    }

    function edit_property_type()
    {
            if($this->input->post())
            {
                $value=$this->input->post();
                //echo "<pre>";print_r($value);die;
                $result = $this->property_type_model->edit_property_type($value);
                redirect('property_type_listing');
            }
            else
            {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data['list'] = $this->property_type_model->get_property_type_info($id);
                $data['action']='edit_property_type';
                $this->global['pageTitle'] = APP_NAME.' : Edit Item Unit';
                //echo "<pre>";print_r($data);die;
                $this->loadViews("add_new_property_type", $this->global, $data, NULL);
            }           
    }    
    
    function delete_property_type()
    {
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            $result = $this->property_type_model->delete_property_type($record_num);
            redirect('property_type_listing');
    }    
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = APP_NAME.' : 404 - Page Not Found';
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>