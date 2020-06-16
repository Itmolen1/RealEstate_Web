<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Property_reservation extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('property_reservation_model');
        $this->isLoggedIn();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');   
    }

    public function index()
    {
        $this->global['pageTitle'] = APP_NAME.' : Purchase Order Listing';
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }

    function property_reservation_listing()
    {        
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');
        $count = $this->property_reservation_model->property_reservation_listing_count($searchText);
		$returns = $this->paginationCompress("property_reservation_listing/", $count, 10 );
        $data['property_reservation'] = $this->property_reservation_model->property_reservation_listing($searchText, $returns["page"], $returns["segment"]);
        //echo "<pre>";print_r($data);die;
        $this->global['pageTitle'] = APP_NAME.' : Purchase Order Listing';
        $this->loadViews("property_reservation_list_view", $this->global, $data, NULL);        
    }  

    function add_new_property_reservation()
    {
        if($this->input->post())
        {
            $value=$this->input->post();
            
            /*1.get all records from session table and add all the data in boi table */
            $sid=$this->session->userdata['property_reservation_item']['po_boi_po_id_session'];
            $poid = $this->property_reservation_model->add_new_property_reservation($value,$sid);
            $all_session=$this->property_reservation_model->get_all_by_session_id($sid);
            $this->property_reservation_model->insert_session_to_boi($all_session,$poid);
            /*1.get all records from session table and add all the data in boi table */
            if(isset($this->session->userdata['property_reservation_item']['po_boi_po_id_session']))
            {
            	$this->session->unset_userdata('property_reservation_item');
            }
            redirect('property_reservation_listing');
        }
        else
        {
        	if(isset($this->session->userdata['property_reservation_item']['po_boi_po_id_session']))
            {
            	$this->session->unset_userdata('property_reservation_item');
            }
            $data['action']='add_new_property_reservation';
            $data['customers'] = $this->property_reservation_model->get_customers();
            $data['properties'] = $this->property_reservation_model->get_properties();
            $data['buildings'] = $this->property_reservation_model->get_buildings();
            $logindata = array('po_boi_po_id_session'=>uniqid('po_'));
            $this->session->set_userdata('property_reservation_item',$logindata);
            $this->global['pageTitle'] = APP_NAME.' : Add New Reservation';
            $this->loadViews("add_new_property_reservation_view", $this->global, $data, NULL);
        }
    }

    function get_property_units()
    {
        $input=$this->input->post('data');
        $rent=$this->property_reservation_model->get_property_units($input['building_id_session']);
        echo json_encode($rent);
    }

    function get_rent()
    {
        $input=$this->input->post('data');
        $availibility=$this->property_reservation_model->check_availibility($input);
        //echo "<pre>";print_r($availibility);die;
        if(!empty($availibility))
        {
            $availibility=array_column($availibility,'property_id');
            if(!in_array($input['property_id_session'],$availibility))
            {
                $rent=$this->property_reservation_model->get_rent($input['property_id_session']);
                echo json_encode($rent);
            }
            else
            {
                echo json_encode(array('data'=>0));
            }            
        }
        else
        {
            $rent=$this->property_reservation_model->get_rent($input['property_id_session']);
            echo json_encode($rent);
        }
        
    }

    function add_po_boi_session()
    {
        if($this->input->post())
        {
            $value=$this->input->post();
            $result=$this->property_reservation_model->add_po_boi_session($value);
            $rows=$this->get_result($result['po_boi_po_id_session']);
            echo json_encode($rows);
        }
    }

    function edit_po_boi_session()
    {
    	if($this->input->post())
    	{
    		$value=$this->input->post();
    		$finalresult=$this->get_result($value['session_id']);
    		echo json_encode($finalresult);
    	}
    }

    function delete_po_boi_session()
    {
        if($this->input->post())
        {
            $record_num=$this->input->post();
            $get_session=$this->property_reservation_model->get_po_boi_po_id_session($record_num['data']);
            $result=$this->property_reservation_model->delete_po_boi_session($record_num['data']);
            $finalresult=$this->get_result($get_session);
            echo json_encode($finalresult);
        }        
    }    

    function get_result($po_boi_po_id_session)
    {
        $result=$this->property_reservation_model->get_items_by_session_id($po_boi_po_id_session);
        $finalresult='';
        $subtotal=0.0;
        $grandtotal=0.0;
        for($i=0;$i<count($result);$i++)
        {
            $finalresult.='<tr><td>'.($i+1).'</td><td>'.$result[$i]['building_name'].'</td><td>'.$result[$i]['property_title'].'</td><td>'.$result[$i]['rent_session'].'</td><td>'.$result[$i]['vat_per_session'].'<a href="JavaScript:void(0);" id="'.$result[$i]['po_boi_id_session'].'" class="btn btn-sm btn-danger deleteServices" style="float: right" onclick="return del_poi_id('.$result[$i]['po_boi_id_session'].')">Delete</a></td></tr>';
            $subtotal+=$result[$i]['rent_session'];
        }
        $grandtotal=$subtotal;
        $send=array('finalresult'=>$finalresult,'grandtotal'=>$grandtotal);
        return $send;
    }
    
    function edit_property_reservation()
    {
        if($this->input->post())
        {
        	$value=$this->input->post();
        	//move session values to boi
        	$sid=$this->session->userdata['property_reservation_item']['po_boi_po_id_session'];
            $all_session=$this->property_reservation_model->get_all_by_session_id($sid);
            $this->property_reservation_model->insert_session_to_boi($all_session,$value['reservation_id']);
            $result = $this->property_reservation_model->update_property_reservation($value);
            if(isset($this->session->userdata['property_reservation_item']['po_boi_po_id_session']))
            {
            	$this->session->unset_userdata('property_reservation_item');
            }
            redirect('property_reservation_listing');
        }
        else
        {
            if(isset($this->session->userdata['property_reservation_item']['po_boi_po_id_session']))
            {
            	$this->session->unset_userdata('property_reservation_item');
            }
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            if(is_numeric($record_num))
            {
                $data['property_reservation'] = $this->property_reservation_model->get_po_by_id($record_num);
            }
            $data['boi']=$this->property_reservation_model->get_all_boi_by_poid($record_num);
            if(empty($data['boi']))
            {
            	$logindata = array('po_boi_po_id_session'=>$data['property_reservation']['po_boi_po_id_session']);
            	$this->session->set_userdata('property_reservation_item',$logindata);
            	$data['session_id']=$data['property_reservation']['po_boi_po_id_session'];
            	/*move all boi records to session table*/
            	//$res=$this->property_reservation_model->inset_boi_to_session($data['boi']);
            	//echo "<pre>sd";print_r($data);die;
            }
            else
            {
            	$logindata = array('po_boi_po_id_session'=>$data['boi'][0]['po_boi_po_id_session']);
            	$this->session->set_userdata('property_reservation_item',$logindata);
            	$data['session_id']=$data['boi'][0]['po_boi_po_id_session'];
            	/*move all boi records to session table*/
            	$res=$this->property_reservation_model->inset_boi_to_session($data['boi']);
            	//echo "<pre>sd";print_r($data);die;
            }
            $data['action']='edit_property_reservation';
            $data['customers'] = $this->property_reservation_model->get_customers();
            $data['properties'] = $this->property_reservation_model->get_properties();
            $data['buildings'] = $this->property_reservation_model->get_buildings();
            $this->global['pageTitle'] = APP_NAME.' : Edit Reservation';
            $this->loadViews("add_new_property_reservation_view", $this->global, $data, NULL);
        }
    }

    function delete_property_reservation()
    {
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $result = $this->property_reservation_model->delete_property_reservation($record_num);
        redirect('property_reservation_listing','refresh');        
    }

    function property_reservation_get_payment_record_details()
    {
    	$value=$this->input->post();
    	$data['result']=$this->property_reservation_model->property_reservation_get_payment_record_details($value['data']);
    	$data['previoust_payments']=$this->get_previous_payments($value['data']);
    	echo json_encode($data);
    }
    
    function get_previous_payments($id)
    {
    	$rows=$this->property_reservation_model->get_previous_payments($id);
    	if(!empty($rows))
    	{
    		$finalresult='<table class="table table-bordered">';
    		$finalresult.='<thead><tr>';
    		$finalresult.='<th scope="col">#</th>';
    		$finalresult.='<th scope="col">Mode</th>';
    		$finalresult.='<th scope="col">Due</th>';
    		$finalresult.='<th scope="col">Paid</th>';
            $finalresult.='<th scope="col">Notes</th>';
    		$finalresult.='<th scope="col">Timestamp</th>';
    		$finalresult.='</tr></thead>';
    		$finalresult.='<tbody>';
	        for($i=0;$i<count($rows);$i++)
	        {
	            $finalresult.='<tr><td>'.($i+1).'</td><td>'.$rows[$i]['po_payment_record_type'].'</td><td>'.$rows[$i]['po_reservation_due_amt'].'</td><td>'.$rows[$i]['po_reservation_paid_amt'].'</td><td>'.$rows[$i]['po_payment_record_note'].'</td><td>'.$rows[$i]['po_payment_record_created_at'].'</td></tr>';
	        }
	        $finalresult.='</tbody></table>';
	        return $finalresult;
    	}
    	else
    	{
    		$finalresult='<table class="table table-bordered">';
    		$finalresult.='<thead><tr>';
    		$finalresult.='<th scope="col">#</th>';
    		$finalresult.='<th scope="col">Mode</th>';
    		$finalresult.='<th scope="col">Due</th>';
    		$finalresult.='<th scope="col">Paid</th>';
    		$finalresult.='<th scope="col">Timestamp</th>';
    		$finalresult.='</tr></thead>';
    		$finalresult.='<tbody>';
    		$finalresult.='<tr>No Records Found.</tr>';
    		$finalresult.='</tbody></table>';
	        return $finalresult;
    	}
    }

    function property_reservation_add_payment_record()
    {
    	$value=$this->input->post();
    	$this->property_reservation_model->property_reservation_add_payment_record($value);
    	redirect('property_reservation_listing','refresh');
    	//echo json_encode($value);
    }
   
    public function payment_records()
    {    	
    	$last = $this->uri->total_segments();
		$record_num = $this->uri->segment($last);
		$data['action']='payment_records';
		$data['list']=$this->property_reservation_model->get_reservation_by_id($record_num);
		$data['boi']=$this->property_reservation_model->get_all_boi_by_poid_for_payment($record_num);
		$this->global['pageTitle'] = APP_NAME.' : Payments';
        $this->loadViews("add_new_property_reservation_payments_view", $this->global, $data, NULL);
    }

    public function pay_now()
    {
    	if($this->input->post())
    	{
    		echo "you are at wrong place please contact admin";die;
    	}
    	else
    	{
    		$last = $this->uri->total_segments();
			$record_num = $this->uri->segment($last);
			$data['list']=$this->property_reservation_model->get_boi_by_id($record_num);
			$data['action']='pay_now';
			//echo "<pre>";print_r($data);die;
			$this->global['pageTitle'] = APP_NAME.' : Pay Now';
	        $this->loadViews("pay_now_view", $this->global, $data, NULL);
    	}    	
    }

    public function add_pr()
    {
    	$value=$this->input->post();
        $result=$this->property_reservation_model->add_pay_now($value);
        $rows=$this->get_pay_now_result($result['po_boi_id']);
        echo json_encode($rows);
    }

    function edit_pr()
    {
    	if($this->input->post())
    	{
    		$value=$this->input->post();
    		$finalresult=$this->get_pay_now_result($value['po_boi_id']);
    		echo json_encode($finalresult);
    	}
    }

    public function delete_pr()
    {
        if($this->input->post())
        {
            $record_num=$this->input->post();
            $po_boi_id=$this->property_reservation_model->get_po_boi_id_from_pr_id($record_num['data']);
            $result=$this->property_reservation_model->delete_pr($record_num['data']);
            $finalresult=$this->get_pay_now_result($po_boi_id);
            echo json_encode($finalresult);
        }        
    } 

    function get_pay_now_result($po_boi_id)
    {
    	$result=$this->property_reservation_model->get_all_by_po_boi_id($po_boi_id);
        $grandtotal=0.0;
        $finalresult='';
        for($i=0;$i<count($result);$i++)
        {
            $finalresult.='<tr><td>'.($i+1).'</td><td>'.$result[$i]['pr_mode'].'</td><td>'.$result[$i]['pr_cheque_no'].'</td><td>'.$result[$i]['pr_cheque_date'].'</td><td>'.$result[$i]['pr_amt'].'</td><td>'.$result[$i]['pr_comment'].'<a href="JavaScript:void(0);" id="'.$result[$i]['pr_id'].'" class="btn btn-sm btn-danger deleteServices" style="float: right" onclick="return del_poi_id('.$result[$i]['pr_id'].')">Delete</a></td></tr>';
            $grandtotal+=$result[$i]['pr_amt'];
        }
        $send=array('finalresult'=>$finalresult,'grandtotal'=>$grandtotal);
        return $send;
    }

    function cleanData(&$str)
    {
    	$str = preg_replace("/\t/", "\\t", $str);
    	$str = preg_replace("/\r?\n/", "\\n", $str);
    	if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }
}
?>