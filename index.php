<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<?php
$userInfo   = $_SESSION['username'];
$usIn       = $db->query("SELECT * FROM tb_member WHERE username='$userInfo' ");
$RusIn      = mysqli_fetch_array($usIn);
?>
<title>Home | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <div class="page-contain">
        <div class="ori-dd">
            <div>
                <div style="display: flex;justify-content: center;align-items: center;margin-top: -9px;">
                    <div class="header-profiles-home">
                        <?php
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
                        <font style="text-transform: uppercase;"><?= $showU; ?></font>
                    </div>
                </div>
                <div style="display: flex;justify-content: center;align-items: center;color: #00346f;margin-top: -10px;">
                    <font style="font-size: 12px;font-weight: 900;text-transform:uppercase"><?= $ucapan ?> </font>
                    <font style="font-size: 12px;font-weight: 500;">&nbsp;<?= $RusIn['fullname'] ?></font>
                </div>
                <!-- <div style="display: flex;justify-content: flex-end;align-items: center;margin-top: -60px;margin-right: 10px;font-size: 25px;color: #003369;">
                    <i class="far fa-question-circle"></i>
                </div> -->
            </div>
        </div>
        <!-- Main content -->
        <div class="ori">
            <div class="ori-bg"></div>
            <div style="margin: 10px;margin-top: 12px;">
                <div>
                    <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;color: #000;">
                        <div style="padding: 10px;font-size: 20px;background: #00346f;color: #fff;border-radius: 5px;">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div style="margin-left: 5px;display: grid;text-align: initial;">
                            <div style="font-size: 17px;font-weight: 900;display: flex;justify-content: flex-start;">
                                Your Hot Event
                            </div>
                            <div style="font-size: 12px;font-weight: 300;display: flex;justify-content: flex-start;margin-top: -5px;">
                                Event
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="biolife-gird-banners xs-margin-top-10px sm-margin-top_-1px" style="margin-top: -75px;margin-bottom: 50px;">
                <div class="grid-panel">
                    <div class="grid-panel-item left-content">
                        <div class="biolife-banner grid biolife-banner__grid">
                            <a href="#" class="media-contain media-01"></a>
                            <div class="banner-contain">
                                <a href="#" class="cat-name">Team Building</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-panel-item midle-content">
                        <ul class="list-media">
                            <li>
                                <div class="biolife-banner grid biolife-banner__grid">
                                    <a href="#" class="media-contain media-02"></a>
                                    <div class="banner-contain">
                                        <a href="#" class="cat-name">Dinner Garden</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="biolife-banner grid biolife-banner__grid">
                                    <a href="#" class="media-contain media-03"></a>
                                    <div class="banner-contain">
                                        <a href="#" class="cat-name">KN Show Time</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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