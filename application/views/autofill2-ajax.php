<?php
    $this->load->database(); 
    $matkul = $this->input->get('matkul');
    $data =  $this->User->get_all_materiByMatkul($matkul);
    
    for ($i = 0; $i < count($data); $i++){
        $dt[] = [
            'id_materi' => $data[$i]['id_materi'],
            'matkul' => $data[$i]['matkul'],
            'judul' => $data[$i]['judul'],
            'detail' => $data[$i]['detail']
        ];
    };
    echo json_encode($dt, JSON_FORCE_OBJECT);
?>