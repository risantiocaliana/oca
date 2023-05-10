<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN 4</title>
</head>
<body>
<form>
        <div>
            alas
            <input type="text" id="txALAS">
        </div>
        <div>
            tinggi
            <input type="text" id="txTINGGI">
        </div>

        <div>
            <button type="button" onclick ="hitung()"> hitung</button>
        </div>

        <script>
        function hitung (){
            let alas = document.getElementById("txALAS").value;
            let tinggi = document.getElementById("txTINGGI").value;
            alert("hasil hitung dari: "+ 2*alas*tinggi );


        }
    </script>

    </form>

    
</body>
</html>