<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function index(){
        $dados["title"] = "Login - CodeIgniter";
        $this->load->view('pages/login', $dados); 

    }
    public function store(){
        $this->load->model("login_model");
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $user = $this->login_model->store($email, $password);

        if($user){
            $this->session->set_userdata("logged_user", $user);
            redirect("dashboard");
        }else{
            $this->session->set_flashdata("danger", "Usuário ou Senha Invalido");
            redirect("login");
        }

    
    }
    public function logout(){
        $this->session->unset_userdata("logged_user", $user);
        redirect("login");
    }
}