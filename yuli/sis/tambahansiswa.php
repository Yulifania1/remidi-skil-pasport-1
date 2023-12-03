<body class="bd">
<form method="POST" enctype="multipart/form-data" class="box">
    <h2>ID</h2>
    <input type="number" name="id" placeholder="ID">
    <h2>Nama</h2>
    <input type="text" name="nama" placeholder="Nama">
    <h2>Tempat Lahir</h2>
    <input type="text" name="tl" placeholder="Tempat Lahir">
    <h2>Alamat</h2>
    <input type="text" name="alamat" placeholder="Alamat">
    <h2>Hobi</h2>
    <input type="text" name="hobi" placeholder="Hobi">
    <h2>Cita-cita</h2>
    <input type="text" name="cita" placeholder="Cita-cita">
    <h2>Jumlah Saudara</h2>
    <input type="number" name="jmsaudara" placeholder="Jumlah Saudara">
    <h2>ID Kelas</h2>
    <input type="number" name="idk" placeholder="ID Kelas">
    <h2>ID Agama</h2>
    <input type="number" name="ida" placeholder="ID Agama">
    <br><br>
    <input type="submit" name="konfirmasi" value="Konfirmasi" class="btn">
    <button class="btn"><a href="\sis\editsiswa.php">Kembali</a></button>
</form>
</body>
<?php
include 'konek.php';
if (isset($_POST['konfirmasi'])){
    mysqli_query($koneksi, "insert into siswa set id='$_POST[id]', nama='$_POST[nama]', tplahir='$_POST[tl]',
    alamat='$_POST[alamat]', hobi='$_POST[hobi]', cita_cita='$_POST[cita]', jm_saudara='$_POST[jmsaudara]', idkelas='$_POST[idk]', idagama='$_POST[ida]'");
}
?>