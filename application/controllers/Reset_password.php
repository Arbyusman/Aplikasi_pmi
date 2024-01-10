<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin'); // Use the correct model name
    }

    public function getFirstAdmin() {
        $query = $this->db->get('admin');
        return $query->row();
    }

    public function index() {
        // Get the first admin
        $admin = $this->getFirstAdmin();

        // var_dump($admin);
        // die;

        if ($admin) {
            $adminId = $admin->id;
            $newPassword = 'admin'; // Change this to your desired new password

            $this->M_admin->updatePassword($adminId, $newPassword); // Use the correct model name

            redirect('/Auth_login');
        } else {
            echo 'Admin not found.';
        }
    }
}

/* End of file Reset_password.php */
/* Location: ./application/controllers/Reset_password.php */
