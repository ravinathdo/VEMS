<?php

class Customer_Model extends CI_Model {

    /**
     * Get all data from dg_customer table
     * @return type
     */
    public function get_all_customer() {
        $query = $this->db->get('dg_customer');
        return $query->result();
    }

    public function setCustomer($cdata) {
        return $this->db->insert('dg_customer', $cdata);
    }

    public function getById($id) {
        $query = $this->db->get_where('dg_customer', array('id' => $id));
        return $query->row_array();
    }

}
?>

