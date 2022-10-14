<?php

class Session extends CI_Controller {

    public function index(){

        $this->session->ser_userdata("login_name","enk");
    }

    public function set_session($name = " "){

        $list = $this->session->userdata("personelList");
        array_push($list,$name);

        $this->session->set_userdata("personelList", $name);

        $this->get_session();
        
    }

    public function get_session($data){

        echo $this->session->userdata("personelList");

        //print_r ($this->session->all_userdata()); dersen set edip eklediği tüm isimlere ek öncekileri de getirir.
        
    }


}