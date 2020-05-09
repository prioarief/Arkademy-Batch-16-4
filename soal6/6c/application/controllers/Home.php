<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('CategoryModel', 'Category');
		$this->load->model('CashierModel', 'Cashier');
		$this->load->model('ProductModel', 'Product');
	}

	public function index()
	{
		$data = [
			'category' => $this->Category->getCategory(),
			'cashier' => $this->Cashier->getCashier(),
			'product' => $this->Product->getProduct(),
		];
		$this->load->view('template/header');
		$this->load->view('index', $data);
		$this->load->view('template/footer', $data);
	}
	
}
