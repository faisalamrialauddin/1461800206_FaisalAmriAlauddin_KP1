<?php

class Main_model extends CI_Model
{
    public function home(){
        $data['judul'] = 'home';
        return $data;
    }

    public function article(){
        $data['judul'] = 'article';
        return $data;
    }

    public function contactus(){
        $data['judul'] = 'Contact Us';
        return $data;
    }
}

?>