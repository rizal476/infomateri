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

    public function cek_jumlah_data($table,$id_matkul){
        if ($id_matkul == 'none'){
            return $this->db->count_all_results($table);
        }
        else{
            $this->db->where('id_matkul',$id_matkul);
            return $this->db->count_all_results($table);
        }
    }

    public function cek_mhs($nim){
        $hasil = $this->db->select('*')->from('mahasiswa')->where('nim',$nim)->get();
        return $hasil->result_array();
    }

    public function get_nilai($nim){
        $hasil = $this->db->select('*')->from('mahasiswa')->where('nim',$nim)->get();
        return $hasil->result_array();
    }

    public function get_all_mhs(){
        $data = $this->db->get('mahasiswa');
        return $data->result_array();
    }

    public function get_all_matkul(){
        $data = $this->db->get('matkul');
        return $data->result_array();
    }

    public function tambah_kelas($data){
        $this->db->insert('kelas',$data);
    }

    public function tambah_buka_kelas($data){
        $this->db->insert('buka_kelas',$data);
    }

    public function tambah_kelasMatkul($data){
        $this->db->insert_batch('mengampu',$data);
    }

    public function tambah_mhsKelasBaru($data){
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        $this->db->insert_batch('mengampu',$data,'id_matkul');
    }

    public function get_all_kelas(){
        $data = $this->db->get('kelas');
        return $data->result_array();
    }

    public function hapus_mhs($id){
        $this->db->where('id',$id);
		return $this->db->delete('mahasiswa');
    }

    public function hapus_matkul($id){
        $q = $this->db->select('*')->from('mengampu');
        if ($q){
            $this->db->where('id_matkul',$id);
            $this->db->delete('mengampu');
        }
        $this->db->where('id_matkul',$id);
		return $this->db->delete('matkul');
    }

    public function hapus_kelas($id){
        $q = $this->db->select('*')->from('mengampu');
        if ($q){
            $this->db->where('id_kelas',$id);
            $this->db->delete('mengampu');
        }
        $q = $this->db->select('*')->from('terdiri');
        if ($q){
            $this->db->where('id_kelas',$id);
            $this->db->delete('terdiri');
        }
        $this->db->where('id',$id);
		return $this->db->delete('kelas');
    }

    public function hapus_kelasMatkul($id_matkul,$id_kelas){
        $this->db->where('id_matkul',$id_matkul);
        $this->db->where('id_kelas',$id_kelas);
        $this->db->delete('mengampu');

        $this->db->where('id_matkul',$id_matkul);
        $this->db->where('id_kelas',$id_kelas);
        $this->db->delete('buka_kelas');
        
    }

    public function cek_kelas($id_kelas){
        $this->db->select('*');
        $this->db->from('buka_kelas');
        $this->db->where('id_kelas', $id_kelas);
        $q = $this->db->get();
        return $q->result_array();
    }

    public function tambah_mhsKelas($data){
        $this->db->insert('terdiri',$data);
    }

    public function get_kelas_by_id($id){
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('buka_kelas', 'kelas.id = buka_kelas.id_kelas');
        $this->db->where('id_matkul', $id);
        $q = $this->db->get();
        return $q->result_array();
    }

    public function get_kelas($id){
        $hasil = $this->db->select('*')->from('kelas')->where('id',$id)->get();
        return $hasil->result_array();
    }

    public function get_mhs_by_id_kelas($id_matkul,$id_kelas){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('mengampu', 'mahasiswa.id = mengampu.id_mhs');
        $this->db->where('id_kelas', $id_kelas);
        $this->db->where('id_matkul', $id_matkul);
        $q = $this->db->get();
        return $q->result_array();
    }

    public function get_mhs_by_id_kelas2($id_kelas){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('terdiri', 'mahasiswa.id = terdiri.id_mhs');
        $this->db->where('id_kelas', $id_kelas);
        $q = $this->db->get();
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

    public function tambah_mhs($data){
        $this->db->insert('mahasiswa',$data);
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

    public function masukkan_nilai($data,$id_matkul){
        // echo "<pre>"; 
        // var_dump($data);
        // echo "</pre>";
        for ($i = 0; $i < count($data); $i++){
            // print_r($data[$i]["id_mhs"]);
            $this->db->where('id_mhs', $data[$i]["id_mhs"]);
            $this->db->where('id_matkul', $id_matkul);
            $this->db->update('mengampu',$data[$i]);

        }
        // return $this->db->update_batch('mengampu' , $data , 'id_mhs' );
    }
    
    public function get_last_id_kelas(){
        $q = $this->db->select_max('id')->from('kelas')->get();
        return $q->result_array();
    }

    public function get_last_id_matkul(){
        $q = $this->db->select_max('id_matkul')->from('matkul')->get();
        return $q->result_array();
    }

    public function get_last_id_mhs(){
        $q = $this->db->select_max('id')->from('mahasiswa')->get();
        return $q->result_array();
    }

    public function get_nama_kelas(){
        $this->db->select('kelas');
        $data = $this->db->get('kelas');
        return $data->result_array();
    }

    public function get_kelas_by_nama($nama){
        $q = $this->db->select('*')->from('kelas')->where('kelas',$nama)->get();
        return $q->result_array();
    }

    public function tambah_mhs_kelas($data){
        $this->db->insert('matkul',$data);
    }

    public function get_nama_mhs(){
        $this->db->select('nama');
        $data = $this->db->get('mahasiswa');
        return $data->result_array();
    }

    public function get_mhs_by_nama($nama){
        $q = $this->db->select('*')->from('mahasiswa')->where('nama',$nama)->get();
        return $q->result_array();
    }

    public function get_last_mhs(){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->limit(1);
        $this->db->order_by('id', 'DESC');
        $q = $this->db->get();
        return $q->result_array();
    }
    
    public function get_all_materiByMatkul($matkul){
        $q = $this->db->select('*')->from('materi')->where('matkul', $matkul)->get();
        return $q->result_array();
    }

    public function tambahMateri($data){
        $this->db->insert('materi',$data);
    }
    
}