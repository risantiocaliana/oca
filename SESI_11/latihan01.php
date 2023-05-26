<?php
    $data["NIM"] = "2201010475";
    $data["NAMA"] = "RISANTI OCALIANA IVA";
    $data["ALAMAT"] = "PANJER DENPASAR SELATAN";
    $data["TTL"] = "2004-04-23";
    $data["JK"] = "P";
    $data["jurusan"] = "TI-PARIWISATA";

    header("conten-type: application/json; charset =utf-8");
    echo json_encode($data);