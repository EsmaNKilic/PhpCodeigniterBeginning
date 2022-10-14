<?php
class dbislem extends CI_Controller{
    public function index(){
        //$query = $this->db->get("personel")->result(); //tüm sonuçları getiren metod
        $rows = $this->db->get("personel")->row(); //tek sonucu getiren metod
        
        $viewData = array("rows"=> $rows);

        $this->load->view("dbislem",$viewData);
    }

    public function where(){
        $rows = $this
        ->db
        ->where("id >", 1)
        ->where("id <", 4)
        ->where("detail !=", "")
        ->get("personel")
        ->result();
        print_r($rows);
    } //bunun kısa yolu da var aşağıdaki gibi array ile ARRAY ÖNEMLİ UNUTMA
     
    $where = array(
        "id >"=> 1,
        "id <"=> 4,
        "detail !="=> " "
    )
        $rows = $this
        ->db
        ->where($where)
        ->get("personel")
        ->result();

        print_r($rows);
    

       $viewData = array("rows", $rows);

        $this->load->view("dbislem",$viewData);

        
        
    public function like(){
        $rows = $this->db->like("title","ettin")->get("personel")->result();
        print_r($rows);
        } //yada

        $like =array(
            "title" => "ettin",
            "detail" => "ok"
        );
        $rows = $this->db->like($like)->get("personel")->result();
        echo $this->db->last_query();//last_quer--sorgu
        echo "<br>";
        print_r($rows);

        $orderBy =array(
            "id" => "random",
            "title" => "asc"
        );
        $rows = $this
        ->db
        ->order_by("id", "random")
        ->order_by("title", "asc")
        ->get("personel")
        ->reuslt();
        print_r($rows);


        $rows = $this->db->limit(1)->get("personel")->result();
        echo $this->db->last_query();
        echo "<br>";
        print_r($rows);



        public function insertPage(){
            $this->load->view("insert");
        }
        public function insert(){
            $title = $this->input->post("title");
            $detail = $this->input->post("detail");

            $data =array(
                "title"=> $title,
                "detail"=> $detail

            );

            $insert = $this->db->insert("personel",$data);
        }
    }

    public function updatePage(){
        $this->load->view("update");
    }
    public function update(){
        $id = $this->input->post("id");
        $title = $this->input->post("title");
        $detail = $this->input->post("detail");

        $data =array(
            "title"=> $title,
            "detail"=> $detail

        );

        $update = $this
        ->db
        ->where("id",$id)
        ->update("personel",$data);
    }
}


public function delete($id=-1){
    $delete = $this
    ->db
    ->where("id",4)
    ->delete("personel");

    echo $delete;
}



 public function model(){

    $this->load->model("personelModel");

     $results = $this->personelModel->get();

     $delete = $this->personelModel->delete(6);
  }
  
  public function model_usage(){   
  
  $this->load->model("personelModel");
 
  //Veri çekme
  //$result = $this->personelModel->get(array("id"=> 7));
  //$result = $this->personelModel->getAll(array("id <="=> 1));
  //print_re($result);


  //Veri silme
  //$delete = $this->personelModel->delete(array("id" => 16));
  //echo $delete;

  
  //Veri ekleme
  //$data = array(
  //    "title"=> "Esma K."
  //    "detail"=> "Tuğba reisin çekirgesi"
  //);

  //$insert = $this->personelModel->$insert($data);
  //echo $insert;


  //Veri güncelleme
  //$data = array(
      //    "title"=> "Anonim kişi"
      //    "detail"=> "bilinmiyor"
      //);

      //$where =array(
      //   "id" => 18
      //);

      //$update = $this->personelModel->update($data,$where);
      //echo $update;

//----değişmesini istediğimiz yerlerin eklenmesini istediğimiz zamanları insert ve update bloğunda belirtmen lazım.
}

?>

