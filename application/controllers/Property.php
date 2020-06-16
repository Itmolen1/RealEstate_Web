<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Property extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('property_model');
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
  
    function property_listing()
    {
    	$value=$this->input->post();
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $service_id = $this->input->post('service_id');
        $data['searchText'] = $searchText;
        $data['service_id'] = $service_id;
        $this->load->library('pagination');
        $count = $this->property_model->propertyListingCount($searchText,$service_id);
		$returns = $this->paginationCompress ( "property_listing/", $count, 10 );
        $data['servicesRecords'] = $this->property_model->propertyListing($searchText,$service_id, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = APP_NAME.' : Property Listing';
        $this->loadViews("property_list_view", $this->global, $data, NULL);
    }
   
    function add_new_property()
    {        
    	if($this->input->post())
        {
            $value=$this->input->post();
            $building_id=$this->security->xss_clean($this->input->post('building_id'));
            $property_type_id=$this->security->xss_clean($this->input->post('property_type_id'));
            $property_title=$this->security->xss_clean($this->input->post('property_title'));
            $property_size=$this->security->xss_clean($this->input->post('property_size'));
            $property_status=$this->security->xss_clean($this->input->post('property_status'));
            $property_rent=$this->security->xss_clean($this->input->post('property_rent'));
           	$vals = array('property_type_id'=>$value['property_type_id'],'property_title'=>$value['property_title'],'property_size'=>$value['property_size'],'property_status'=>$value['property_status'],'property_rent'=>$value['property_rent'],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'isDeleted'=>0);
            $result = $this->property_model->add_new_property($vals);
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'Property created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Property creation failed');
            }                
            redirect('property_listing');
        }
        else
        {
            $this->load->model('property_model');
            $data['types'] = $this->property_model->get_types();
            $data['sizes'] = $this->property_model->get_size();
            $data['buildings'] = $this->property_model->get_buildings();            
            $data['action']='add_new_property';
            $this->global['pageTitle'] =APP_NAME. ' : Add New Property';
            $this->loadViews("add_new_property", $this->global, $data, NULL);
        }
    }

    function edit_property()
    {
        if($this->input->post())
        {
            $value=$this->input->post();
            $result = $this->property_model->edit_property($value);
            redirect('property_listing');
        }
        else
        {
            $last = $this->uri->total_segments();
            $id = $this->uri->segment($last);
            $data['list'] = $this->property_model->get_property_info($id);
            $data['types'] = $this->property_model->get_types();
            $data['sizes'] = $this->property_model->get_size();
            $data['buildings'] = $this->property_model->get_buildings();
            $data['action']='edit_property';
            $this->global['pageTitle'] = APP_NAME.' : Edit Property';
            $this->loadViews("add_new_property", $this->global, $data, NULL);
        }           
    }
    
    function delete_property()
    {
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $result = $this->property_model->delete_property($record_num);
        redirect('property_listing');
    }   
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>