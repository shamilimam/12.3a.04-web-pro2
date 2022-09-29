<?php

class Belajar extends CI_Controller
{
    public function index()
    {
        echo "ini function index()";
    }
   public function parsing(){
    
      //$data['bio']="nama saya imam";
      $data = array(
         'nama' => "Imam Shamil",
         'pekerjaan' => "Pelajar"
      );
      $this->load->view('view_belajar', $data);
   }
}