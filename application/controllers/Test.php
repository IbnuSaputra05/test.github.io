<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Test_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["tb_test"] = $this->Test_model->getAll();
		$this->load->view('form/index', $data);
	}

	public function add()
	{
		$data['judul'] = 'Form Tambah';

		$this->form_validation->set_rules('Name', 'Name', 'required', [
			'required' => 'Enter your name!'
		]);
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email',[
			'required' => 'Enter your Email!'
		]);
		$this->form_validation->set_rules('Gender', 'Gender', 'required',[
			'required' => 'Enter your gender!'
		]);
		$this->form_validation->set_rules('Status', 'Status', 'required', [
			'required' => 'Enter your status!'
		]);


		if ($this->form_validation->run() == FALSE){
			$this->load->view('form/tambah', $data);

		} else {
			$this->Test_model->TambahData();
			$this->session->set_flashdata('flash', 'Ditambahkan!');
			redirect ('test/index');
		}
	}

	public function delete($id)
	{
		$this->Test_model->HapusData($id);
		$this->session->set_flashdata('flash', 'Dihapus!');
		redirect ('test/index');
	}

	public function edit($id)
	{
		$data['judul'] = 'Form Edit';
		$data['tb_test'] = $this->Test_model->getData($id);
		$data['City'] = ['Solo', 'Karanganyar', 'Sukoharjo', 'Sragen', 'Wonogiri'];
		$data['Gender'] = ['Male', 'Female'];
		$data['Status'] = ['Pelajar', 'Kerja', 'Menikah'];

		$this->form_validation->set_rules('Name', 'Name', 'required', [
			'required' => 'Enter your name!'
		]);
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email',[
			'required' => 'Enter your Email!'
		]);
		$this->form_validation->set_rules('Gender', 'Gender', 'required',[
			'required' => 'Enter your gender!'
		]);
		$this->form_validation->set_rules('Status', 'Status', 'required', [
			'required' => 'Enter your status!'
		]);


		if ($this->form_validation->run() == FALSE){
			$this->load->view('form/edit', $data);

		} else {
			$this->Test_model->EditData();
			$this->session->set_flashdata('flash', 'Diubah!');
			redirect ('test/index');
		}
	}
}