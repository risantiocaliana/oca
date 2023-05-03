<?php
    include ("konfigurasi.php");
    $cnn = mysqli_connect (DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("gagal koneksi ke dbms");


    $Jdpage = "list";
    $page = "user-list.php";

    if(isset($_GET["OPSI"])){
        switch($_GET["OPSI"]){
            case "store":
                $p1 = $_POST["txPASS1"];
                $p2 = $_POST["txPASS2"];
                if($p1 == $p2){
                    $name = $_POST["txNAME"];
                    $email = $_POST["txEMAIL"];
                    $username= $_POST["txUSERNAME"];
                    $iduser = md5 ($email);
                
$sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser) value('$nama', '$email', '$username', '$p1', '$iduser');";
$hasil = mysqli_query($cnn, $sql);

                }
                break;
    
        }
    }
    if(isset($_GET["aksi"])){
        switch($_GET["aksi"]){
            case"new":
                $page="user-new.php";
                $Jdpage= "tambah";

                break;
            case "edit":
                break;
            case "del":
                break;
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?Jdpage?> - tabel user</title>
</head>
<body>
<?php
    include ("$page");
?>

</body>
</html>