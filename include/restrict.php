<?php
session_start();
//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    //redirect ke halaman login
    echo "<script>window.location.href='login.php?Warning';</script>";
}
