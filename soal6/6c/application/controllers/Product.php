<?php

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('CategoryModel', 'Category');
		$this->load->model('CashierModel', 'Cashier');
		$this->load->model('ProductModel', 'Product');
	}

	public function Create()
	{
		$price = substr($this->input->post('price'), 4, strlen($this->input->post('price')));
		$product = $this->input->post('product');
		$cashier = $this->input->post('cashier');
		$category = $this->input->post('category');

		$data = [
			'name' => $product,
			'price' => $price,
			'id_category' => $category,
			'id_cashier' => $cashier,
		];

		$this->Product->AddData($data);
		$this->session->set_flashdata('alert', 'Data Berhasil Di Tambah!');
		redirect('Home');
	}
	
	public function Edit()
	{
		$price = substr($this->input->post('price'), 4, strlen($this->input->post('price')));
		$product = $this->input->post('product');
		$cashier = $this->input->post('cashier');
		$category = $this->input->post('category');
		$id = $this->input->post('id');


		$data = [
			'name' => $product,
			'price' => $price,
			'id_category' => $category,
			'id_cashier' => $cashier,
		];

		$this->Product->EditData($id, $data);
		$this->session->set_flashdata('alert', 'Data #'. $id. ' Berhasil Di Edit!');
		redirect('Home');
	}

	public function Delete($id = null)
	{
		if (is_null($id)) {
			redirect('Home');
		}

		$request = $this->Product->getProductById($id);
		if ($request) {
			$this->Product->Delete($id);
			$this->session->set_flashdata('alert', 'Data #' .$id.' Berhasil Di Hapus!');
			redirect('Home');
		}
	}
	
	public function Detail($id = null)
	{
		if (is_null($id)) {
			redirect('Home');
		}

		$request = $this->Product->getProductById($id);
		if ($request) {
			echo json_encode($request);
		}
	}
}
