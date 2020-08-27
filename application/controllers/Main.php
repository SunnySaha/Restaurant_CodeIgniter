<?php


class Main extends CI_Controller{

//home page
    function home(){

        $this->load->view('index');
    }


    //about page
    function about(){
        $this->load->view('about');
    }

    
    
    //comming soon

    function comming_soon(){
        $this->load->view('comingSoon');
    }

    //menu 

    function Menu(){
        $this->load->view('menu');
    }



}

?>