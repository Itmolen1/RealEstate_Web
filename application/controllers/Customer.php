<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Customer extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model');
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
  
    function customer_listing()
    {   
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');
        $count = $this->customer_model->customerListingCount($searchText);
        //echo "<pre>";print_r($count);die;
		$returns = $this->paginationCompress ( "customer_listing/", $count, 10 );
		//echo "<pre>";print_r($returns);die;
        $data['servicesRecords'] = $this->customer_model->customerListing($searchText, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = APP_NAME.' : Sub services Listing';
        $this->loadViews("customer_list_view", $this->global, $data, NULL);
    }
   
    function add_new_customer()
    {        
    	if($this->input->post())
        {
            $value=$this->input->post();

            $value['customer_doc']='N.A.';
            if(isset($_FILES) && $_FILES['customer_doc']['error']==0)
            {
                /*file upload*/
                $dir='assets/uploads/';
                $n=pathinfo($_FILES['customer_doc']['name']);
                $ex=$n['extension'];
                $uid=uniqid('uploads_');
                $tfile=$dir.$uid.'.'.$ex;
                $img=array();
                $imageFileType = strtolower(pathinfo($_FILES['customer_doc']['name'],PATHINFO_EXTENSION));   
                if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "pdf" || $imageFileType == "xls" || $imageFileType == "xlsx" ||$imageFileType == "doc" || $imageFileType == "docx")
                {
                    if ( move_uploaded_file($_FILES['customer_doc']['tmp_name'],$tfile))
                    {
                        $img['customer_doc']=ADMIN_PATH.$tfile;
                        $value['customer_doc']=$img['customer_doc'];
                    }                        
                }
                /*file upload*/
            }

            $customer_name=$this->security->xss_clean($this->input->post('customer_name'));
            $customer_desc=$this->security->xss_clean($this->input->post('customer_desc'));
            $customer_mobile=$this->security->xss_clean($this->input->post('customer_mobile'));
            $customer_email=$this->security->xss_clean($this->input->post('customer_email'));
           	$vals = array('customer_name'=>$customer_name,'customer_mobile'=>$customer_mobile,'customer_email'=>$customer_email,'customer_desc'=>$customer_desc,'customer_created_at'=>date('Y-m-d H:i:s'),'customer_updated_at'=>date('Y-m-d H:i:s'),'customer_doc'=>$value['customer_doc']);
            $result = $this->customer_model->add_new_customer($vals);
            redirect('customer_listing');
        }
        else
        {
            $this->load->model('customer_model');
            $data['action']='add_new_customer';
            $this->global['pageTitle'] =APP_NAME. ' : Add New Item Unit';
            $this->loadViews("add_new_customer", $this->global, $data, NULL);
        }
    }

    function edit_customer()
    {
            if($this->input->post())
            {
                $value=$this->input->post();

                /*Image upload*/
                if(isset($_FILES) && $_FILES['customer_doc']['name']!='')
                {
                    $dir='assets/item/';
                    $n=pathinfo($_FILES['customer_doc']['name']);
                    $ex=$n['extension'];
                    $uid=uniqid('item_');
                    $tfile=$dir.$uid.'.'.$ex;
                    $img=array();
                    $imageFileType = strtolower(pathinfo($tfile,PATHINFO_EXTENSION));   
                    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg")
                    {
                        if ( move_uploaded_file($_FILES['customer_doc']['tmp_name'],$tfile))
                        {
                            $img['customer_doc']=ADMIN_PATH.$tfile;
                        }
                        else
                        {
                            redirect('customer_listing','refresh');
                        }
                    }
                    $value['customer_doc']=$img['customer_doc'];                
                    $un=str_replace(FRONT_PATH,'',$value['customer_doc_old']);
                    //echo $_SERVER['DOCUMENT_ROOT'].'/karigar/'.$un;die;
                    $u=unlink($_SERVER['DOCUMENT_ROOT'].'/'.$un);
                }
                else
                {
                    $value['customer_doc']=$value['customer_doc_old'];
                }
                /*Image upload*/
                
                $result = $this->customer_model->edit_customer($value);
                redirect('customer_listing');
            }
            else
            {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data['list'] = $this->customer_model->get_customer_info($id);
                $data['action']='edit_customer';
                $this->global['pageTitle'] = APP_NAME.' : Edit Customer';
                $this->loadViews("add_new_customer", $this->global, $data, NULL);
            }           
    }    
    
    function delete_customer()
    {
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            $result = $this->customer_model->delete_customer($record_num);
            redirect('customer_listing');
    }    
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = APP_NAME.' : 404 - Page Not Found';
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>