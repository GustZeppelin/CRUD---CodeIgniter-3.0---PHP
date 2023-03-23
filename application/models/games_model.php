<?php

class Games_model extends CI_Model {

    public function index(){
     return $this->db->get('games')->result_array();

    }
    public function store($game){
        $this->db->insert("games", $game);
    }
    public function show($id){
        return $this->db->get_where("games", array('id' => $id)) -> row_array();
    }
    public function update($id, $game){
        $this->db->where("id", $id);
        return $this->db->update("games", $game);
    }
    public function destroy($id){
        $this->db->where('id',$id);
        return $this->db->delete("games");
        
    }
}




