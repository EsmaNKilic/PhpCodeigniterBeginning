<?php 
class AllControl extends CI_Controller{

    public function index(){
        
        $viewData = new stdClass;
        $this->load->view("all_works",$viewData);
    }
}

?>