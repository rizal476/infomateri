<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('user');
        $this->load->library('form_validation');
	}

    public function view_admin_page(){
        $data['matkul'] = $this->user->get_all_matkul();
        $data['kelas'] = $this->user->get_all_kelas();
        $data['mhs'] = $this->user->get_all_mhs();
        $this->load->view('dashboard', $data);
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

    public function view_tambah_kelas($id){
        $data['nama_kelas'] = $this->user->get_nama_kelas();
        $this->load->view('tambah_kelas', $data);
    }

    public function ajax(){
        $this->load->view('autofill-ajax');
    }

    public function ajax_mhs(){
        $this->load->view('autofill_mhs-ajax');
    }

    public function add_kelasMatkul($id_matkul,$id_kelas){
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('view_tambah_kelas');
        }
        else{
            $data = [
                "id_matkul" => $id_matkul,
                "id_kelas" => $id_kelas
            ];
            // $data2 = [];

            $this->user->tambah_kelasMatkul($data);
            redirect(base_url('admin/view_admin_page'));
        }
    }

    public function hapus_kelas($id){
        $this->user->hapus_kelas($id);
        redirect('admin/view_admin_page');
    }

    public function detail_kelas($id_matkul,$id_kelas){
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }

    public function detail_matkul($id){
        $data['id_matkul'] = $id;
        $data['kelas'] = $this->user->get_kelas_by_id($id);
        $this->load->view('kelas',$data);
    }

    public function add_mhsKelas($id_kelas,$id_mhs){

        // var_dump($id_kelas);
        // var_dump($id_mhs);
        $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_mhs',$data);
        }
        else{
            $data = [
                "id_kelas" => $id_kelas,
                "id_mhs" => $id_mhs
            ];
            $this->user->tambah_mhsKelas($data);
        }
        $this->load->view('tambah_mhs',$data);
    }

    public function view_tambah_mhs($id_matkul,$id_kelas){
        $data['id_matkul'] = $id_matkul;
        $data['id_kelas'] = $id_kelas;
        $data['nama_mhs'] = $this->user->get_nama_mhs();
        $this->load->view('tambah_mhs',$data);
    }

    public function total_mhs($id){
        $data = $this->user->get_kelas_by_id($id);
        $q = $this->user->get_total_mhs($data);
        return $q;
    }

    public function view_tambah_matkul(){
        $data['id'] = $this->user->get_last_id_matkul();
        $this->load->view('tambah_matkul', $data);
    }

    public function add_matkul(){
        $this->form_validation->set_rules('nama', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('kode', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_matkul');
        }
        else{
            $data = [
                "id_matkul" => $this->input->post('id',true),
                "nama_matkul" => $this->input->post('nama', true),
                "kode" => $this->input->post('kode', true)
            ];
            $this->user->tambah_matkul($data);
            redirect(base_url('admin/view_tambah_matkul'));
        }
    }

    public function input_tp($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $nim = $this->input->post('nim',true);
            $tp = $this->input->post('tp', true);

            foreach ($nim as $key => $value){
                if ($nim[$key] != ''){
                    $data[] = array(
                        'nim' => $nim[$key],
                        'tp' => $tp[$key]
                    );
                }
            $sql = $this->user->masukkan_nilai($data);
            }
        }
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }

    public function input_tm($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $nim = $this->input->post('nim',true);
            $tm1 = $this->input->post('tm1', true);
            $tm2 = $this->input->post('tm2', true);
            $tm3 = $this->input->post('tm3', true);
            $tm4 = $this->input->post('tm4', true);
            $tm5 = $this->input->post('tm5', true);
            $tm6 = $this->input->post('tm6', true);

            foreach ($nim as $key => $value){
                if ($nim[$key] != ''){
                    $data[] = array(
                        'nim' => $nim[$key],
                        'tm1' => $tm1[$key],
                        'tm2' => $tm2[$key],
                        'tm3' => $tm3[$key],
                        'tm4' => $tm4[$key],
                        'tm5' => $tm5[$key],
                        'tm6' => $tm6[$key]
                    );
                }
            $sql = $this->user->masukkan_nilai($data);
            }
        }
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }

    public function input_p($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $nim = $this->input->post('nim',true);
            $p1 = $this->input->post('p1', true);
            $p2 = $this->input->post('p2', true);
            $p3 = $this->input->post('p3', true);
            $p4 = $this->input->post('p4', true);
            $p5 = $this->input->post('p5', true);
            $p6 = $this->input->post('p6', true);
            $p7 = $this->input->post('p7', true);
            $p8 = $this->input->post('p8', true);
            $p9 = $this->input->post('p9', true);
            $p10 = $this->input->post('p10', true);

            foreach ($nim as $key => $value){
                if ($nim[$key] != ''){
                    $data[] = array(
                        'nim' => $nim[$key],
                        'p1' => $p1[$key],
                        'p2' => $p2[$key],
                        'p3' => $p3[$key],
                        'p4' => $p4[$key],
                        'p5' => $p5[$key],
                        'p6' => $p6[$key],
                        'p7' => $p7[$key],
                        'p8' => $p8[$key],
                        'p9' => $p9[$key],
                        'p10' => $p10[$key]
                    );
                }
            $sql = $this->user->masukkan_nilai($data);
            }
        }
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }

    public function input_k($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $nim = $this->input->post('nim',true);
            $kehadiran = $this->input->post('kehadiran', true);

            foreach ($nim as $key => $value){
                if ($nim[$key] != ''){
                    $data[] = array(
                        'nim' => $nim[$key],
                        'kehadiran' => $kehadiran[$key]
                    );
                }
            $sql = $this->user->masukkan_nilai($data);
            }
        }
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }

    public function input_pre($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $nim = $this->input->post('nim',true);
            $presentasi = $this->input->post('presentasi', true);

            foreach ($nim as $key => $value){
                if ($nim[$key] != ''){
                    $data[] = array(
                        'nim' => $nim[$key],
                        'presentasi' => $presentasi[$key]
                    );
                }
            $sql = $this->user->masukkan_nilai($data);
            }
        }
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }

    public function input_kuis($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $nim = $this->input->post('nim',true);
            $kuis1 = $this->input->post('kuis1', true);
            $kuis2 = $this->input->post('kuis2', true);

            foreach ($nim as $key => $value){
                if ($nim[$key] != ''){
                    $data[] = array(
                        'nim' => $nim[$key],
                        'kuis1' => $kuis1[$key],
                        'kuis2' => $kuis2[$key]
                    );
                }
            $sql = $this->user->masukkan_nilai($data);
            }
        }
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }

    public function input_ujian($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $nim = $this->input->post('nim',true);
            $uts = $this->input->post('uts', true);
            $uas = $this->input->post('uas', true);

            foreach ($nim as $key => $value){
                if ($nim[$key] != ''){
                    $data[] = array(
                        'nim' => $nim[$key],
                        'uts' => $uts[$key],
                        'uas' => $uas[$key]
                    );
                }
            $sql = $this->user->masukkan_nilai($data);
            }
        }
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }

    public function input_aktif($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $nim = $this->input->post('nim',true);
            $pembicara = $this->input->post('pembicara', true);
            $diskusi = $this->input->post('diskusi', true);

            foreach ($nim as $key => $value){
                if ($nim[$key] != ''){
                    $data[] = array(
                        'nim' => $nim[$key],
                        'pembicara' => $pembicara[$key],
                        'diskusi' => $diskusi[$key]
                    );
                }
            $sql = $this->user->masukkan_nilai($data);
            }
        }
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->user->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->user->get_mhs_by_id_kelas($id_kelas);
        $this->load->view('view_detail_kelas',$data);
    }
}
?>