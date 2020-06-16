<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Reports_model extends CI_Model
{
    function report_ListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_report as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.report_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.report_email  LIKE '%".$searchText."%'
                            OR  BaseTbl.report_mobile  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();        
        return $query->num_rows();
    }
    
    function report_Listing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_report as BaseTbl');
         if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.report_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.report_email  LIKE '%".$searchText."%'
                            OR  BaseTbl.report_mobile  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.report_id', 'DESC');
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->limit($page, $segment);
        $query = $this->db->get();        
        $result = $query->result();        
        return $result;
    }

    function get_expence_report_data($val)
    {
        $this->db->select('BaseTbl.*,b.building_name,v.vendor_name,p.property_title');
        $this->db->from('tbl_expence as BaseTbl');
        $this->db->join('tbl_building as b', 'b.building_id = BaseTbl.building_id','left');
        $this->db->join('tbl_vendor as v', 'v.vendor_id = BaseTbl.vendor_id','left');
        $this->db->join('tbl_property as p', 'p.property_id = BaseTbl.property_id','left');
        if($val['building_id']!='')
        {
            $this->db->where('BaseTbl.building_id',$val['building_id']);
        }
        $this->db->where('BaseTbl.expence_date >=',$val['start_date']);
        $this->db->where('BaseTbl.expence_date <=',$val['end_date']);
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        //echo $this->db->last_query();die;        
        $result = $query->result();
        return $result;
    }
   
    function get_buildings()
    {
        $this->db->select('building_id,building_name');
        $this->db->from('tbl_building');
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }   
}