<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Expence_model extends CI_Model
{
    function expenceListingCount($searchText = '',$parent='')
    {
        $this->db->select('BaseTbl.expence_id,BaseTbl.expence_bill_no,BaseTbl.vat_per,BaseTbl.expence_amount,BaseTbl.expence_desc,BaseTbl.vendor_id,BaseTbl.property_id,BaseTbl.created_at,p.property_title,v.vendor_name,b.building_name');
        $this->db->from('tbl_expence as BaseTbl');
        $this->db->join('tbl_vendor as v', 'v.vendor_id = BaseTbl.vendor_id','left');
        $this->db->join('tbl_property as p', 'p.property_id = BaseTbl.property_id','left');
        $this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id','left');
        if(!empty($searchText)) {
            $likeCriteria = "(p.property_title  LIKE '%".$searchText."%'
                            OR  v.vendor_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();        
        return $query->num_rows();
    }
    
    function expenceListing($searchText = '',$parent='', $page, $segment)
    {
        $this->db->select('BaseTbl.expence_id,BaseTbl.expence_bill_no,BaseTbl.vat_per,BaseTbl.expence_amount,BaseTbl.expence_desc,BaseTbl.vendor_id,BaseTbl.property_id,BaseTbl.created_at,p.property_title,v.vendor_name,b.building_name,BaseTbl.total_amt,BaseTbl.vat_amt');
        $this->db->from('tbl_expence as BaseTbl');
        $this->db->join('tbl_vendor as v', 'v.vendor_id = BaseTbl.vendor_id','left');
        $this->db->join('tbl_property as p', 'p.property_id = BaseTbl.property_id','left');
        $this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id','left');
        if(!empty($searchText)) {
            $likeCriteria = "(p.property_title  LIKE '%".$searchText."%'
                            OR  v.vendor_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.expence_id', 'DESC');
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function get_property_units($id)
    {
        $this->db->select('property_id,property_title');
        $this->db->from('tbl_property');
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

    function get_vendors()
    {
        $this->db->select('vendor_id,vendor_name');
        $this->db->from('tbl_vendor');
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_properties()
    {
        $this->db->select('property_id,property_title');
        $this->db->from('tbl_property');
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }

    function add_new_expence($servicesInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_expence', $servicesInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
    
    function get_expence_info($id)
    {
        $this->db->select('BaseTbl.expence_id,BaseTbl.expence_bill_no,BaseTbl.vat_per,BaseTbl.expence_amount,BaseTbl.expence_desc,BaseTbl.vendor_id,BaseTbl.property_id,BaseTbl.created_at,p.property_title,v.vendor_name,b.building_name,BaseTbl.building_id,BaseTbl.expence_date');
        $this->db->from('tbl_expence as BaseTbl');
        $this->db->where('BaseTbl.expence_id', $id);
        $this->db->join('tbl_vendor as v', 'v.vendor_id = BaseTbl.vendor_id','left');
        $this->db->join('tbl_property as p', 'p.property_id = BaseTbl.property_id','left');
        $this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id','left');
        $query = $this->db->get();
        return $query->row_array();
    }

    function get_all_services()
    {
        $this->db->select('service_id, service_name, created_at, updated_at');
        $this->db->from('tbl_services');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function edit_expence($val)
    {
        $vat_amt=($val['expence_amount']*$val['vat_per']/100);
        $total_amt=$val['expence_amount']+$vat_amt;
        $this->db->set('building_id',$val['building_id']);
        $this->db->set('vat_per',$val['vat_per']);
        $this->db->set('vat_amt',$vat_amt);
        $this->db->set('total_amt',$total_amt);
        $this->db->set('expence_date',$val['expence_date']);
        $this->db->set('expence_bill_no',$val['expence_bill_no']);
        $this->db->set('expence_amount',$val['expence_amount']);
        $this->db->set('expence_desc',$val['expence_desc']);
        $this->db->set('vendor_id',$val['vendor_id']);
        $this->db->set('property_id',$val['property_id']);
        $this->db->set('updated_at',date('Y-m-d H:i:s'));
        $this->db->where('expence_id', $val['expence_id']);
        $this->db->update('tbl_expence');
        return TRUE;
    }
    
    function delete_expence($id)
    {
        $this->db->set('isDeleted',1);
        $this->db->where('expence_id', $id);
        $this->db->update('tbl_expence');
        return $this->db->affected_rows();
    }

    function getservicesInfoById($servicesId)
    {
        $this->db->select('servicesId, name, email, mobile, roleId');
        $this->db->from('tbl_services');
        $this->db->where('isDeleted', 0);
        $this->db->where('tbl_expence', $servicesId);
        $query = $this->db->get();
        
        return $query->row();
    }

    function getservicesInfoWithRole($servicesId)
    {
        $this->db->select('BaseTbl.servicesId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.roleId, Roles.role');
        $this->db->from('tbl_services as BaseTbl');
        $this->db->join('tbl_roles as Roles','Roles.roleId = BaseTbl.roleId');
        $this->db->where('BaseTbl.servicesId', $servicesId);
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->row();
    }

}

  