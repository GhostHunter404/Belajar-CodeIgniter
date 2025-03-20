<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    
    function get_product() {
        $query = $this->db->get('product');
        return $query->result();
    }

    function get_product_id($id) {
        $this->db->where('product_id', $id);
        $query = $this->db->get('product');
        
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }

    function save($product_name, $product_price) {
        $data = array(
            'product_name'  => $product_name,
            'product_price' => $product_price
        );
        return $this->db->insert('product', $data);
    }

    function update($product_id, $product_name, $product_price) {
        $data = array(
            'product_name'  => $product_name,
            'product_price' => $product_price
        );
        $this->db->where('product_id', $product_id);
        return $this->db->update('product', $data);
    }

    function delete($product_id) {
        $this->db->where('product_id', $product_id);
        return $this->db->delete('product');
    }
}
?>