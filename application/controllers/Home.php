<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $data = [
      'surah' => get_surah('array')['data']
    ];
    $this->load->view('home', $data, FALSE);
  }

}

/* End of file Home.php */
