<?php
    function  registerUSER($name, $email, $username, $pass){
    $psn = "insert data gagal";
    $idUSER = md5($email);
    $sql = "INSERT INTO tbUSER(nama, email, username, passkey, idUSER)
    VALUES('$name','$email','$username','$pass','$idUSER' );";
    $koneksi = Mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($koneksi){
        $hsl = mysqli_query($koneksi, $sql);
        if($hsl){
            $psn = "insert data sukses";
        }
    }
    return $psn;

    }