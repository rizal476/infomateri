<?php
    $this->load->database(); 
    $nama = $this->input->get('nama');
    $data =  $this->user->get_kelas_by_nama($nama);
    $dt = array(
        'id' => $data[0]['id'],
        'kelas' => $data[0]['kelas'],
        'jumlah' => $data[0]['jumlah']
    );
    echo json_encode($dt);
?>