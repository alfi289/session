<?php
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();
    echo "<h1>Log Out</h1>";
    echo "<h2>klik <a href='session1.php'>disini</a> untuk LOGIN kembali</h2>";
    echo "<h2>Anda tidak bisa masuk ke halaman <a href='session2.php'> session2.php</a> lagi</h2>";
}
?>