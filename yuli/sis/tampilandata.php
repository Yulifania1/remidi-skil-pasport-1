<body>
<div class="box">
<table border="2px white solid">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Alamat</th>
        <th>Hobi</th>
        <th>Cita-cita</th>
        <th>Jumlah Saudara</th>
        <th>ID Kelas</th>
        <th>ID Agama</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php
    include 'konek.php';
    $data = mysqli_query($koneksi, "select * from siswa");
    while ($tam = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $tam['id'] ?></td>
        <td><?php echo $tam['nama'] ?></td>
        <td><?php echo $tam['tplahir'] ?></td>
        <td><?php echo $tam['alamat'] ?></td>
        <td><?php echo $tam['hobi'] ?></td>
        <td><?php echo $tam['cita_cita'] ?></td>
        <td><?php echo $tam['jm_saudara'] ?></td>
        <td><?php echo $tam['idkelas'] ?></td>
        <td><?php echo $tam['idagama'] ?></td>
        <?php
        echo "<td><a href='\sis/editsiswa.php?id=$tam[id]'>Edit</a></td>
        <td><a href=?id=$tam[id]>Hapus</a></td>"
        ;
        ?>
   </tr>
    <?php }?>
</table>
<table border="2px white solid">
<tr>
        <th>ID</th>
        <th>Nama Kelas</th>
        <th>Kompetensi</th>
        <th>Tahun Pelajaran</th>
        <th>Keterangan</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php
    include 'konek.php';
    $data = mysqli_query($koneksi, "select * from kelas");
    while ($tam = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $tam['id'] ?></td>
        <td><?php echo $tam['namakelas'] ?></td>
        <td><?php echo $tam['kopetensi'] ?></td>
        <td><?php echo $tam['tahun_pelajaran'] ?></td>
        <td><?php echo $tam['keterangan'] ?></td>
        <?php
        echo "<td><a href='\sis/editkelas.php?id=$tam[id]'>Edit</a></td>
        <td><a href=?id=$tam[id]>Hapus</a></td>"
        ;
        ?>
   </tr>
    <?php }?>
</table>

<table  border="2px white solid">
<tr>
        <th>ID</th>
        <th>Nama Agama</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php
    include 'konek.php';
    $data = mysqli_query($koneksi, "select * from agama");
    while ($tam = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $tam['id'] ?></td>
        <td><?php echo $tam['nm_agama'] ?></td>
        <?php
        echo "<td><a href='\sis/editagama.php?id=$tam[id]'>Edit</a></td>
        <td><a href=?id=$tam[id]>Hapus</a></td>"
        ;
        ?>
   </tr>
    <?php }?>
</table>
<br><br>
<button class="btn" style="margin-left: 25%;"><a href="\sis\tambahansiswa.php">Tambah Data Siswa</a></button>
<button class="btn"><a href="\sis\tambahankelas.php">Kelola Kelas</a></button>
<button class="btn"><a href="\sis\tambahanagama.php">Kelola Agama</a></button>
<button class="btn"><a href="\sis\login.php">Logout</a></button>
</div>
</body>
<?php 
include 'konek.php';
if (isset($_GET['id'])) {
   mysqli_query($koneksi, "delete from agama where id= $_GET[id]");
}
?>