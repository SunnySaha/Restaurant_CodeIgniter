<?php


class Main extends CI_Controller{

//home page
    function home(){

        $this->load->view('index');
    }
    
    function page_not_found(){
        $this->load->view('error404');
    }




}

?>