<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("games_model");
        permission();
    }

	public function index(){

        $this->load->model('games_model');
        $dados["games"] = $this->games_model->index();
        $dados["title"] = "Games - CodeIgniter";
        
		$this->load->view('pages/games', $dados);
        $this->load->view('pages/templates/header', $dados);
        $this->load->view('pages/templates/nav-top', $dados);
        $this->load->view('pages/templates/js', $dados);
        $this->load->view('pages/templates/footer', $dados);
        

	}
    public function new(){
        $dados["title"] = "Games - CodeIgniter";
        $this->load->view('pages/form-games', $dados);
        $this->load->view('pages/templates/header', $dados);
        $this->load->view('pages/templates/nav-top', $dados);
        $this->load->view('pages/templates/js', $dados);
        $this->load->view('pages/templates/footer', $dados);

    }
    public function store(){

        $this->load->library("form_validation");

        $this->form_validation->set_rules("name", "name", "required|min_length[2]");
        $this->form_validation->set_rules("release_date", "Data", "required|min_length[8]|max_length[10]");

        if($this->form_validation->run() == FALSE){
            redirect("dashboard");
        }else{
            $game = $_POST;
            $game['release_date'] = implode('-', array_reverse(explode('/', $this->input->post('release_date'))));
            $game["id_user"] = 1;
            $this->games_model->store($game);
            redirect("games");
        }
        
        
    }
    public function edit($id){
        $this->load->model('games_model');
        $dados["game"] = $this->games_model->show($id);
        $dados["title"] = "Editar Games - CodeIgniter";

        $this->load->view('pages/templates/header', $dados);
        $this->load->view('pages/templates/nav-top', $dados);
		$this->load->view('pages/form-games', $dados);
        $this->load->view('pages/templates/js', $dados);
        $this->load->view('pages/templates/footer', $dados);
    }
    public function update($id){
        $game = $_POST;
        $game['release_date'] = implode('-', array_reverse(explode('/', $this->input->post('release_date'))));
        $this->games_model->update($id, $game);
        redirect("games");
    }
    public function delete($id){
        $this->games_model->destroy($id);
        redirect("games");
    }
}




?>