<?php
$koneksi = mysqli_connect("localhost","root","","keuangan");
// check connection
if (mysqli_connect_errno() ) {
    echo "koneksi database gagal :" . mysqli_connect_errror();
}else{
    echo "Hore bisa konek";
}
?>