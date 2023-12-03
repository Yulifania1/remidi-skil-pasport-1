<form action="" method="POST" enctype="multipart/form-data">
    <h4>ID SISWA</h4>
    <input type="number" name="id">
    <H4>NAMA SISWA</H4>
    <input type="text" name= "nama"> 
    <H4>TEMPAT TANGGAL LAHIR</H4>
    <input type="text" name= "tplahir">
    <H4>ALAMAT</H4>
    <input type="text" name= "alamat">
    <H4>HOBI</H4>
    <input type="text" name= "hobi">
    <H4>CITA - CITA</H4>
    <input type="text" name= "cita_cita">
    <H4>JUMLAH SAUDARA</H4>
    <input type="number" name= "jm_saudara">
    <H4>ID KELAS</H4>
    <input type="text" name= "idkelas">
    <H4>ID AGAMA</H4>
    <input type="text" name= "idagama"><br><br>
    <input type="submit" name="klik" value="klik">
</form>
<?php 
include "konek.php";
if (isset($_POST["klik"])) {
    mysqli_query($koneksi, "insert into siswa set id ='$_POST[id]', nama='$_POST[nama]',tplahir='$_POST[tplahir]',alamat='$_POST[alamat]',
    hobi='$_POST[hobi]',cita_cita='$_POST[cita_cita]',jm_saudara='$_POST[jm_saudara]',idkelas='$_POST[idkelas]',idagama='$_POST[idagama]'");
}
?>