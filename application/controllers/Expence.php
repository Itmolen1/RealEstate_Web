<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Expence extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('expence_model');
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
  
    function expence_listing()
    {
    	$value=$this->input->post();
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $service_id = $this->input->post('service_id');
        $data['searchText'] = $searchText;
        $data['service_id'] = $service_id;
        $this->load->library('pagination');
        $count = $this->expence_model->expenceListingCount($searchText,$service_id);
		$returns = $this->paginationCompress ( "expence_listing/", $count, 10 );
        $data['servicesRecords'] = $this->expence_model->expenceListing($searchText,$service_id, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = APP_NAME.' : expence Listing';
        $this->loadViews("expence_list_view", $this->global, $data, NULL);
    }
   
    function add_new_expence()
    {        
    	if($this->input->post())
        {
            $value=$this->input->post();

            $value['expence_doc']='N.A.';
            if(isset($_FILES) && $_FILES['expence_doc']['error']==0)
            {
                /*file upload*/
                $dir='assets/uploads/';
                $n=pathinfo($_FILES['expence_doc']['name']);
                $ex=$n['extension'];
                $uid=uniqid('uploads_');
                $tfile=$dir.$uid.'.'.$ex;
                $img=array();
                $imageFileType = strtolower(pathinfo($_FILES['expence_doc']['name'],PATHINFO_EXTENSION));   
                if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "pdf" || $imageFileType == "xls" || $imageFileType == "xlsx" ||$imageFileType == "doc" || $imageFileType == "docx")
                {
                    if ( move_uploaded_file($_FILES['expence_doc']['tmp_name'],$tfile))
                    {
                        $img['expence_doc']=ADMIN_PATH.$tfile;
                        $value['expence_doc']=$img['expence_doc'];
                    }                        
                }
                /*file upload*/
            }

            $building_id=$this->security->xss_clean($this->input->post('building_id'));
            $vat_per=$this->security->xss_clean($this->input->post('vat_per'));
            $expence_bill_no=$this->security->xss_clean($this->input->post('expence_bill_no'));
            $expence_amount=$this->security->xss_clean($this->input->post('expence_amount'));
            $expence_desc=$this->security->xss_clean($this->input->post('expence_desc'));
            $vendor_id=$this->security->xss_clean($this->input->post('vendor_id'));
            $property_id=$this->security->xss_clean($this->input->post('property_id'));
            $expence_date=$this->security->xss_clean($this->input->post('expence_date'));
            $vat_amt=($expence_amount*$vat_per/100);
            $total_amt=$expence_amount+$vat_amt;
           	$vals = array('building_id'=>$value['building_id'],'expence_date'=>$value['expence_date'],'vat_amt'=>$vat_amt,'total_amt'=>$total_amt,'vat_per'=>$value['vat_per'],'expence_bill_no'=>$value['expence_bill_no'],'expence_amount'=>$value['expence_amount'],'expence_desc'=>$value['expence_desc'],'vendor_id'=>$value['vendor_id'],'property_id'=>$value['property_id'],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'isDeleted'=>0,'expence_doc'=>$value['expence_doc']);
            $result = $this->expence_model->add_new_expence($vals);
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'expence created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'expence creation failed');
            }                
            redirect('expence_listing');
        }
        else
        {
            $this->load->model('expence_model');
            $data['vendors'] = $this->expence_model->get_vendors();
            $data['properties'] = $this->expence_model->get_properties();
            $data['buildings'] = $this->expence_model->get_buildings();
            $data['action']='add_new_expence';
            $this->global['pageTitle'] =APP_NAME. ' : Add New expence';
            $this->loadViews("add_new_expence", $this->global, $data, NULL);
        }
    }

    function edit_expence()
    {
        if($this->input->post())
        {
            $value=$this->input->post();

            /*Image upload*/
            if(isset($_FILES) && $_FILES['expence_doc']['name']!='')
            {
                $dir='assets/item/';
                $n=pathinfo($_FILES['expence_doc']['name']);
                $ex=$n['extension'];
                $uid=uniqid('item_');
                $tfile=$dir.$uid.'.'.$ex;
                $img=array();
                $imageFileType = strtolower(pathinfo($tfile,PATHINFO_EXTENSION));   
                if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg")
                {
                    if ( move_uploaded_file($_FILES['expence_doc']['tmp_name'],$tfile))
                    {
                        $img['expence_doc']=ADMIN_PATH.$tfile;
                    }
                    else
                    {
                        redirect('expence_listing','refresh');
                    }
                }
                $value['expence_doc']=$img['expence_doc'];                
                $un=str_replace(FRONT_PATH,'',$value['customer_doc_old']);
                //echo $_SERVER['DOCUMENT_ROOT'].'/karigar/'.$un;die;
                $u=unlink($_SERVER['DOCUMENT_ROOT'].'/'.$un);
            }
            else
            {
                $value['expence_doc']=$value['expence_doc_old'];
            }
            /*Image upload*/
            
            $result = $this->expence_model->edit_expence($value);
            redirect('expence_listing');
        }
        else
        {
            $last = $this->uri->total_segments();
            $id = $this->uri->segment($last);
            $data['list'] = $this->expence_model->get_expence_info($id);
            $data['vendors'] = $this->expence_model->get_vendors();
            $data['properties'] = $this->expence_model->get_properties();
            $data['buildings'] = $this->expence_model->get_buildings();
            $data['action']='edit_expence';
            $this->global['pageTitle'] = APP_NAME.' : Edit expence';
            $this->loadViews("add_new_expence", $this->global, $data, NULL);
        }           
    }

    function get_property_units_exp()
    {
        $input=$this->input->post('data');
        $rent=$this->expence_model->get_property_units($input['building_id']);
        echo json_encode($rent);
    }
    
    function delete_expence()
    {
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $result = $this->expence_model->delete_expence($record_num);
        redirect('expence_listing');
    }   
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>