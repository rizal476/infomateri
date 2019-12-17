<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('User');
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
        $cek = $this->User->get_allNilaiMhs($nim);
        // var_dump($hasil);
        if ($cek){
            $data["matkul"] = $this->User->get_all_matkul_mhs($cek);
            $data["mhs"] = $this->User->cek_mhs($nim);
            $this->load->view('hasil_nilai', $data);
        }
        else{
            echo "gada euy nimnya";
        }
    }

    public function ajax(){
        $this->load->view('autofill4-ajax');
    }
}
?>