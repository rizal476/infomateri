<?php
    $this->load->database(); 
    $matkul = $this->input->get('matkul');
    $nim = $this->input->get('nim');
    // var_dump($matkul);
    $data =  $this->User->get_all_nilai_by_matkul($matkul,$nim);
    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";
   
    $dt = array(
        'id' => $data[0]['id'],
        'id_matkul' => $data[0]['id_matkul'],
        'id_kelas' => $data[0]['id_kelas'],
        'id_mhs' => $data[0]['id_mhs'],
        'nim' => $data[0]['nim'],
        'tp' => $data[0]['tp'],
        'tm1' => $data[0]['tm1'],
        'tm2' => $data[0]['tm2'],
        'p1' => $data[0]['p1'],
        'p2' => $data[0]['p2'],
        'p3' => $data[0]['p3'],
        'p4' => $data[0]['p4'],
        'p5' => $data[0]['p5'],
        'p6' => $data[0]['p6'],
        'p7' => $data[0]['p7'],
        'p8' => $data[0]['p8'],
        'kuis1' => $data[0]['kuis1'],
        'kuis2' => $data[0]['kuis2'],
        'kehadiran' => $data[0]['kehadiran'],
        'presentasi' => $data[0]['presentasi'],
        'uts' => $data[0]['uts'],
        'uas' => $data[0]['uas'],
        'pembicara' => $data[0]['pembicara'],
        'diskusi' => $data[0]['diskusi'],
        'nama_matkul' => $data[0]['nama_matkul'],
        'kode' => $data[0]['kode']
    );

    // $temp = json_encode($dt);
    // var_dump($temp);

    echo json_encode($dt);
?>