<body class="bd">
<form method="POST" enctype="multipart/form-data" class="box">
    <h2>ID</h2>
    <input type="number" name="id" placeholder="ID">
    <h2>Nama Kelas</h2>
    <input type="number" name="namak" placeholder="Nama Kelas">
    <h2>Kompetensi</h2>
    <input type="text" name="kopetensi" placeholder="Kopetensi">
    <h2>Tahun Pelajaran</h2>
    <input type="number" name="tp" placeholder="Tahun Pelajaran" min="2010" max="2030">
    <h2>Keterangan</h2>
    <input type="text" name="keterangan" placeholder="Keterangan">
    <br><br>
    <input type="submit" name="konfirmasi" value="Konfirmasi" class="btn">
    <button class="btn"><a href="\sis\editkelas.php">Kembali</a></button>
</form>
</body>
<?php
include 'konek.php';
if (isset($_POST['konfirmasi'])){
    mysqli_query($koneksi, "insert into kelas set id='$_POST[id]', namak='$_POST[namak]', kopetensi='$_POST[kopetensi]', 
    tp='$_POST[tp]', Keterangan='$_POST[keterangan]'");
}
?>