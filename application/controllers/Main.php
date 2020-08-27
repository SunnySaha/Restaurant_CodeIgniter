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


    //menu 

    function Reservation(){
        $this->load->view('reserve');
    }



    //menu 

    function Blog(){
        $this->load->view('blog');
    }


    //menu 

    function Contact_Us(){
        $this->load->view('contact');
    }




}

?>