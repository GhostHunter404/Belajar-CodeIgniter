<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
    }

    function index() {
        $data['product'] = $this->Product_model->get_product();
        $this->load->view('product_view', $data);
    }

    function add_new() {
        $this->load->view('add_product_view');
    }

    function save() {
        $product_name  = $this->input->post('product_name');
        $product_price = $this->input->post('product_price');
        $result = $this->Product_model->save($product_name, $product_price);

        if ($result) {
            redirect('product');
        } else {
            echo "Gagal disimpan";
        }
    }

    function get_edit($product_id = null) {
        if (!$product_id){
            show_404(); // jika tidak ada ID, langsung tampilkan halama 404
            return;
        }
        $data['product'] = $this->Product_model->get_product_id($product_id);

        if ($data['product']) {
            $this->load->view('edit_product_view', $data);
        } else {
            show_404(); // jika ID tidak ditemukan, tampilkan halaman 404
        }
    }

    function update() {
        $product_id     = $this->input->post('product_id');
        $product_name   = $this->input->post('product_name');
        $product_price  = $this->input->post('product_price');

        $result = $this->Product_model->update($product_id, $product_name, $product_price);

        if ($result) {
            redirect('product');
        } else {
            echo "Gagal update";
        }
    }

    function delete($product_id = null) {
        if (!$product_id){
            show_404(); // jika tidak ada ID, langsung tampilkan halama 404
            return;
        }
        $product_id = $this->uri->segment(3);
        $this->Product_model->delete($product_id);
        redirect('product');
    }
}
?>
