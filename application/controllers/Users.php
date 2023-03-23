<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

        public function index(){
        $this->load->model('users_model');
        $dados["users"] = $this->users_model->index();
        $dados["title"] = "Users - CodeIgniter";


        $this->load->view('pages/templates/header', $dados);
        $this->load->view('pages/templates/nav-top', $dados);
		$this->load->view('pages/users', $dados);
        $this->load->view('pages/templates/footer', $dados);
        $this->load->view('pages/templates/js', $dados);
        }
    }
 ?>