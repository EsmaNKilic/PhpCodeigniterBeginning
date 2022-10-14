<?php 
class Student extends CI_Controller{

public function index(){
    $viewData = new stdClass;
    $student = $this->db->get("student")->result();

    $viewData->studentList = $student;
    $this->load->view("stu_list",$viewData);
    }

public function new_stu(){
    $this->load->view("stu_add");
}

public function update_stu($id){
    $this->uri->segment(3);
    $row = $this->db->where(array("id" => $id))->get("student")->row();

    $viewData = new stdClass;
    $viewData->student_data = $row;

    $this->load->view("stu_update",$viewData);
}

public function update(){
    $this->uri->segment(3);

    $okulNo = $this->input->post("okulNo");
    $name = $this->input->post("name");
    $note = $this->input->post("note");

    $data = array(
        "okulNo" => $okulNo,
        "name" => $name,
        "note" => $note
    );

    $update = $this->db->where(array("id" => $id))->update("student",$data);
    
    if($update){
        redirect(base_url("student"));
    }else{
        echo "öğrenci güncellenemedi";
    }

}

public function save(){
    $this->uri->segment(3);

    $okulNo = $this->input->post("okulNo");
    $name = $this->input->post("name");
    $note = $this->input->post("note");

    $data = array(
        "okulNo" => $okulNo,
        "name" => $name,
        "note" => $note
    );

    $save = $this->db->insert("student",$data);
    
    if($save){
        redirect(base_url("student"));
    }else{
        echo "öğrenci kaydedilemedi";
    }
}

public function delete(){
    $where = array(
        $id = $this->uri->segment(3)
    );

    $delete = $this->db->where($where)->delete("student");
    
    if($delete){
        redirect(base_url("student"));
    }else{
        echo "öğrenci silinemedi";
    }
    }
}
?>