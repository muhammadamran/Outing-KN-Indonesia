<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_r.php"; ?>
<?php
$Vote     = $db->query("SELECT * FROM tb_vote");
$RVote    = mysqli_fetch_array($Vote);
?>
<title>Awards | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain" id="page-v-web">
    <div id="main-content" class="main-content">
        <div class="container">
            <div style="display: flex;margin-top: -25px;justify-content: center;">
                <div></div>
                <div style="font-size: 20px;font-weight: 900;color: #fff;">Awards</div>
                <div></div>
            </div>
            <div style="display: flex;justify-content: center;align-items: center;">
                <div class="icon-ok-ok-web">
                    <img src="assets/3d/trophy-dynamic-premium.png" alt="Awards" style="width: 700px;">
                </div>
            </div>
            <!-- KN Show Ratings -->
            <div style="display: flex;justify-content: center;align-items: center;margin-top: 5px;">
                <div style="display: flex;justify-content: flex-start;align-items: center;">
                    <div style="font-size: 35px;color: #003369;margin-bottom: 5px;">
                        <i class="fas fa-medal" style="font-size: 25px"></i>
                    </div>
                    <div style="margin-left: 5px;">
                        <font style="color: #003369;font-size: 18px;font-weight: 700;">KN Show Ratings</font>
                        <div style="margin-top: -7px;">
                            <font style="font-size: 12px;color: #003369;">Last Update</font>
                            <font style="font-size: 12px;color: #003369;" id="clock"> </font>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End KN Show Ratings -->
            <div id="ShowAward"></div>
        </div>
    </div>
</div>
<?php include "include/jsparty_r.php"; ?>
<script src="assets/highcharts/highcharts.js"></script>
<script src="assets/highcharts/modules/exporting.js"></script>
<script src="assets/highcharts/modules/export-data.js"></script>
<script src="assets/highcharts/modules/accessibility.js"></script>