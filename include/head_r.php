<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/apps/icon/icon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main-color04.css">
    <!-- Outing CSS -->
    <link rel="stylesheet" href="assets/css/outing.css">
    <!-- Font Poppins -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- FONTAWESON 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
    <!-- Add the v6 core styles and then select the individual styles you need, like Solid and Brands -->
    <link href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.css" rel="stylesheet" />
    <link href="node_modules/@fortawesome/fontawesome-free/css/brands.css" rel="stylesheet" />
    <link href="node_modules/@fortawesome/fontawesome-free/css/solid.css" rel="stylesheet" />
    <!-- support v4 icon references/syntax -->
    <link href="node_modules/@fortawesome/fontawesome-free/css/v4-font-face.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/sweet/sweetalert2.css">
    <script src="assets/sweet/sweetalert2.all.js"></script>
    <script src="assets/sweet/sweetalert2.all.min.js"></script>
    <script src="assets/sweet/sweetalert2.js"></script>
    <script src="assets/sweet/sweetalert2.min.js"></script>
</head>
<style>
    body {
        font-family: Poppins, Open Sans, Helvetica, Arial, sans-serif;
    }
</style>
<?php
// DATE DAFULT
date_default_timezone_set("Asia/jakarta");

// DATE
function date_indo($date, $print_day = false)
{
    $day = array(
        1 =>
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    );
    $month = array(
        1 =>
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split    = explode('-', $date);
    $tgl_indo = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

    if ($print_day) {
        $num = date('N', strtotime($date));
        return $day[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}

// DATE SPLIT
function date_indo_s($date, $print_day = false)
{
    $day = array(
        1 =>
        'Sen',
        'Sel',
        'Rab',
        'Kam',
        'Jum',
        'Sab',
        'Min'
    );
    $month = array(
        1 =>
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agu',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    );
    $split    = explode('-', $date);
    $tgl_indo = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

    if ($print_day) {
        $num = date('N', strtotime($date));
        return $day[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}

// RUPIAH
function Rupiah($angka)
{
    $hasil = "Rp. " . number_format($angka, 2, ',', '.');
    return $hasil;
}

// DECIMAL
function decimal($number)
{
    $hasil = number_format($number, 0, ",", ",");
    return $hasil;
}

// NPWP
function NPWP($value)
{
    // 12.345.678.9-012.345
    $hasil = number_format($value, 0, ',', '.');
    return $hasil;
}

$waktu = gmdate("H:i", time() + 7 * 3600);
$t = explode(":", $waktu);
$jam = $t[0];
$menit = $t[1];

if ($jam >= 00 and $jam < 10) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Good morning, ";
        $icon = "<img src='assets/3d/morning.jpg' alt='Morning' style='width: 55px;'>";
        // $icon = "<i class='fas fa-sun'></i>";
    }
} else if ($jam >= 10 and $jam < 15) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Good afternoon, ";
        $icon = "<img src='assets/3d/afternoon.jpg' alt='afternoon' style='width: 55px;'>";
        // $icon = "<i class='fas fa-sun'></i>";
    }
} else if ($jam >= 15 and $jam < 18) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Good afternoon, ";
        $icon = "<img src='assets/3d/afternoon.jpg' alt='afternoon' style='width: 55px;'>";
        // $icon = "<i class='fas fa-cloud-sun'></i>";
    }
} else if ($jam >= 18 and $jam <= 24) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Good evening, ";
        $icon = "<img src='assets/3d/evening.jpg' alt='evening' style='width: 55px;'>";
        // $icon = "<i class='fas fa-cloud-moon'></i>";
    }
} else {
    $icon = "Error";
    $ucapan = "Error";
}

$myString = $_SESSION['username'];
if (strstr($myString, '.')) {
    $FL    = explode('.', $myString);
    $F     = $FL[0];
    $L     = $FL[1];
    $showU = substr($F, 0, 1) . "" . substr($L, 0, 1);
    $showD = "<font style='text-transform: capitalize;'>$L</font>, <font style='text-transform: capitalize;'>$F</font> / Kuehne + Nagel";
} else {
    $F     = $myString;
    $L     = $myString;
    $showU = substr($myString, 0, 1) . "" . substr($myString, 0, 1);
    $showD = "<font style='text-transform: capitalize;'>$L</font>, <font style='text-transform: capitalize;'>$F</font> / Kuehne + Nagel";
}
?>

<body class="biolife-body">