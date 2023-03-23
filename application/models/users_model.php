<?php
 
class Users_model extends CI_Model{

    public function index(){
        return $this->db->get('users')->result_array();
    }
    public function store($user){
        $this->db->insert("users", $user);
    }
}