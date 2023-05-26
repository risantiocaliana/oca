<?php
    $data[0]["NIM"] = "2201010475";
    $data[0]["NAMA"] = "RISANTI OCALIANA IVA";
    $data[0]["ALAMAT"] = "PANJER DENPASAR SELATAN";
    $data[0]["TTL"] = "2004-04-23";
    $data[0]["JK"] = "P";
    $data[0]["jurusan"] = "TI-PARIWISATA";

    $data[1]["NIM"] = "220101373";
    $data[1]["NAMA"] = "nadia rizky febian";
    $data[1]["ALAMAT"] = "lombok";
    $data[1]["TTL"] = "2004-02-14";
    $data[1]["JK"] = "P";
    $data[1]["jurusan"] = "TI-PARIWISATA";


    $data[2]["NIM"] = "22010100509";
    $data[2]["NAMA"] = "yosephina karolin manul";
    $data[2]["ALAMAT"] = "labuan bajo";
    $data[2]["TTL"] = "2004-08-23";
    $data[2]["JK"] = "P";
    $data[2]["jurusan"] = "TI-PARIWISATA";

    $data[3]["NIM"] = "22010104355";
    $data[3]["NAMA"] = "maria ana renita dia";
    $data[3]["ALAMAT"] = "tabanan";
    $data[3]["TTL"] = "2003-06-18";
    $data[3]["JK"] = "P";
    $data[3]["jurusan"] = "TI-PARIWISATA";

    $data[4]["NIM"] = "2201010737";
    $data[4]["NAMA"] = "pudensiana yasinta kurnia";
    $data[4]["ALAMAT"] = "labuan bajo";
    $data[4]["TTL"] = "2004-01-12";
    $data[4]["JK"] = "P";
    $data[4]["jurusan"] = "TI-PARIWISATA";





    header("conten-type: application/json; charset =utf-8");
    echo json_encode($data);