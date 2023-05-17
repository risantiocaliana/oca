<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan01</title>
</head>
<body>
    <form name = "latihan01" method="POST" onsubmit="return checkform(this)">

        <div>
            NIM
            <input type="text" id="txNIM" name="NIM">
        </div>
         <div>
            NAMA
            <input type="text" id="txNAMA" name="NAMA">
        </div>
         <div>
           jenis kelamin
            <input type="radio" id="txJKEL" name="JKEL" value="L">laki-laki
             <input type="radio" id="txJKEL" name="JKEL" value="P">PEREMPUAN
        </div>
        <div>
            jurusan
            <select name="JURUSAN" id="txJUR">
                <option value="MTI">MTI</option>
                <option value="SK">SK</option>
                <option value="KAB">KAB</option>
                <option value="DKV">DKV</option>
                <option value="TI_PAR">TI_PAR</option>
            </select>

        </div>
         <div>
            HOBI
            <input type="checkbox"  name="hobi_1">ngedrakor
            <input type="checkbox"  name="hobi_2">scrolltiktok
            <input type="checkbox"  name="hobi_3">menangis
            <input type="checkbox"  name="hobi_4">rebahan
            <input type="checkbox"  name="hobi_5">bermain
            <input type="checkbox"  name="hobi_6">makan
        </div>


        <div>
            <button type="submit"> kirim data </button>
        </div> 

    <script>
        function checkform(frm){
            let F = frm.elements

            let nim = F.namedItem("NIM").value;
            let nama = F.namedItem("NAMA").value;
            let jkel = F.namedItem("JKEL").value;
            let jurusan = F.namedItem("JURUSAN").value;
            let h1 = F. namedItem("hobi_1").checked;
            let h2 = F. namedItem("hobi_2").checked;
            let h3 = F. namedItem("hobi_3").checked;
            let h4 = F. namedItem("hobi_4").checked;
            let h5 = F. namedItem("hobi_5").checked;
            let h6 = F. namedItem("hobi_6").checked;

            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JKEL: "+jkel);
            console.log("JURUSAN: "+jurusan);
            console.log("HOBI ngedrakor: "+h1);
            console.log("HOBI scrolltiktok: "+h2);
            console.log("HOBI menangis: "+h3);
            console.log("HOBI rebahan: "+h4);
            console.log("HOBI bermain: "+h5);
            console.log("HOBI makan: "+h6);
            return false;
        }
    </script>
</body>
</html>