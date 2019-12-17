<?php
    $this->load->database(); 
    $nama = $this->input->get('nama');
    $data =  $this->User->get_matkul_by_nama($nama);
    $dt = array(
        'id_matkul' => $data[0]['id_matkul'],
        'nama_matkul' => $data[0]['nama_matkul'],
        'kode' => $data[0]['kode']
    );
    echo json_encode($dt);
?>