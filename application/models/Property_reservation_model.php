<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Property_reservation_model extends CI_Model
{
    function property_reservation_listing_count($searchText = '')
    {
        $this->db->select('BaseTbl.*,c.customer_name');
        $this->db->from('tbl_property_reservation as BaseTbl');
        $this->db->join('tbl_customer as c', 'c.customer_id = BaseTbl.customer_id','left');
        if(!empty($searchText)) {
            $likeCriteria = "(c.customer_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function property_reservation_listing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.*,c.customer_name');
        $this->db->from('tbl_property_reservation as BaseTbl');
        $this->db->join('tbl_customer as c', 'c.customer_id = BaseTbl.customer_id','left');
        if(!empty($searchText)) {
            $likeCriteria = "(c.customer_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->order_by('BaseTbl.reservation_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }    

    function add_new_property_reservation($val,$sid)
    {
        $data=array(
        'reservation_type'=>$val['reservation_type'],
        'reservation_amount'=>$val['property_reservation_grand_total'],
        'reservation_due_amt'=>$val['property_reservation_grand_total'],
        'reservation_comment'=>$val['reservation_comment'],
        'reservation_from_date'=>$val['reservation_from_date'],
        'reservation_to_date'=>$val['reservation_to_date'],
        'customer_id'=>$val['customer_id'],        
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
        'po_boi_po_id_session'=>$sid
       );
        $this->db->insert('tbl_property_reservation', $data); 
        $lid=$this->db->insert_id();
        return $lid;
    }

    function update_property_reservation($val)
    {
        $this->db->set('reservation_type',$val['reservation_type']);
        $this->db->set('reservation_amount',$val['property_reservation_grand_total']);
        $this->db->set('reservation_comment',$val['reservation_comment']);
        $this->db->set('reservation_from_date',$val['reservation_from_date']);
        $this->db->set('reservation_to_date',$val['reservation_to_date']);
        $this->db->set('customer_id',$val['customer_id']);
        $this->db->set('updated_at',date('Y-m-d H:i:s'));
        $this->db->where('reservation_id',$val['reservation_id']); 
        $lid=$this->db->update('tbl_property_reservation');
        //echo $this->db->last_query();die;
        return $lid;
    }

    function property_reservation_add_payment_record($val)
    {
        //echo "<pre>";print_r($val);die;
        $data=array(
        'reservation_id'=>$val['reservation_id'],
        //'po_payment_record_date'=>$val['po_payment_record_date'],
        // 'po_payment_record_invoice_no'=>$val['property_reservation_bill_no'],
        // 'po_payment_record_payment_no'=>$val['po_payment_record_payment_no'],
        'po_payment_record_type'=>$val['po_payment_record_type'],
        'po_payment_record_cheque_no'=>$val['po_payment_record_cheque_no'],
        'po_payment_record_bank'=>$val['po_payment_record_bank'],
        'po_reservation_amount'=>$val['po_reservation_amount'],
        'po_reservation_paid_amt'=>$val['po_reservation_payment_amt'],
        'po_reservation_due_amt'=>($val['reservation_due_amt']-$val['po_reservation_payment_amt']),
        'po_payment_record_note'=>$val['po_payment_record_note'],
        'po_payment_record_created_at'=>date('Y-m-d H:i:s'),
        'po_payment_record_updated_at'=>date('Y-m-d H:i:s')
       );
        $this->db->insert('tbl_po_payment_record', $data); 
        //$lid=$this->db->insert_id();

        $this->db->set('reservation_due_amt',($val['reservation_due_amt']-$val['po_reservation_payment_amt']));
        $this->db->set('reservation_paid_amt',($val['po_reservation_paid_amt']+$val['po_reservation_payment_amt']));
        $this->db->where('reservation_id',$val['reservation_id']); 
        $lid=$this->db->update('tbl_property_reservation');
        //echo $this->db->last_query();die;
        return TRUE;
    }

    function get_property_units($id)
    {
        $this->db->select('property_id,property_title');
        $this->db->from('tbl_property');
        $this->db->where('property_status','open');
        $this->db->where('building_id',$id);
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_buildings()
    {
        $this->db->select('building_id,building_name');
        $this->db->from('tbl_building');
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_customers()
    {
        $this->db->select('customer_id,customer_name');
        $this->db->from('tbl_customer');
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }

    function check_availibility($input)
    {
        $reservation_from_date=$input['reservation_from_date'];
        $reservation_to_date=$input['reservation_to_date'];
        $sql="SELECT DISTINCT property_id FROM tbl_po_boi WHERE reservation_from_date <= '$reservation_from_date' AND reservation_to_date >= '$reservation_to_date'";
        $query = $this->db->query($sql);
        $row=$query->result_array();
        return $row;
    }

    function get_rent($id)
    {
        $this->db->select('property_rent');
        $this->db->from('tbl_property');
        $this->db->where('property_id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function get_properties()
    {
        $this->db->select('property_id,property_type_id,property_title');
        $this->db->from('tbl_property');
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }

    function insert_session_to_boi($records,$poid)
    {
        if(!empty($records))
        {
            for($i=0;$i<count($records);$i++)
            {
                $value=array(
                    'po_boi_po_id'=>$poid,
                    'building_id'=>$records[$i]['building_id_session'],
                    'property_id'=>$records[$i]['property_id_session'],
                    'rent'=>$records[$i]['rent_session'],
                    'vat_per'=>$records[$i]['vat_per_session'],
                    'vat_amt'=>$records[$i]['vat_amt_session'],
                    'total_amt'=>$records[$i]['total_amt_session'],
                    'paid_amt'=>$records[$i]['paid_amt_session'],
                    'due_amt'=>$records[$i]['due_amt_session'],
                    'reservation_from_date'=>$records[$i]['reservation_from_date_session'],
                    'reservation_to_date'=>$records[$i]['reservation_to_date_session'],
                    'po_boi_po_id_session'=>$records[$i]['po_boi_po_id_session'],
                    'po_boi_created_at'=>$records[$i]['po_boi_created_at_session'],
                    'po_boi_updated_at'=>$records[$i]['po_boi_updated_at_session']
                );
                $this->db->insert('tbl_po_boi', $value);
                $this->db->where('po_boi_id_session', $records[$i]['po_boi_id_session']);
                $this->db->delete('tbl_po_boi_session'); 
            }
        }
    }

    function inset_boi_to_session($records)
    {
        if(!empty($records))
        {
            for($i=0;$i<count($records);$i++)
            {
                $value=array(
                    'building_id_session'=>$records[$i]['building_id'],
                    'property_id_session'=>$records[$i]['property_id'],
                    'rent_session'=>$records[$i]['rent'],
                    'vat_per_session'=>$records[$i]['vat_per'],
                    'vat_amt_session'=>$records[$i]['vat_amt'],
                    'total_amt_session'=>$records[$i]['total_amt'],
                    'paid_amt_session'=>$records[$i]['paid_amt'],
                    'due_amt_session'=>$records[$i]['due_amt'],
                    'reservation_from_date_session'=>$records[$i]['reservation_from_date'],
                    'reservation_to_date_session'=>$records[$i]['reservation_to_date'],
                    'po_boi_po_id_session'=>$records[$i]['po_boi_po_id_session'],
                    'po_boi_created_at_session'=>$records[$i]['po_boi_created_at'],
                    'po_boi_updated_at_session'=>$records[$i]['po_boi_updated_at']
                );
                $this->db->insert('tbl_po_boi_session', $value);
                $this->db->where('po_boi_po_id_session', $records[$i]['po_boi_po_id_session']);
                $this->db->delete('tbl_po_boi'); 
            }
        }
    }

    function add_po_boi_session($val)
    {
        //echo "<pre>";print_r($this->session->userdata['property_reservation_item']);die;
        $data=array(
        'building_id_session'=>$val['building_id_session'],
        'property_id_session'=>$val['property_id_session'],
        'rent_session'=>$val['rent_session'],
        'vat_per_session'=>$val['vat_per_session'],
        'vat_amt_session'=>($val['rent_session']*$val['vat_per_session']/100),
        'total_amt_session'=>$val['rent_session']+($val['rent_session']*$val['vat_per_session']/100),
        'paid_amt_session'=>0,
        'due_amt_session'=>$val['rent_session']+($val['rent_session']*$val['vat_per_session']/100),
        'po_boi_po_id_session'=>$this->session->userdata['property_reservation_item']['po_boi_po_id_session'],        
        'reservation_from_date_session'=>$val['reservation_from_date'],
        'reservation_to_date_session'=>$val['reservation_to_date'],
        'po_boi_created_at_session'=>date('Y-m-d H:i:s'),
        'po_boi_updated_at_session'=>date('Y-m-d H:i:s'),
       );
        $this->db->insert('tbl_po_boi_session',$data); 
        $lid=$this->db->insert_id();

        //change the status open to reserved for property
        $this->db->set('property_status','reserved');
        $this->db->where('property_id',$val['property_id_session']); 
        $this->db->update('tbl_property');


        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_po_boi_session as BaseTbl');
        $this->db->where('BaseTbl.po_boi_id_session',$lid);
        $query = $this->db->get();
        return $query->row_array();
    }

    function delete_po_boi_session($id)
    {
        $this->db->select('property_id_session');
        $this->db->from('tbl_po_boi_session');
        $this->db->where('po_boi_id_session',$id);
        $query = $this->db->get();
        $res=$query->row_array();

        $this->db->set('property_status','open');
        $this->db->where('property_id',$res['property_id_session']); 
        $this->db->update('tbl_property');

        $this->db->where('po_boi_id_session',$id); 
        $lid=$this->db->delete('tbl_po_boi_session');
        //echo $this->db->last_query();die;
        return TRUE;
    }

    function get_po_boi_po_id_session($record_num)
    {
        $this->db->select('po_boi_po_id_session');
        $query=$this->db->get_where('tbl_po_boi_session',array('po_boi_id_session'=>$record_num));
        //echo $this->db->last_query();die;
        $session_id=$query->row_array();
        return $session_id['po_boi_po_id_session'];
    }

    function get_remaining($session_id)
    {
        $query=$this->db->get_where('tbl_po_boi_session',array('po_boi_po_id_session'=>$session_id));
        return $query->result_array();        
    }

    function get_items_by_session_id($po_boi_po_id_session)
    {
        $this->db->select('BaseTbl.*,p.property_title,b.building_name');
        $this->db->from('tbl_po_boi_session as BaseTbl');
        $this->db->join('tbl_property as p', 'p.property_id = BaseTbl.property_id_session','left');
        $this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id_session','left');
        $this->db->where('BaseTbl.po_boi_po_id_session',$po_boi_po_id_session);
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        return $query->result_array();
    }

    function get_boi_by_id($id)
    {
        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_po_boi as BaseTbl');
        //$this->db->join('tbl_property as p', 'p.property_id = BaseTbl.property_id_session','left');
        //$this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id_session','left');
        $this->db->where('BaseTbl.po_boi_id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function get_all_by_session_id($sid)
    {
        $this->db->where('po_boi_po_id_session',$sid);
        $query=$this->db->get('tbl_po_boi_session');
        $result=$query->result_array();
        return $result;
    }

    function get_all_boi_by_poid($record_num)
    {
        $this->db->where('po_boi_po_id',$record_num);
        $query=$this->db->get('tbl_po_boi');
        $result=$query->result_array();
        return $result;
    }

    function get_all_boi_by_poid_for_payment($record_num)
    {
        $this->db->select('BaseTbl.*,p.property_title,b.building_name');
        $this->db->from('tbl_po_boi as BaseTbl');
        $this->db->join('tbl_property as p', 'p.property_id = BaseTbl.property_id','left');
        $this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id','left');
        $this->db->where('BaseTbl.po_boi_po_id',$record_num);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_po_by_id($poid)
    {
        $this->db->where('reservation_id',$poid);
        $query=$this->db->get('tbl_property_reservation');
        $result=$query->row_array();
        return $result;
    }

    function get_reservation_by_id($poid)
    {
        $this->db->select('BaseTbl.*,c.customer_name');
        $this->db->from('tbl_property_reservation as BaseTbl');
        $this->db->join('tbl_customer as c', 'c.customer_id = BaseTbl.customer_id','left');
        $this->db->where('BaseTbl.reservation_id',$poid);
        $query = $this->db->get();
        $result=$query->row_array();
        return $result;
    }

    function get_po_pdf_data($poid)
    {
        $this->db->select('BaseTbl.*,vendor.*');
        $this->db->from('tbl_property_reservation as BaseTbl');
        $this->db->join('tbl_vendor as vendor', 'vendor.vendor_id = BaseTbl.property_reservation_venodr_id','left');
        //$this->db->join('tbl_item_unit as Unit', 'Unit.item_unit_id = BaseTbl.item_unit_id_session','left');
        $this->db->where('BaseTbl.reservation_id',$poid);
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        return $query->row_array();
    }

    function get_all_boi_by_poid_pdf($poid)
    {
        $this->db->select('BaseTbl.*,p.property_title');
        $this->db->from('tbl_po_boi as BaseTbl');
        $this->db->join('tbl_property as p', 'p.property_id = BaseTbl.property_id_session','left');
        $this->db->where('BaseTbl.po_boi_po_id',$poid);
        $query = $this->db->get();
        return $query->result_array();
    }

    function delete_property_reservation($id)
    {
        /*1.set deleted child record in po item table*/
        $this->db->set('isDeleted',1);
        $this->db->where('po_boi_po_id',$id); 
        $this->db->update('tbl_po_boi');
        /*2.set po parent to deleted*/
        $this->db->set('isDeleted',1);
        $this->db->where('reservation_id',$id); 
        $lid=$this->db->update('tbl_property_reservation');
        return $this->db->affected_rows();
    }

    function get_previous_payments($id)
    {
        $query=$this->db->get_where('tbl_po_payment_record',array('reservation_id'=>$id));
        return $query->result_array();
    }

    function property_reservation_get_payment_record_details($poid)
    {
        $this->db->select('BaseTbl.*,c.*');
        $this->db->from('tbl_property_reservation as BaseTbl');
        $this->db->join('tbl_customer as c', 'c.customer_id = BaseTbl.customer_id','left');
        $this->db->where('BaseTbl.reservation_id',$poid);
        $query = $this->db->get();
        return $query->row_array();
    }

    function add_pay_now($val)
    {
        $data=array(
        'po_boi_id'=>$val['po_boi_id'],
        'pr_mode'=>$val['pr_mode'],
        'pr_cheque_no'=>$val['pr_cheque_no'],
        'pr_cheque_date'=>$val['pr_cheque_date'],
        'pr_amt'=>$val['pr_amt'],
        'pr_comment'=>$val['pr_comment'],
        'pr_created_at'=>date('Y-m-d H:i:s'),
        'pr_updated_at'=>date('Y-m-d H:i:s'),
       );
        $this->db->insert('tbl_po_payment_record',$data); 
        $lid=$this->db->insert_id();

        $this->db->select('paid_amt,due_amt');
        $this->db->from('tbl_po_boi');
        $this->db->where('po_boi_id',$val['po_boi_id']);
        $query = $this->db->get();
        $res=$query->row_array();

        $paid_amt=$res['paid_amt'];
        $due_amt=$res['due_amt'];
        $paid_amt=$paid_amt+$val['pr_amt'];
        $due_amt=$due_amt-$val['pr_amt'];

        $this->db->set('paid_amt',$paid_amt);
        $this->db->set('due_amt',$due_amt);
        $this->db->where('po_boi_id',$val['po_boi_id']);
        $this->db->update('tbl_po_boi');


        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_po_payment_record as BaseTbl');
        $this->db->where('BaseTbl.pr_id',$lid);
        $query = $this->db->get();
        return $query->row_array();
    }

    function get_all_by_po_boi_id($po_boi_id)
    {
        $query=$this->db->get_where('tbl_po_payment_record',array('po_boi_id'=>$po_boi_id));
        return $query->result_array();
    }

    function get_po_boi_id_from_pr_id($record_num)
    {
        $this->db->select('po_boi_id');
        $query=$this->db->get_where('tbl_po_payment_record',array('pr_id'=>$record_num));
        $session_id=$query->row_array();
        return $session_id['po_boi_id'];
    }

    function delete_pr($id)
    {
        $this->db->select('po_boi_id,pr_amt');
        $this->db->from('tbl_po_payment_record');
        $this->db->where('pr_id',$id);
        $query = $this->db->get();
        $res=$query->row_array();

        $this->db->select('paid_amt,due_amt');
        $this->db->from('tbl_po_boi');
        $this->db->where('po_boi_id',$res['po_boi_id']);
        $query = $this->db->get();
        $res1=$query->row_array();

        $paid_amt=$res1['paid_amt'];
        $due_amt=$res1['due_amt'];
        $paid_amt=$paid_amt-$res['pr_amt'];
        $due_amt=$due_amt+$res['pr_amt'];

        $this->db->set('paid_amt',$paid_amt);
        $this->db->set('due_amt',$due_amt);
        $this->db->where('po_boi_id',$res['po_boi_id']);
        $this->db->update('tbl_po_boi');

        $this->db->where('pr_id',$id); 
        $lid=$this->db->delete('tbl_po_payment_record');
        return TRUE;
    }
}