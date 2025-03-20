<?php
class Blog extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']      = "My Blog";
        $data['content']    = "Konten Website";

        // menambahkan file blog_view.php ke folder views
        //menambahkan data blogs
        $data['blogs'] = [
            ['nama_depan' => 'Fatkhurrochman', 'nama_tengah' => '', 'nama_belakang' => ''],
            ['nama_depan' => 'Wahyu', 'nama_tengah' => '', 'nama_belakang' => 'Priyoatmoko'],
            ['nama_depan' => 'Muhammad', 'nama_tengah' => 'Abdul', 'nama_belakang' => 'Muin'],
            
            ];

        $this->load->view('blog_view', $data);
    }
}
?>