<?php

class FormApp extends CI_Controller
{

    /* Sınıfın yapıcı metodu. Sınıf çağırıldığında otomatik çalışır. */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("FormApp_Model");
    }

    /* Kayıt formunun ekrana basılması işlemidir. */
    public function index()
    {
        $this->load->view("form");
    }

    public function listele()
    {
        $items = $this->FormApp_Model->get_all();
        //print_r($items);
        $viewData = array(
            "items" => $items
        );

        $this->load->view("listele", $viewData);
    }

    public function insert()
    {
        //echo "Form Kayıt İşlemi" ;
        $data = array(
            "name"		=> $this->input->post("name"),
            "surname"   => $this->input->post("surname"),
            "email"   	=> $this->input->post("email"),
            "telephone" => $this->input->post("telephone"),
            "message"   => $this->input->post("message")
            
        );

        $insert = $this->FormApp_Model->insert($data);

        if ($insert) {
            redirect("formApp/listele");
        } else {
            redirect("formApp");
        }
    }
}