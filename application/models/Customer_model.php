<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Customer_model extends CI_Model
{
    function customerListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.customer_id, BaseTbl.customer_name, BaseTbl.customer_created_at, BaseTbl.customer_updated_at');
        $this->db->from('tbl_customer as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.customer_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    function customerListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.customer_id,BaseTbl.customer_name,BaseTbl.customer_mobile,BaseTbl.customer_email,BaseTbl.customer_doc,BaseTbl.customer_desc,BaseTbl.customer_created_at, BaseTbl.customer_updated_at');
        $this->db->from('tbl_customer as BaseTbl');
        //$this->db->join('tbl_services as s', 's.service_id = BaseTbl.service_id','left');
        if(!empty($searchText)) {
           $likeCriteria = "(BaseTbl.customer_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.customer_id', 'DESC');
        $this->db->limit($page, $segment);
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function add_new_customer($servicesInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_customer', $servicesInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
    
    function get_customer_info($id)
    {
        $this->db->select('BaseTbl.customer_id,BaseTbl.customer_name,BaseTbl.customer_mobile,BaseTbl.customer_email,BaseTbl.customer_doc,BaseTbl.customer_desc,BaseTbl.customer_created_at, BaseTbl.customer_updated_at');
        //$this->db->select('sub_service_id, service_id, sub_service_name');
        $this->db->from('tbl_customer as BaseTbl');
        $this->db->where('customer_id', $id);
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
    
    function edit_customer($val)
    {
        $this->db->set('customer_name',$val['customer_name']);
        $this->db->set('customer_mobile',$val['customer_mobile']);
        $this->db->set('customer_email',$val['customer_email']);
        $this->db->set('customer_doc',$val['customer_doc']);
        $this->db->set('customer_desc',$val['customer_desc']);
        $this->db->set('customer_updated_at',date('Y-m-d H:i:s'));
        $this->db->where('customer_id', $val['customer_id']);
        $this->db->update('tbl_customer');
        return TRUE;
    }
    
    function delete_customer($id)
    {
        $this->db->set('isDeleted',1);
        $this->db->where('customer_id', $id);
        $this->db->update('tbl_customer');
        return $this->db->affected_rows();
    }

    function getservicesInfoById($servicesId)
    {
        $this->db->select('servicesId, name, email, mobile, roleId');
        $this->db->from('tbl_services');
        $this->db->where('isDeleted', 0);
        $this->db->where('tbl_customer', $servicesId);
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

  