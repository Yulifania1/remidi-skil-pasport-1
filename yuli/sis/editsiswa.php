<body>
<form method="POST" enctype="multipart/form-data" class="box">
    <h2>ID</h2>
    <input type="number" name="id" placeholder="ID" value=<?php echo isset($row['id']) ? $row['id'] : '';?>>
    <h2>Nama</h2>
    <input type="text" name="nama" placeholder="Nama" value=<?php echo  isset($row['nama']) ? $row['nama'] : '';?>>
    <h2>Tempat Lahir</h2>
    <input type="text" name="tl" placeholder="Tempat Lahir" value=<?php echo  isset($row['tplahir']) ? $row['tplahir'] : '';?>>
    <h2>Alamat</h2>
    <input type="text" name="alamat" placeholder="Alamat" value=<?php echo  isset($row['alamat']) ? $row['alamat'] : '';?>>
    <h2>Hobi</h2>
    <input type="text" name="hobi" placeholder="Hobi" value=<?php echo  isset($row['hobi']) ? $row['hobi'] : '';?>>
    <h2>Cita-cita</h2>
    <input type="text" name="cita" placeholder="Cita-cita" value=<?php echo  isset($row['cita_cita']) ? $row['cita_cita'] : '';?>>
    <h2>Jumlah Saudara</h2>
    <input type="number" name="jmsaudara" placeholder="Jumlah Saudara" value=<?php echo  isset($row['jm_saudara']) ? $row['jm_saudara'] : '';?>>
    <h2>ID Kelas</h2>
    <input type="number" name="idk" placeholder="ID Kelas" value=<?php echo  isset($row['idkelas']) ? $row['idkelas'] : '';?>>
    <h2>ID Agama</h2>
    <input type="number" name="ida" placeholder="ID Agama" value=<?php echo  isset($row['idagama']) ? $row['idagama'] : '';?>>
    <br><br>
    <input type="submit" name="konfirmasi" value="Konfirmas" class="btn">
    <button class="btn"><a href="\sis\tampildata.php">Kembali</a></button>
</form>
</body>
<?php
include 'konek.php';
if (isset($_POST['konfirmasi'])){
    mysqli_query($koneksi, "update siswa set id='$_POST[id]', nama='$_POST[nama]', tplahir='$_POST[tl]',  
    alamat='$_POST[alamat]', hobi='$_POST[hobi]', cita_cita='$_POST[cita]', jm_saudara='$_POST[jmsaudara]', idkelas='$_POST[idk]', idagama='$_POST[ida]'
    where id= $_GET[id]");
}
?>