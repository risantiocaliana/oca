<h3> tambah data user</h3>
<form method="POST" action="tbuser.php">
    <input type="hidden" name="opsi" value="store">

    <div>
        nama lengkap
        <input type="text" name="txNAMA">

    </div>
   
    <div>
        email
        <input type="email" name="txEMAIL">

    </div>

    <div>
        username
        <input type="username" name="txNAME">

    </div>  <div>
        password
        <input type="password" name="txPASS1">

    </div>
    <div>
        verifikasi 
        <input type="password" name="txPASS2">
    </div>

    <button type="submit"> buat data user </button>

</form>