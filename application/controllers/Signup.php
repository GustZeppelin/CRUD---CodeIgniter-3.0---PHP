<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller{

    public function index(){
        $dados["title"] = "Sing-up - CodeIgniter";
        $this->load->view('pages/signup', $dados);
                
        
    }
    public function store(){
        $this->load->library("form_validation", "email");

        $this->form_validation->set_rules("name", "Nome", "required|min_length[3]");
        $this->form_validation->set_rules("password", "Senha", "required|min_length[5]");
        $this->form_validation->set_rules("email", "Email", "required|min_length[8]|valid_email|is_unique[users.email]|valid_email");
        $this->form_validation->set_rules("country", "País", "required");
        

        if($this->form_validation->run() == FALSE){
            $this->load->view('pages/signup');
        
        }else{
            $user = array(
                "name" => $this->input->post("name"),
                "country" => $this->input->post("country"),
                "email" => $this->input->post("email"),
                "password" => md5($_POST["password"]),
            ); 
            $this->load->model("users_model");
            $this->users_model->store($user);
            redirect("login");
        }
    }
}