<?php

 function permission() {
    $ci = get_instance();
    $loggeduser = $ci->session->userdata("logged_user");
    if(!$loggeduser) {
        $ci->session->set_flashdata("danger", "Você precisa estar logado para acessar essa página.");
        redirect("login");
    }
    return $loggeduser;
}