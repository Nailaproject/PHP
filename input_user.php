<!DOCTYPE html>
<html>
<head>
    <title>pemograman3.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if (!empty($_POST['save'])) {
    
$nama = $_POST['nama'];
$password = $_POST['password'];
$level = $_POST['level'];
$status = $_POST['status'];
// menginput data ke database
$a=mysqli_query($koneksi,"insert into user values('','$nama','$ password','$level','$status')");
if($a) {
    // mengalihkan halaman kembali
    header("location:tampil_user.php");
}else{
   // display the error and include the connection variable
   echo "Error: " . mysqli_error($koneksi);
}
 }

?>
<body>
    <h2>pemograman3 2024</h2>
    <br/>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <h3>TAMBAH DATA USER</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
        </tr>
        <tr>
        <td>password</td>
            <td><input type="number" name="password"></td>
    </tr>
    <tr>
            <td>level</td>
            <td><select name="level">
                <option value="">-----pilih</option>
                <option value="1">Admin</option>
                <option value="2">Staff</option>
                <option value="3">Spv</option>
                <option value="4">Mgr</option>
    </select>
    </td>
</tr>
<tr>
    <td>status</td>
    <td><select name="status">
        <option value="">-----Pilih</option>
        <option value="1">Aktif</option>
        <option value="0">tdk aktif</option>
        </select>
    </td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="save"></td>
</tr>
</table>
</form>
</body>
</html>