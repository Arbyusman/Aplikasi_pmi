<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Testimoni');
	}

	public function index()
	{
		$data['testimonies'] = $this->M_Testimoni->getTestimonies();
		$data['title'] = "Testimoni";
		$this->load->view('backend/testimoni', $data);
	}

	public function create()
	{
		$data['title'] = "Tambah Testimoni";

		$this->load->view('backend/testimoni_create', $data);
	}
	public function store()
	{
		// Load necessary libraries
		$this->load->library('upload');

		$now = date('Y-m-d H:i:s');

		if ($this->input->post()) {
			$config['upload_path']   = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = 2048;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('image')) {
				$upload_data = $this->upload->data();
				$description = $this->input->post('description');

				$data = array(
					'image'       => $upload_data['file_name'],
					'description' => $description,
					'created_by'  => $this->session->userdata['id'],
					'created_at'  => $now,
				);

				$this->M_Testimoni->createTestimonial($data);

				// Set success flashdata
				$this->session->set_flashdata('flash', 'Testimonial created successfully');

				redirect(base_url('/Testimoni'));
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);

				redirect(base_url('/Testimoni/create'));
			}
		}
	}



	public function edit($id)
	{
		$data['testimonial'] = $this->M_Testimoni->getTestimonialById($id);
		$data['title'] = "Edit Testimoni";
		$this->load->view('backend/testimoni_edit', $data);
	}

	public function update($id)
	{
		$this->load->library('upload');
		$config['upload_path']   = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 2048;
		$this->upload->initialize($config);

		if ($this->input->post()) {
			if ($this->upload->do_upload('image')) {
				$upload_data = $this->upload->data();
				$description = $this->input->post('description');

				$data = array(
					'image'       => $upload_data['file_name'],
					'description' => $description,
					'updated_by'  => $this->session->userdata('id'),
					'updated_at'  => date('Y-m-d H:i:s'),
				);

				$this->M_Testimoni->updateTestimonial($id, $data);

				$this->session->set_flashdata('flash', 'Testimonial updated successfully');
				redirect(base_url('Testimoni'));
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				redirect(base_url('Testimoni/edit/' . $id));
			}
		} else {
			redirect(base_url('Testimoni/edit/' . $id));
		}
	}


	public function delete($id)
	{
		$this->M_Testimoni->deleteTestimonial($id);

		$this->session->set_flashdata('flash', 'Testimonial deleted successfully');

		redirect(base_url('Testimoni'));
	}
}
