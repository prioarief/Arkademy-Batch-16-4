<?php

class CategoryModel extends CI_Model
{
    public function getCategory()
    {
        return $this->db->get('category')->result_array();
    }
}
