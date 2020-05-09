<?php

class ProductModel extends CI_Model
{
    public function getProduct()
    {
        $this->db->select('product.*, category.name as category, cashier.name as cashier');
		$this->db->from('product');
		$this->db->join('category', 'category.id = product.id_category');
		$this->db->join('cashier', 'cashier.id = product.id_cashier');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function getProductById($id)
	{
		$this->db->select('product.*, category.name as category, cashier.name as cashier');
		$this->db->from('product');
		$this->db->join('category', 'category.id = product.id_category');
		$this->db->join('cashier', 'cashier.id = product.id_cashier');
		$this->db->where('product.id', $id);
		$query = $this->db->get()->row_array();
		return $query;
	}
	
	public function AddData($data)
	{
		$this->db->insert('product', $data);
	}

	public function Delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('product');
	}
	
	public function EditData($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('product', $data);
	}
}
