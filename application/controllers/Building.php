<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Building extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('building_model');
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
  
    function building_listing()
    {      
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');
        $count = $this->building_model->buildingListingCount($searchText);
        //echo "<pre>";print_r($count);die;
		$returns = $this->paginationCompress ( "building_listing/", $count, 10 );
		//echo "<pre>";print_r($returns);die;
        $data['servicesRecords'] = $this->building_model->buildingListing($searchText, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = APP_NAME.' : Property Listing';
        $this->loadViews("building_list_view", $this->global, $data, NULL);
    }
   
    function add_new_building()
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
                $building_name=$this->security->xss_clean($this->input->post('building_name'));
                $building_address=$this->security->xss_clean($this->input->post('building_address'));
               	$vals = array('building_name'=>$building_name,'building_address'=>$building_address,'building_created_at'=>date('Y-m-d H:i:s'),'building_updated_at'=>date('Y-m-d H:i:s'));
                $result = $this->building_model->add_new_building($vals);
                redirect('building_listing');
            }
            else
            {
	            $this->load->model('building_model');
	            $data['action']='add_new_building';
	            $this->global['pageTitle'] =APP_NAME. ' : Add New Property';
	            $this->loadViews("add_new_building", $this->global, $data, NULL);
	        }
        }
    }

    function edit_building()
    {
            if($this->input->post())
            {
                $value=$this->input->post();
                $result = $this->building_model->edit_building($value);
                redirect('building_listing');
            }
            else
            {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data['list'] = $this->building_model->get_building_info($id);
                $data['action']='edit_building';
                $this->global['pageTitle'] = APP_NAME.' : Edit Item Unit';
                //echo "<pre>";print_r($data);die;
                $this->loadViews("add_new_building", $this->global, $data, NULL);
            }           
    }    
    
    function delete_building()
    {
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            $result = $this->building_model->delete_building($record_num);
            redirect('building_listing');
    }    
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = APP_NAME.' : 404 - Page Not Found';
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>