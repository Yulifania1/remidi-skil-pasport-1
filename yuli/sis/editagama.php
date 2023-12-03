<form action="" method="POST" enctype="multipart/form-data">
    <h3>ID AGAMA</h3>
    <input type="number" name="id">
    <h3>NAMA AGAMA</h3>
    <input type="text" name= "nm_agama"> <br><br>
    <input type="submit" name="klik" value="klik">
</form>
<?php 
include "konek.php";
if (isset($_POST["klik"])) {
    mysqli_query($koneksi, "update agama set id ='$_POST[id]', nm_agama='$_POST[nm_agama]' where id = $_GET[id]");
}
?>