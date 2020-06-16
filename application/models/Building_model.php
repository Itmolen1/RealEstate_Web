<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Building_model extends CI_Model
{
    function buildingListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.building_id,BaseTbl.building_name,BaseTbl.building_address,BaseTbl.building_created_at, BaseTbl.building_updated_at');
        $this->db->from('tbl_building as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.building_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    function buildingListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.building_id,BaseTbl.building_name,BaseTbl.building_address,BaseTbl.building_created_at, BaseTbl.building_updated_at');
        $this->db->from('tbl_building as BaseTbl');
        //$this->db->join('tbl_services as s', 's.service_id = BaseTbl.service_id','left');
        if(!empty($searchText)) {
           $likeCriteria = "(BaseTbl.building_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.building_id', 'DESC');
        $this->db->limit($page, $segment);
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function add_new_building($servicesInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_building', $servicesInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
    
    function get_building_info($id)
    {
         $this->db->select('BaseTbl.building_id, BaseTbl.building_name,BaseTbl.building_address, BaseTbl.building_created_at, BaseTbl.building_updated_at');
        $this->db->from('tbl_building as BaseTbl');
        $this->db->where('building_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    function edit_building($val)
    {
        $this->db->set('building_name',$val['building_name']);
        $this->db->set('building_address',$val['building_address']);
        $this->db->set('building_updated_at',date('Y-m-d H:i:s'));
        $this->db->where('building_id', $val['building_id']);
        $this->db->update('tbl_building');
        return TRUE;
    }
    
    function delete_building($id)
    {
        $this->db->set('isDeleted',1);
        $this->db->where('building_id', $id);
        $this->db->update('tbl_building');
        return $this->db->affected_rows();
    }

}

  