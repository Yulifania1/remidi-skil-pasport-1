</style>
<body class="bd">
<form method="POST" enctype="multipart/form-data" class="box">
    <h2>Username</h2>
    <input type="text" name="user" placeholder="Username">
    <h2>Password</h2>
    <input type="password" name="pass" placeholder="Password">
    <br><br>
    <input type="submit" name="konfirmasi" value="Login" class="btn">
</form>
</body>
<?php
include 'konek.php';
if (isset($_POST['konfirmasi'])){
    $user= $_POST['user'];
    $pass= $_POST['pass'];
    $data = "select * from admin where username= '$user' and password= MD5($pass)";
    $hasil = mysqli_query($koneksi, $data);
    if ($hasil->num_rows > 0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION['user'] = $row['user'];
        header("Location:\sis/tampilandata.php");
    }else{
        echo "<script>alert('username atau password Anda salah')</script>";
    }
}
?>