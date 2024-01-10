<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {


	public function getAdmin() 
    {
        $this->db->select('*');
        $this->db->from('admin');
        $query = $this->db->get();
        return $query->result();
    }

    public function getFirstAdmin() 
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }

    public function updatePassword($adminId, $newPassword)
    {
        $data = array('password' => md5($newPassword));
        $this->db->where('id', $adminId);
        $this->db->update('admin', $data);
    }




}

/* End of file M_tentang.php */
/* Location: ./application/models/M_tentang.php */