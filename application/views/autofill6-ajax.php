<?php
    $this->load->database(); 
    $nama = $this->input->get('nama');
    $data =  $this->User->get_dosen_by_nama($nama);
    $dt = array(
        'id' => $data[0]['id'],
        'nidn' => $data[0]['nidn']
    );
    echo json_encode($dt);
?>