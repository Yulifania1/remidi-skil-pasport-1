<body class="bd">
<form method="POST" enctype="multipart/form-data" class="box">
    <h2>ID</h2>
    <input type="number" name="id" placeholder="ID">
    <h2>Nama Agama</h2>
    <input type="text" name="namaA" placeholder="Nama Agama">
    <br><br>
    <input type="submit" name="konfirmasi" value="Konfirmasi" class="btn">
    <button class="btn"><a href="\sis\editagama.php">Kembali</a></button>
</form>
</body>
<?php
include 'konek.php';
if (isset($_POST['konfirmasi'])){
    mysqli_query($koneksi, "insert into agama set idagama='$_POST[id]', nm_agama='$_POST[namaA]'");
}
?>