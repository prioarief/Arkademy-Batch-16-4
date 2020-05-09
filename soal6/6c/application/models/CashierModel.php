<?php

class CashierModel extends CI_Model
{
    public function getCashier()
    {
        return $this->db->get('cashier')->result_array();
    }
}
