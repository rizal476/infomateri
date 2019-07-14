<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('user');
        $this->load->library('form_validation');
	}

    public function view_admin_page(){
        $data['kelas'] = $this->user->get_all_kelas();
        $this->load->view('admin_page', $data);
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

    public function view_tambah_kelas(){
        $this->load->view('tambah_kelas');
    }

    public function add_kelas(){
        $this->form_validation->set_rules('kelas', 'Nama Kelas', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('view_tambah_kelas');
        }
        else{
            $data = [
                "kelas" => $this->input->post('kelas', true),
                "jumlah" => $this->input->post('jumlah', true)
            ];
            $this->user->tambah_kelas($data);
            redirect(base_url('admin/view_admin_page'));
        }
    }

    public function hapus_kelas($id){
        $this->user->hapus_kelas($id);
        redirect('admin/view_admin_page');
    }

    public function detail_kelas($id){
        $data['kelas'] = $this->user->get_kelas_by_id($id);
        $this->load->view('view_detail_kelas',$data);
    }

    public function add_mhs(){
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('detail_kelas');
        }
        else{
            $data = [
                "kelas" => $this->input->post('kelas', true),
                "nama" => $this->input->post('nama', true)
            ];
            $this->user->tambah_mhs($data);
            redirect(base_url('admin/detail_kelas'));
        }
    }

    public function view_tambah_mhs($id){
        $this->load->view('tambah_mhs',$id);
    }

    public function total_mhs($id){
        $data = $this->user->get_kelas_by_id($id);
        $q = $this->user->get_total_mhs($data);
        return $q;
    }
}
?>