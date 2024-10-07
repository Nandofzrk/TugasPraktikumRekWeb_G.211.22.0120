<?php

$data = array(
    "nama" => "Dimas Nando Firzaki",
    "usia" => 20,
    "pekerjaan" => "Mahasiswa",
    "NIM" => "G.211.22.0120"
);

$json_data = json_encode($data);

echo $json_data;
?>