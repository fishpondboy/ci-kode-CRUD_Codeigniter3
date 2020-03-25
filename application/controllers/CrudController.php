<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Crud_model');
	}

	public function index()
	{
		$data['result'] = $this->Crud_model->getAllData();
		$this->load->view('CrudView', $data);
	}

	//Memanggil createData
	public function create(){
		//Memanggil Model
		$this->Crud_model->createData();
		redirect("CrudController");
	}
	
	//Edit Data
	public function edit($id){
		$data['row'] = $this->Crud_model->getData($id);
		$this->load->view('CrudEdit', $data);
	}

	//Update Data
	public function update($id){
		$this->Crud_model->updateData($id);
		redirect("CrudController");
	}

	//Delete Data
	public function delete($id){
		$this->Crud_model->deleteData($id);
		redirect("CrudController");
	}
}
