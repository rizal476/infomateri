<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('User');
        $this->load->library('form_validation');
	}

    public function view_admin_page(){
        $data['matkul'] = $this->User->get_all_matkul2($this->session->userdata("nidn"));
        $data['kelas'] = $this->User->get_all_kelas();
        $data['mhs'] = $this->User->get_all_mhs();
        $data['materi'] = $this->User->get_all_materi();
        $data['info'] = $this->User->get_all_info();
        $data['tugas'] = $this->User->get_all_tugas();
        $this->load->view('dashboard', $data);
    }

    public function aksi_login(){
        $nidn = $this->input->post('nidn');
        $pass = $this->input->post('password');
        $where = array(
            'nidn' => $nidn,
            'pass' => $pass
        );
        $cek = $this->User->cek_login($where)->num_rows();
        if($cek > 0){
            $hasil = $this->User->get_user($nidn);
            $data_session = array(
                'name' => $hasil[0]['name'],
                'nidn' => $hasil[0]['nidn']
            );
            $this->session->set_userdata($data_session);
            // echo $hasil[0]['name'];
            // echo $this->session->userdata("name");
            redirect(base_url('Admin/view_admin_page'));
            // echo "halo ",$this->session->userdata("name");
        }
        else {
            echo "<script>
                alert('NIDN atau password salah');
                window.location.href='" . base_url('Welcome/view_login') . "';
                </script>";
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }

    public function view_tambah_mhs(){
        $data['id'] = $this->User->get_last_id_mhs();
        $this->load->view('tambah_mhs', $data);
    }

    public function view_tambah_kelas(){
        $data['id'] = $this->user->get_last_id_kelas();
        $this->load->view('tambah_kelas', $data);
    }

    public function view_tambah_kelasMatkul($id){
        $data['nama_kelas'] = $this->User->get_nama_kelas();
        $this->load->view('tambah_kelasMatkul', $data);
    }

    public function ajax(){
        $this->load->view('autofill-ajax');
    }

    public function ajax_mhs(){
        $this->load->view('autofill_mhs-ajax');
    }

    public function ajax_matkul(){
        $this->load->view('autofill5-ajax');
    }

    public function add_kelas(){
        $this->form_validation->set_rules('nama', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('jumlah', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_kelas');
        }
        else{
            $data = [
                "id" => $this->input->post('id',true),
                "kelas" => $this->input->post('nama', true),
                "jumlah" => $this->input->post('jumlah', true)
            ];
            $this->user->tambah_kelas($data);
            redirect(base_url('Admin/view_tambah_kelas'));
        }
    }

    public function add_kelasMatkul($id_matkul,$id_kelas){
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Mahasiswa', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_kelasMatkul');
        }
        else{
            $mahasiswa = $this->User->get_mhs_by_id_kelas2($id_kelas);
            
            for ($i = 0; $i < count($mahasiswa); $i++){
                // var_dump($mahasiswa[$i]["id"]);
                $data[] = [
                    'id_matkul' => $id_matkul,
                    'id_kelas' => $id_kelas,
                    'id_mhs' => $mahasiswa[$i]["id"],
                    'nim' => $mahasiswa[$i]["nim"],
                    'nidn' => $this->session->userdata("nidn")
                ];
            }
            // echo "<pre>";
            // var_dump($data);
            // echo "</pre>";
            $dataBuka["id_matkul"] = $id_matkul; 
            $dataBuka["id_kelas"] = $id_kelas;
            // var_dump($dataBuka);
            $this->User->tambah_kelasMatkul($data);
            $this->User->tambah_buka_kelas($dataBuka);
            redirect(base_url('Admin/view_admin_page'));
        }
    }

    public function hapus_kelas($id){
        $this->User->hapus_kelas($id);
        redirect('Admin/view_admin_page');
    }

    public function hapus_kelasMatkul($id_matkul,$id_kelas){
        $this->User->hapus_kelasMatkul($id_matkul,$id_kelas);
        redirect('Admin/detail_matkul/'.$id_matkul);
    }

    public function hapus_matkul($id){
        $this->User->hapus_matkul($id);
        redirect('Admin/view_admin_page');
    }

    public function hapus_mhs($id){
        $this->User->hapus_mhs($id);
        redirect('Admin/view_admin_page');
    }

    public function detail_kelas($id_matkul,$id_kelas){
        // var_dump($id_kelas);
        $data['id_matkul'] = $id_matkul;
        $data['kelas'] = $this->User->get_kelas_by_id($id_kelas);
        $data['mahasiswa'] = $this->User->get_mhs_by_id_kelas($id_matkul,$id_kelas);
        // var_dump($data['kelas']);
        $this->load->view('view_detail_kelas',$data);
    }

    public function detail_kelasUmum($id_kelas){
        $data['kelas'] = $this->User->get_kelas($id_kelas);
        $data['mahasiswa'] = $this->User->get_mhs_by_id_kelas2($id_kelas);
        $this->load->view('view_detail_kelasUmum',$data);
    }

    public function detail_matkul($id){
        $data['id_matkul'] = $id;
        $data['kelas'] = $this->User->get_kelas_by_id($id);
        $this->load->view('kelas',$data);
    }

    public function add_mhsKelas($id_kelas,$id_mhs){
        $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->view_tambah_mhsKelas($id_kelas);
        }
        else{
            $data = [
                "id_kelas" => $id_kelas,
                "id_mhs" => $id_mhs
            ];
            $this->User->tambah_mhsKelas($data);
            $hasil = $this->User->cek_kelas($id_kelas);
            // echo "<pre>";
            // var_dump($hasil);
            // print_r($hasil[0]["id_matkul"]);
            // print_r($hasil[1]["id_matkul"]);
            // echo "</pre>";
            if ($hasil){
                $last = $this->User->get_last_mhs();
                // echo "<pre>";
                // var_dump($last);
                // echo "</pre>";
                for ($i = 0; $i < count($hasil); $i++){
                    $result[] = array(
                        "id_matkul" => $hasil[$i]["id_matkul"],
                        "id_kelas" => $id_kelas,
                        "id_mhs" => $id_mhs,
                        "nim" => $last[0]["nim"]
                    );
                }
                // echo "<pre>";
                // var_dump($result);
                // echo "</pre>";
                $this->User->tambah_mhsKelasBaru($result);
            }
        }
        redirect(base_url('Admin/view_tambah_mhsKelas/'.$id_kelas));
    }

    public function view_tambah_mhsKelas($id_kelas){
        $data['id_kelas'] = $id_kelas;
        $data['nama_mhs'] = $this->User->get_nama_mhs();
        $this->load->view('tambah_mhsKelas',$data);
    }

    public function total_mhs($id){
        $data = $this->User->get_kelas_by_id($id);
        $q = $this->User->get_total_mhs($data);
        return $q;
    }

    public function view_tambah_matkul(){
        $data['nama_matkul'] = $this->User->get_nama_matkul();
        $this->load->view('tambah_matkul', $data);
    }

    public function add_matkul($nidn){
        // $this->form_validation->set_rules('nama', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('kode', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_matkul');
        }
        else{
            $data = [
                "nidn" => $this->session->userdata("nidn"),
                "kode_mk" => $this->input->post('kode', true)
            ];
            $this->User->tambah_matkul($data);
            redirect(base_url('Admin/view_tambah_matkul'));
        }
    }

    public function add_mhs(){
        $this->form_validation->set_rules('nim', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('nama', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_mhs');
        }
        else{
            $data = [
                "id" => $this->input->post('id',true),
                "nim" => $this->input->post('nim', true),
                "nama" => $this->input->post('nama', true)
            ];
            $this->User->tambah_mhs($data);
            redirect(base_url('Admin/view_tambah_mhs'));
        }
    }

    public function input_tp($id_matkul,$id_kelas){
        $result = array();
        $data = array();
        if ($this->input->post('submit', TRUE) == 'submit') {
            $id = $this->input->post('id',true);
            $tp = $this->input->post('tp', true);
            foreach ($id as $key => $value){
                if ($id[$key] != ''){
                    $data[] = array(
                        'id_mhs' => $id[$key],
                        'tp' => $tp[$key]
                    );
                }
            }
            // var_dump($data);
            $sql = $this->User->masukkan_nilai($data,$id_matkul);
        }
        redirect(base_url('Admin/detail_kelas/'.$id_matkul.'/'.$id_kelas));
    }

    public function input_tm($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $id = $this->input->post('id',true);
            $tm1 = $this->input->post('tm1', true);
            $tm2 = $this->input->post('tm2', true);

            foreach ($id as $key => $value){
                if ($id[$key] != ''){
                    $data[] = array(
                        'id_mhs' => $id[$key],
                        'tm1' => $tm1[$key],
                        'tm2' => $tm2[$key]
                    );
                }
            $sql = $this->User->masukkan_nilai($data,$id_matkul);
            }
        }
        redirect(base_url('Admin/detail_kelas/'.$id_matkul.'/'.$id_kelas));
    }

    public function input_p($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $id = $this->input->post('id',true);
            $p1 = $this->input->post('p1', true);
            $p2 = $this->input->post('p2', true);
            $p3 = $this->input->post('p3', true);
            $p4 = $this->input->post('p4', true);
            $p5 = $this->input->post('p5', true);
            $p6 = $this->input->post('p6', true);
            $p7 = $this->input->post('p7', true);
            $p8 = $this->input->post('p8', true);

            foreach ($id as $key => $value){
                if ($id[$key] != ''){
                    $data[] = array(
                        'id_mhs' => $id[$key],
                        'p1' => $p1[$key],
                        'p2' => $p2[$key],
                        'p3' => $p3[$key],
                        'p4' => $p4[$key],
                        'p5' => $p5[$key],
                        'p6' => $p6[$key],
                        'p7' => $p7[$key],
                        'p8' => $p8[$key]
                    );
                }
            $sql = $this->User->masukkan_nilai($data,$id_matkul);
            }
        }
        redirect(base_url('Admin/detail_kelas/'.$id_matkul.'/'.$id_kelas));
    }

    public function input_k($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $id = $this->input->post('id',true);
            $kehadiran = $this->input->post('kehadiran', true);

            foreach ($id as $key => $value){
                if ($id[$key] != ''){
                    $data[] = array(
                        'id_mhs' => $id[$key],
                        'kehadiran' => $kehadiran[$key]
                    );
                }
            $sql = $this->User->masukkan_nilai($data,$id_matkul);
            }
        }
        redirect(base_url('Admin/detail_kelas/'.$id_matkul.'/'.$id_kelas));
    }

    public function input_pre($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $id = $this->input->post('id',true);
            $presentasi = $this->input->post('presentasi', true);

            foreach ($id as $key => $value){
                if ($id[$key] != ''){
                    $data[] = array(
                        'id_mhs' => $id[$key],
                        'presentasi' => $presentasi[$key]
                    );
                }
            $sql = $this->User->masukkan_nilai($data,$id_matkul);
            }
        }
        redirect(base_url('Admin/detail_kelas/'.$id_matkul.'/'.$id_kelas));
    }

    public function input_kuis($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $id = $this->input->post('id',true);
            $kuis1 = $this->input->post('kuis1', true);
            $kuis2 = $this->input->post('kuis2', true);

            foreach ($id as $key => $value){
                if ($id[$key] != ''){
                    $data[] = array(
                        'id_mhs' => $id[$key],
                        'kuis1' => $kuis1[$key],
                        'kuis2' => $kuis2[$key]
                    );
                }
            $sql = $this->User->masukkan_nilai($data,$id_matkul);
            }
        }
        redirect(base_url('Admin/detail_kelas/'.$id_matkul.'/'.$id_kelas));
    }

    public function input_ujian($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $id = $this->input->post('id',true);
            $uts = $this->input->post('uts', true);
            $uas = $this->input->post('uas', true);

            foreach ($id as $key => $value){
                if ($id[$key] != ''){
                    $data[] = array(
                        'id_mhs' => $id[$key],
                        'uts' => $uts[$key],
                        'uas' => $uas[$key]
                    );
                }
            $sql = $this->User->masukkan_nilai($data,$id_matkul);
            }
        }
        redirect(base_url('Admin/detail_kelas/'.$id_matkul.'/'.$id_kelas));
    }

    public function input_aktif($id_matkul,$id_kelas){
        if ($this->input->post('submit', TRUE) == 'submit') {
            $id = $this->input->post('id',true);
            $pembicara = $this->input->post('pembicara', true);
            $diskusi = $this->input->post('diskusi', true);

            foreach ($id as $key => $value){
                if ($id[$key] != ''){
                    $data[] = array(
                        'id_mhs' => $id[$key],
                        'pembicara' => $pembicara[$key],
                        'diskusi' => $diskusi[$key]
                    );
                }
            $sql = $this->User->masukkan_nilai($data,$id_matkul);
            }
        }
        redirect(base_url('Admin/detail_kelas/'.$id_matkul.'/'.$id_kelas));
    }

    public function view_materi(){
        $data['matkul'] = $this->User->get_all_matkul();
        $this->load->view('materi',$data);
    }

    public function ajax2(){
        $this->load->view('autofill2-ajax');
    }

    public function tambah_materi(){
        $data['matkul'] = $this->User->get_all_matkul();
        $this->load->view('tambah_materi',$data);
    }

    public function tambahMateri(){

        $this->form_validation->set_rules('id', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('judul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('detail', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_materi');
        }
        else{
            $data = [
                "matkul" => $this->input->post('id',true),
                "judul" => $this->input->post('judul', true),
                "detail" => $this->input->post('detail', true)
            ];
            $this->User->tambahMateri($data);
            redirect(base_url('Admin/tambah_materi'));
        }
    }

    public function view_info(){
        $data['info'] = $this->User->get_all_info();
        $this->load->view('kpta',$data);
    }

    public function tambah_info(){
        $this->load->view('tambah_kpta');
    }

    public function tambahInfo(){
        $this->form_validation->set_rules('judul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('detail', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('link', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_info');
        }
        else{
            $data = [
                "judul" => $this->input->post('judul',true),
                "detail" => $this->input->post('detail', true),
                "link" => $this->input->post('link', true)
            ];
            $this->User->tambahInfo($data);
            redirect(base_url('Admin/tambah_info'));
        }
    }

    public function view_tugas(){
        $data['matkul'] = $this->User->get_all_matkul();
        $this->load->view('tugas',$data);
    }

    public function tambah_tugas(){
        $data['matkul'] = $this->User->get_all_matkul();
        $this->load->view('tambah_tugas', $data);
    }

    public function tambahTugas(){
        $this->form_validation->set_rules('matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('judul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('detail', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('link', 'Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('tambah_tugas');
        }
        else{
            $data = [
                "matkul" => $this->input->post('matkul',true),
                "judul" => $this->input->post('judul',true),
                "detail" => $this->input->post('detail', true),
                "link" => $this->input->post('link', true)
            ];
            // var_dump($data);
            $this->User->tambahTugas($data);
            redirect(base_url('Admin/tambah_tugas'));
        }
    }

    public function ajax3(){
        $this->load->view('autofill3-ajax');
    }
}
?>