<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('user');
	}

    public function view_admin_page(){
        $this->load->view('admin_page');
    }

    public function aksi_login(){
        $nidn = $this->input->post('nidn');
        $pass = $this->input->post('password');
        $where = array(
            'nidn' => $nidn,
            'pass' => $pass
        );
        $cek = $this->user->cek_login($where)->num_rows();
        if($cek > 0){
            $hasil = $this->user->get_user($nidn);
            $data_session = array(
                'name' => $hasil[0]['name'],
                'nidn' => $hasil[0]['nidn']
            );
            $this->session->set_userdata($data_session);
            // echo $hasil[0]['name'];
            // echo $this->session->userdata("name");
            redirect(base_url('admin/view_admin_page'));
            // echo "halo ",$this->session->userdata("name");
        }
        else {
            echo "NIDN atau password salah!";
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
?>