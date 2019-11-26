<?php
    $this->load->database(); 
    $matkul = $this->input->get('matkul');
    $data =  $this->user->get_all_tugasByMatkul($matkul);
    
    for ($i = 0; $i < count($data); $i++){
        $dt[] = [
            'id' => $data[$i]['id'],
            'matkul' => $data[$i]['matkul'],
            'judul' => $data[$i]['judul'],
            'detail' => $data[$i]['detail']
        ];
    };
    echo json_encode($dt, JSON_FORCE_OBJECT);
?>