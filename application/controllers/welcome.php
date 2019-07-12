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
        $where = array(
            'nim' => $nim
        );
        $cek = $this->user->cek_mhs($where)->num_rows();
        if($cek > 0){
            $hasil = $this->user->get_nilai($nim);
            $data_session = array(
                'nama' => $hasil[0]['name'],
                'nim' => $hasil[0]['nim'],
                'nilai' => $hasil[0]['nilai']
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('welcome/hasil_nilai'));
            // echo "halo ",$this->session->userdata("nama");
        }
        else {
            echo "<script>
                    alert('NIM tidak terdaftar, segera lapor admin!');
                    window.location.href='view_nilai';
                </script>";
            // redirect(base_url("welcome"));
        }
    }
}
?>