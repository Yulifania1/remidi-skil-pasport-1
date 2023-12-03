</style>
<?php 
include 'konek.php';
if (isset($_GET['id'])) {
    $data = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id = '$_GET[id]'");
    $row = mysqli_fetch_assoc($data);
}
?>
<body class="bd">
<form method="POST" enctype="multipart/form-data" class="box">
    <h2>ID</h2>
    <input type="number" name="id" placeholder="ID" value=<?php echo isset($row['id']) ? $row['id'] : '';?> readonly>
    <h2>Nama Kelas</h2>
    <input type="text" name="nama" placeholder="Nama Kelas" value=<?php echo isset($row['namakelas']) ? $row['namakelas'] : '';?>>
    <h2>Kompetensi</h2>
    <input type="text" name="kopetensi" placeholder="Kompetensi" value=<?php echo isset($row['kopetensi']) ? $row['kopetensi'] : '';?>>
    <h2>Tahun Pelajaran</h2>
    <input type="number" name="tp" placeholder="Tahun Pelajaran" min="2010" max="2030" value=<?php echo isset($row['tahun_pelajaran']) ? $row['tahun_pelajaran'] : '';?>>
    <h2>Keterangan</h2>
    <input type="text" name="keterangan" placeholder="Keterangan" value=<?php echo isset($row['keterangan']) ? $row['keterangan'] : '';?>>
    <br><br>
    <input type="submit" name="konfirmasi" value="Konfirmasi" class="btn">
    <button class="btn"><a href="\ukksatria\tampildata.php">Kembali</a></button>
</form>
</body>
<?php
include 'konek.php';
if (isset($_POST['konfirmasi'])){
    mysqli_query($koneksi, "update kelas set namakelas='$_POST[nama]', kopetensi='$_POST[Kopetensi]', 
    tahun_pelajaran='$_POST[tp]', keterangan='$_POST[Keterangan]' where id= $_GET[id]");
}
?>