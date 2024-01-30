<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Testimoni extends CI_Model
{


    public function getTestimonies()
    {
        $this->db->select(
            '*,  testimoni.id as testimoni_id,
        admin_create.username as created_by_username,
        admin_update.username as updated_by_username,'
        );
        $this->db->from('testimoni');
        $this->db->join('admin as admin_create', 'testimoni.created_by = admin_create.id', 'right');
        $this->db->join('admin as admin_update', 'testimoni.updated_by = admin_update.id', 'left');
        return $this->db->get()->result();
    }

    public function getTestimonialById($id)
    {
        return $this->db->get_where('testimoni', array('id' => $id))->row_array();
    }

    public function createTestimonial($data)
    {
        $this->db->insert('testimoni', $data);
    }

    public function updateTestimonial($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('testimoni', $data);
    }

    public function deleteTestimonial($id)
    {
        $this->db->delete('testimoni', array('id' => $id));
    }
}
