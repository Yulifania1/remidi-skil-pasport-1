<form action="" method="POST" enctype="multipart/form-data">
    <h4>ID SISWA</h4>
    <input type="number" name="id">
    <H4>NAMA KELAS</H4>
    <input type="text" name= "namakelas"> 
    <H4>KOMPETENSI</H4>
    <input type="text" name="kopetensi">
    <H4>TAHUN PELAJARAN</H4>
    <input type="text" name= "tahun_pelajaran">
    <H4>KETERANGAN</H4>
    <input type="text" name= "keterangan"><br><br>
    <input type="submit" name="klik" value="klik">
</form>
<?php 
include "konek.php";
if (isset($_POST["klik"])) {
    mysqli_query($koneksi, "insert into kelas set id ='$_POST[id]', namakelas='$_POST[namakelas]',kopetensi='$_POST[kopetensi]'
    ,tahun_pelajaran='$_POST[tahun_pelajaran]',keterangan='$_POST[keterangan]'");
}
?>