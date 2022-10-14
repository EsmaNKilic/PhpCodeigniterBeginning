<?php 

class Cars extends CI_Controller{

public function index(){ //listeleme

    $viewData = new stdClass();
    $cars = $this->db->get("cars")->result();

    $viewData->carsList = $cars;
    $this->load->view("cars_list",$viewData);
}

public function new_enrollment(){ //ekleme

    $this->load->view("cars_add");
    
}

public function update_enrollment($id){ //kayıt güncelleme (form)

    $id = $this->uri->segment(3);

    $row = $this->db->where(array("id" => $id))->get("cars")->row();

    $viewData = new stdClass();
    $viewData->cars_data = $row;

    $this->load->view("cars_update",$viewData);

}

public function update(){ //güncelleme

    $id = $this->uri->segment(3);

    $brand = $this->input->post("brand");
    $color = $this->input->post("color");
    $year =$this->input->post("year");
    $price =$this->input->post("price");

    $data = array(
        "brand" => $brand,
        "color" => $color,
        "year" => $year,
        "price" => $price
    );

    $update = $this->db->where(array("id"=>$id))->update("cars",$data);

    if($update){
        redirect(base_url("cars"));
    }else{
        echo "araç güncellenemedi";
    }
}

public function delete(){ //silme
    $where = array(
        "id" => $this->uri->segment(3)
    );

    $delete = $this->db->where($where)->delete("cars");

    if($delete){
        redirect(base_url("cars"));
    }else{
        echo "araç silenemedi";
    }
}

public function save(){ //kaydetme
    $id = $this->uri->segment(3);

    $brand = $this->input->post("brand");
    $color = $this->input->post("color");
    $year = $this->input->post("year");
    $price =$this->input->post("price");

    $data = array(
        "brand" => $brand,
        "color" => $color,
        "year" => $year,
        "price" => $price
    );

    $save = $this->db->insert("cars",$data);

    if($save){
        redirect(base_url("cars"));
    }else{
        echo "araç kaydedilemedi";
    }
}

}
?>

