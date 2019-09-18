<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "<h1>Selamat Datang " . $_SESSION['login'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa di akses jika anda sudah login</h2>";
    echo "<h2>klik <a href='session3.php'>disini</a> untuk Log Out</h2>";

}else{
    die ("Anda belum login! Anda tidak berhak masuk ke halaman ini. Login <a href='session1.php'>disini</a>");
}
?>