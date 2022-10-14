<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	/** Kayıt listeleme */
	public function index()
	{

		$viewData = new stdClass();
		$user = $this->db->get("user")->result();

		$viewData->userList = $user; 
		$this->load->view('users_list',$viewData);
	}

	/** Yeni kayıt formu */
	public function new_form()
	{
		$this->load->view("user_add");
	}

	/**kaydet */
	public function save()
	{
		$id = $this->uri->segment(3);
		
        $name = $this->input->post("name");
    	$email = $this->input->post("email");
		$address = $this->input->post("address");
        $city = $this->input->post("city");

		$data = array(
            "name" => $name,
            "email" => $email,
			"address" => $address,
            "city" => $city
        );

		$save = $this->db->insert("user",$data);

		
        if($save){
            redirect(base_url("user"));
        }else {
            echo"veri kaydedilemedi";
        }
		
	}
	
	/** güncelleme formu */
	public function update_form($id){
		$id = $this->uri->segment(3);
		
        $row=$this->db->where(array("id" => $id))->get("user")->row();

        $viewData = new stdClass();
        $viewData->user_data =$row;

        $this->load->view("user_update",$viewData);
    }

	/** güncelle */
    public function update(){
        $id = $this->uri->segment(3);

        $name = $this->input->post("name");
        $email = $this->input->post("email");
		$address = $this->input->post("address");
        $city = $this->input->post("city");

        $data = array(
            "name" => $name,
            "email" => $email,
			"address" => $address,
            "city" => $city
        );

        $update = $this->db->where(array("id" => $id))->update("user",$data);

        if($update){
            redirect(base_url("user"));
        } else{
            echo "veri güncellenemedi";
        }
	}

	/** sil */
	public function delete(){
		$where = array(
			"id" => $this->uri->segment(3)
		);

		$delete = $this->db->where($where)->delete("user");
		
        if($delete){
            redirect(base_url("user"));
        }else {
            echo"veri silinemedi";
        }
	}

}
