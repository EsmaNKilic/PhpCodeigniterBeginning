<?php
class PersonelModel extends CI_Model{

//    public function get{
//    return $this->db->get("personel")->result();
//}
//public function delete(){
//    return $this->db->where("id",$id)->delete("personel");
//}

public function get($where = array()){

    $result = $this->db
    ->where($where)
    ->get("personel")
    ->row();

    return $result;
}
public function getAll($where){

    $result = $this->db
    ->where($where)
    ->get("personel")
    ->result();

    return $result;
}

public function delete(){

    $return = $this->db
    ->where($where)
    ->delete("personel");
    return $result;
}

public function insert($data = array()){

    $results = $this->db
   ->insert("personel",$data);

   return $result;
 }

 public function update($data = array(), $where = array()){

    $results = $this->db
    ->where($where)
   ->update("personel",$data);

   return $result;
 }

 public function getLastId(){
     return $this->db->insert_id;
 }

}