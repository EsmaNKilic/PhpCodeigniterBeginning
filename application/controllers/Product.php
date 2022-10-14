<?php
class Product extends CI_Controller{
public function index(){
    $viewData = new stdClass;
    $product = $this->db->get("product")->result();

    $viewData->productList = $product;
    $this->load->view("product_list",$viewData);
}



public function add_product(){
    $this->load->view("product_add");
}



public function update_product($id){
    $id = $this->uri->segment(3);

    $row = $this->db->where(array("id"=>$id))->get("product")->row();

    $viewData = new stdClass;
    $viewData->product_data = $row;

    $this->load->view("product_update",$viewData);
}



public function update(){
    $id = $this->uri->segment(3);

    $kind = $this->input->post("kind");
    $price = $this->input->post("price");
    $stock = $this->input->post("stock");

    $data = array(
        "kind" => $kind,
        "price" => $price,
        "stock" => $stock
    );

    $update = $this->db->where(array("id"=>$id))->update("product",$data);

    if ($update) {
        redirect(base_url("product"));
    } else {
        echo "ürün güncellenemedi";
    }
}



public function delete(){
    $where = array(
        "id" => $this->uri->segment(3)
        );

    $delete = $this->db->where($where)->delete("product");

    if ($delete) {
        redirect(base_url("product"));
    } else {
        echo "ürün silinemedi";
    }
}



public function save(){
    $id = $this->uri->segment(3);

    $kind = $this->input->post("kind");
    $price = $this->input->post("price");
    $stock = $this->input->post("stock");

    $data = array(
        "kind" => $kind,
        "price" => $price,
        "stock" => $stock
    );

    $save = $this->db->insert("product",$data);

    if ($save) {
        redirect(base_url("product"));
    } else {
        echo "ürün kaydedilemedi";
    }
}
}
?>