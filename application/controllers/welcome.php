<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('user');
	}

    public function index(){
        $this->load->view('start');
    }

    public function view_login(){
        $this->load->view('login');
    }
    public function view_nilai(){
        $this->load->view('nilai');
    }

    public function hasil_nilai(){
        $this->load->view('hasil_nilai');
    }

    public function search_nilai(){
        $nim = $this->input->post('nim');
        $hasil = $this->user->get_allNilaiMhs($nim);
        var_dump($hasil);
        $this->load->view('hasil_nilai');
    }
}
?>