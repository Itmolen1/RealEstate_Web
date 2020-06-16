<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Property_model extends CI_Model
{
    function propertyListingCount($searchText = '',$parent='')
    {
        $this->db->select('BaseTbl.property_id, BaseTbl.property_type_id, BaseTbl.property_title, BaseTbl.created_at,BaseTbl.updated_at,pt.property_type_name,BaseTbl.property_unit_size_id,BaseTbl.property_status,BaseTbl.property_rent,b.building_name,s.property_unit_size_name');
        $this->db->from('tbl_property as BaseTbl');
        $this->db->join('tbl_property_type as pt', 'pt.property_type_id = BaseTbl.property_type_id','left');
        $this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id','left');
        $this->db->join('tbl_property_unit_size as s', 's.property_unit_size_id = BaseTbl.property_unit_size_id','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.property_type_name  LIKE '%".$searchText."%'
                            OR  pt.property_type_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($parent))
        {
            $this->db->where('BaseTbl.service_id',$parent);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();        
        return $query->num_rows();
    }
    
    function propertyListing($searchText = '',$parent='', $page, $segment)
    {
        $this->db->select('BaseTbl.property_id, BaseTbl.property_type_id, BaseTbl.property_title, BaseTbl.created_at,BaseTbl.updated_at,pt.property_type_name,BaseTbl.property_unit_size_id,BaseTbl.property_status,BaseTbl.property_rent,b.building_name,s.property_unit_size_name');
        $this->db->from('tbl_property as BaseTbl');
        $this->db->join('tbl_property_type as pt', 'pt.property_type_id = BaseTbl.property_type_id','left');
        $this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id','left');
        $this->db->join('tbl_property_unit_size as s', 's.property_unit_size_id = BaseTbl.property_unit_size_id','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.property_type_name  LIKE '%".$searchText."%'
                            OR  pt.property_type_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($parent))
        {
            $this->db->where('BaseTbl.property_id',$parent);
        }
        $this->db->order_by('BaseTbl.property_id', 'DESC');
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function get_types()
    {
        $this->db->select('property_type_id,property_type_name');
        $this->db->from('tbl_property_type');
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_size()
    {
        $this->db->select('property_unit_size_id,property_unit_size_name');
        $this->db->from('tbl_property_unit_size');
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

    function checkEmailExists($email, $servicesId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_services");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($servicesId != 0){
            $this->db->where("service_id !=", $servicesId);
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    function add_new_property($servicesInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_property', $servicesInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
    
    function get_property_info($id)
    {
        $this->db->select('BaseTbl.building_id,BaseTbl.property_id,BaseTbl.property_type_id,BaseTbl.property_title, BaseTbl.property_unit_size_id, BaseTbl.property_status,BaseTbl.property_rent,s.property_unit_size_name');
        $this->db->from('tbl_property as BaseTbl');
        $this->db->where('property_id', $id);
        $this->db->join('tbl_property_type as pt', 'pt.property_type_id = BaseTbl.property_type_id','left');
        $this->db->join('tbl_property_unit_size as s', 's.property_unit_size_id = BaseTbl.property_unit_size_id','left');
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
    
    function edit_property($val)
    {
        $this->db->set('building_id',$val['building_id']);
        $this->db->set('property_type_id',$val['property_type_id']);
        $this->db->set('property_title',$val['property_title']);
        $this->db->set('property_unit_size_id',$val['property_unit_size_id']);
        $this->db->set('property_status',$val['property_status']);
        $this->db->set('property_rent',$val['property_rent']);
        $this->db->set('updated_at',date('Y-m-d H:i:s'));
        $this->db->where('property_id', $val['property_id']);
        $this->db->update('tbl_property');
        return TRUE;
    }
    
    function delete_property($id)
    {
        $this->db->set('isDeleted',1);
        $this->db->where('property_id', $id);
        $this->db->update('tbl_property');
        return $this->db->affected_rows();
    }

    function getservicesInfoById($servicesId)
    {
        $this->db->select('servicesId, name, email, mobile, roleId');
        $this->db->from('tbl_services');
        $this->db->where('isDeleted', 0);
        $this->db->where('tbl_property', $servicesId);
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

  