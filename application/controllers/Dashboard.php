<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {



	public function index(){
        permission();
        $this->load->model('games_model');
        $dados["games"] = $this->games_model->index();
        $dados["title"] = "Dashboard - CodeIgniter";


        $this->load->view('pages/templates/header', $dados);
        $this->load->view('pages/templates/nav-top', $dados);
		$this->load->view('pages/dashboard', $dados);
        $this->load->view('pages/templates/footer', $dados);
        $this->load->view('pages/templates/js', $dados);
	}
    public function search(){
        permission();
        $this->load->model('search_model');
        $dados["result"] = $this->search_model->search($_POST);
        $dados["title"] = "Resultado da Pesquisa";


        $this->load->view('pages/templates/header', $dados);
        $this->load->view('pages/templates/nav-top', $dados);
		$this->load->view('pages/resultado', $dados);
        $this->load->view('pages/templates/footer', $dados);
        $this->load->view('pages/templates/js', $dados);

}
}