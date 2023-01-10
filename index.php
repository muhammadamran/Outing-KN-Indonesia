<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<?php
$userInfo   = $_SESSION['username'];
$usIn       = $db->query("SELECT * FROM tb_member WHERE username='$userInfo' ");
$RusIn      = mysqli_fetch_array($usIn);

$waktu = gmdate("H:i", time() + 7 * 3600);
$t = explode(":", $waktu);
$jam = $t[0];
$menit = $t[1];

if ($jam >= 00 and $jam < 10) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "<i class='fas fa-cloud-sun' style='font-size: 20px;'></i> <b>Good morning</b>, ";
    }
} else if ($jam >= 10 and $jam < 15) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "<i class='fas fa-sun' style='font-size: 20px;'></i> <b>Good afternoon</b>, ";
    }
} else if ($jam >= 15 and $jam < 18) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "<i class='fas fa-cloud-sun' style='font-size: 20px;'></i> <b>Good afternoon</b>, ";
    }
} else if ($jam >= 18 and $jam <= 24) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "<i class='fas fa-cloud-moon' style='font-size: 20px;'></i> <b>Good evening</b>, ";
    }
} else {
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
<title>Home | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div style="display: flex;justify-content: center;align-items: center;margin-top: -113px;padding: 12px 10px 0px 0px;color: #fff;margin-bottom: 63px;">
    <font style="font-size: 12px;font-weight: 900;text-transform:uppercase;text-shadow: 0 0 2px white;"><?= $ucapan ?> </font>
    <font style="font-size: 12px;font-weight: 500;text-shadow: 0 0 2px white;">&nbsp;<?= $RusIn['fullname'] ?></font>
</div>
<div class="page-contain">
    <!-- Ori -->
    <div class="ori">
        <div class="ori-bg"></div>
        <!-- Info Train -->
        <div class="container" style="margin-bottom: 50px;">
            <div class="biolife-title-box biolife-title-box__icon-at-top-style hidden-icon-on-mobile" style="margin-top: 30px;">
                <h3 class="main-title" style="display: flex;margin-left: 20px;color: #00346f;">
                    Train Information
                </h3>
                <div class="page-divider-title"></div>
            </div>
            <!-- Sub Section 1 -->
            <div class="row" style="margin: 22px;display: flex;justify-content: space-between;align-items: center;">
                <!-- Departure -->
                <div style="display: grid;justify-content: center;align-items: center;">
                    <div style="margin-top: -12px;margin-bottom: -5px;">
                        <center>
                        </center>
                    </div>
                    <div>
                        <div class="table-icon" style="background:#00346f;color:#fff">
                            <center>
                                <i class="fas fa-train"></i>
                            </center>
                        </div>
                    </div>
                </div>
                <div style="margin-left: 10px;">
                    <font style="font-size:12px;font-weight:800;color: #00346f;">Departure&nbsp;&nbsp;</font>
                    <div style="margin-top: -13px;">
                        <font style="font-size:10px;font-weight:500">06:50<font style="color: transparent;">.</font>WIB</font>
                    </div>
                </div>
                <!-- End Departure -->
                <!-- Train -->
                <div>
                    <img src="https://i.gifer.com/EbN0.gif" alt="Train" style="width: 178px;">
                </div>
                <!-- End Train -->
                <!-- Arrival -->
                <div style="margin-right: 10px;">
                    <font style="font-size:12px;font-weight:800;color: #00346f;">Arrival&nbsp;&nbsp;</font>
                    <div style="margin-top: -13px;">
                        <font style="font-size:10px;font-weight:500">10:17<font style="color: transparent;">.</font>WIB</font>
                    </div>
                </div>
                <div style="display: grid;justify-content: center;align-items: center;">
                    <div style="margin-top: -12px;margin-bottom: -5px;">
                        <center>
                        </center>
                    </div>
                    <div>
                        <div class="table-icon" style="background:#00346f;color:#fff">
                            <center>
                                <i class="fas fa-train"></i>
                            </center>
                        </div>
                    </div>
                </div>
                <!-- End Arrival -->
            </div>
            <!-- End Sub Section 1 -->
        </div>
        <!-- End Info Train -->

        <!-- Team building - Dinner Garden - KN Show Time! -->
        <div class="container" style="margin-bottom: 50px;margin-top: -70px;background-image: url(assets/images/bgbegin.png);background-position: center;background-repeat: no-repeat;background-size: cover;">
            <div class="biolife-title-box biolife-title-box__icon-at-top-style hidden-icon-on-mobile" style="margin-top: 30px;">
                <h3 class="main-title" style="display: flex;margin-left: 20px;color: #00346f;">
                    <font style="font-weight: 100;">Let</font>&nbsp;The Journey&nbsp;<font style="font-weight: 100;">begin</font>
                </h3>
                <div class="page-divider-title"></div>
            </div>
            <div class="row" style="margin: 22px;display: flex;justify-content: space-between;align-items: center;">
                <div class="col-md-4 col-sm-6  col-xs-12 sm-margin-top-20px xs-margin-top-20px">
                    <div class="advance-product-box">
                        <ul class="products-list vertical-layout products-list__vertical-layout">
                            <li class="product-item" style="margin-top: 10px;border-radius: 10px;padding: 23px;box-shadow: 0px 0px 7px -1px rgb(103 111 120 / 83%);">
                                <div class="contain-product contain-product__right-info-layout2 cate">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/svg/team-build.svg" alt="Team Building" width="100" height="100" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cat-info"><a href="#" class="cat-item"><i class="fas fa-clock"></i> Time 13:50 - 16:50 WIB</a></div>
                                        <h4 class="product-title"><a href="#" class="pr-name">Hotel Garden</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount"><span class="currencySymbol">✨ Team Building</ins>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item" style="margin-top: 10px;border-radius: 10px;padding: 23px;box-shadow: 0px 0px 7px -1px rgb(103 111 120 / 83%);">
                                <div class="contain-product contain-product__right-info-layout2 cate">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/svg/dinner-garden.svg" alt="Dinner-Garden" width="100" height="100" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cat-info"><a href="#" class="cat-item"><i class="fas fa-clock"></i> Time 18:30 WIB</a></div>
                                        <h4 class="product-title"><a href="#" class="pr-name">Hotel Garden</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount"><span class="currencySymbol">🎉 Dinner Garner</ins>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item" style="margin-top: 10px;border-radius: 10px;padding: 23px;box-shadow: 0px 0px 7px -1px rgb(103 111 120 / 83%);">
                                <div class="contain-product contain-product__right-info-layout2 cate">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/svg/show-time.svg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cat-info"><a href="#" class="cat-item"><i class="fas fa-clock"></i> Time 18:30 WIB</a></div>
                                        <h4 class="product-title"><a href="#" class="pr-name">Hotel Garden</a></h4>
                                        <div class="price ">
                                            <ins><span class="price-amount"><span class="currencySymbol">🌟 KN Show Time!</ins>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team building - Dinner Garden - KN Show Time! -->

    </div>
    <!-- End Ori -->
</div>
<?php
include "include/footer.php";
?>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty.php"; ?>
<script type="text/javascript">
    // SIGN IN SUCCESS
    if (window?.location?.href?.indexOf('SignInsuccess') > -1) {
        Swal.fire({
            title: 'Login!',
            icon: 'success',
            html: 'Login successfully!<br><i>Bahasa: Berhasil masuk!</i>'
        })
        history.replaceState({}, '', './index.php');
    }
</script>