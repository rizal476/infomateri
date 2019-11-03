<?php
    $this->load->database(); 
    $nama = $this->input->get('nama');
    $data =  $this->user->get_mhs_by_nama($nama);
    $dt = array(
        'id' => $data[0]['id'],
        'nim' => $data[0]['nim'],
        'nama' => $data[0]['nama']
    );
    echo json_encode($dt);
?>