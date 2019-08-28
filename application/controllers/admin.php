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
        $data['mahasiswa'] = $this->user->get_mhs_by_kelas($data['kelas'][0]['kelas']);
        $this->load->view('view_detail_kelas',$data);
    }

    public function add_mhs($id_kelas){

        $id_matkul = $this->input->post('matkul');
        $data['datakelas'] = $this->user->get_kelas_by_id($id_kelas);
        $datamatkul = $this->user->get_matkul_by_id($id_matkul);
        $data['dropdown'] = $this->user->get_matkul_by_kelas($id_kelas);

        $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required');
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('matkul', 'Matkul', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_mhs',$data);
        }
        else{
            $datas = [
                "kelas" => $this->input->post('kelas', true),
                "nim" => $this->input->post('nim', true),
                "nama" => $this->input->post('nama', true),
                "id_matkul" => $datamatkul[0]['id_matkul'],
                "matkul" => $datamatkul[0]['nama_matkul']
            ];
            $this->user->tambah_mhs($datas);
        }
        $this->load->view('tambah_mhs',$data);
    }

    public function view_tambah_mhs($id){
        $data['datakelas'] = $this->user->get_kelas_by_id($id);
        $data['dropdown'] = $this->user->get_matkul_by_kelas($id);
        // var_dump($data['datakelas'][0]['kelas']);
        $this->load->view('tambah_mhs',$data);
    }

    public function total_mhs($id){
        $data = $this->user->get_kelas_by_id($id);
        $q = $this->user->get_total_mhs($data);
        return $q;
    }

    public function view_tambah_matkul($id){
        $data['datakelas'] = $this->user->get_kelas_by_id($id);
        $this->load->view('tambah_matkul',$data);
    }

    public function add_matkul($id_kelas){
        $this->form_validation->set_rules('matkul', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_matkul');
        }
        else{
            $data = [
                "id_kelas" => $id_kelas,
                "nama_matkul" => $this->input->post('matkul', true),
                "kode" => $this->input->post('kode', true)
            ];
            $this->user->tambah_matkul($data);
            redirect(base_url('admin/view_admin_page'));
        }
    }

    public function insert_nilai(){
        // $data = [
        //     "tp" => $this->input->post('tp', true),,
        //     "tm1" => $this->input->post('tm1', true),
        //     "tm2" => $this->input->post('tm2', true),
        //     "tm3" => $this->input->post('tm3', true),
        //     "tm4" => $this->input->post('tm4', true),
        //     "tm5" => $this->input->post('tm5', true),
        //     "tm6" => $this->input->post('tm6', true),
        //     "tm7" => $this->input->post('tm7', true),
        //     "tm8" => $this->input->post('tm8', true),
        //     "tm9" => $this->input->post('tm9', true),
        //     "tm10" => $this->input->post('tm10', true),
        //     "p1" => $this->input->post('p1', true),
        //     "p2" => $this->input->post('p2', true),
        //     "p3" => $this->input->post('p3', true),
        //     "p4" => $this->input->post('p4', true),
        //     "p5" => $this->input->post('p5', true),
        //     "p6" => $this->input->post('p6', true),
        //     "p7" => $this->input->post('p7', true),
        //     "p8" => $this->input->post('p8', true),
        //     "p9" => $this->input->post('p9', true),
        //     "p10" => $this->input->post('p10', true),
        //     "kehadiran" => $this->input->post('kehadiran', true),
        //     "presentasi" => $this->input->post('presentasi', true),
        //     "kuis1" => $this->input->post('kuis1', true),
        //     "kuis2" => $this->input->post('kuis2', true),
        //     "uts" => $this->input->post('uts', true),
        //     "uas" => $this->input->post('uas', true),
        //     "pembicara" => $this->input->post('pembicara', true),
        //     "diskusi" => $this->input->post('diskusi', true)
        // ];
    }
}
?>