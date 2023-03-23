<?php

class Search_model extends CI_Model{
    public function search($busca){
        if(empty($busca)){
            return array();
        }
        $busca = $this->input->post("busca");
        $this->db->like("name", $busca);
        return $this->db->get("games")->result_array();
    }
}