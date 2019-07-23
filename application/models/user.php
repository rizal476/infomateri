<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {
    public function cek_login($data){
        return $this->db->get_where('admin',$data); 
    }

    public function get_user($nidn){
        $hasil = $this->db->select('*')->from('admin')->where('nidn',$nidn)->get();
        return $hasil->result_array();
    }

    public function cek_mhs($nim){
        return $this->db->get_where('mahasiswa',$nim); 
    }

    public function get_nilai($nim){
        $hasil = $this->db->select('*')->from('mahasiswa')->where('nim',$nim)->get();
        return $hasil->result_array();
    }

    public function get_all_mhs(){
        $data = $this->db->get('mahasiswa');
        return $data->result_array();
    }

    public function tambah_kelas($data){
        $this->db->insert('kelas',$data);
    }

    public function get_all_kelas(){
        $data = $this->db->get('kelas');
        return $data->result_array();
    }

    public function hapus_kelas($id){
        $this->db->where('id',$id);
		return $this->db->delete('kelas');
    }

    public function tambah_mhs($data){
        $this->db->insert('mahasiswa',$data);
    }

    public function get_kelas_by_id($id){
        $q = $this->db->select('*')->from('kelas')->where('id',$id)->get();
        return $q->result_array();
    }

    public function get_total_mhs($kelas){
        $q = $this->db->count_all('mahasiswa')->where('kelas',$kelas[0]['kelas']);
        return $q->result_array();
    }

    public function get_mhs_by_kelas($kelas){
        $q = $this->db->select('*')->from('mahasiswa')->where('kelas',$kelas)->get();
        return $q->result_array();
    }

    public function tambah_matkul($data){
        $this->db->insert('matkul',$data);
    }

    public function tampil_data_chained($id)
    {
        $query = $this->db->query("SELECT * FROM mahasiswa where id_pelanggan = '$id'");
        return $query;
    }

    public function get_matkul_by_kelas($id)
	{
		$query = $this->db->select('*')->from('matkul')->where('id_kelas',$id)->get();
		return $query;
    }
    
    public function get_matkul_by_id($id){
        $q = $this->db->select('*')->from('matkul')->where('id_matkul',$id)->get();
        return $q->result_array();
    }
}