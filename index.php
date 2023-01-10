<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<title>Home | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain" id="page-m">
    <div id="main-content" class="main-content">
        <div class="container">
            <div class="say">
                <div style="display: flex;justify-content: center;align-items: center;">
                    <div style="font-size: 30px;color: #fff;">
                        <?= $icon ?>
                    </div>
                    <div style="display:grid;margin-left:5px">
                        <font style="font-size: 18px;font-weight: 200;color: #fff;"><?= $ucapan; ?></font>
                        <font style="font-size: 17px;font-weight: 600;color: #fff;"><?= $RusIn['fullname'] ?></font>
                    </div>
                </div>
                <div>
                    <div class="header-profiles">
                        <?php
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
            </div>
            <div class="row">
                <div class="content-404">
                    <h1 class="heading">404</h1>
                    <h2 class="title">Oops! That page can't be found.</h2>
                    <p>Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.</p>
                    <a class="button" href="index-2.html">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty.php"; ?>