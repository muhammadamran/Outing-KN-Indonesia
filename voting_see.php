<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_r.php"; ?>
<?php
$All        = $db->query("SELECT COUNT(*) AS t_talent FROM tb_talent");
$RAll       = mysqli_fetch_array($All);

$userVote   = $_SESSION['username'];
$Yvote      = $db->query("SELECT COUNT(*) AS t_vote FROM tb_vote WHERE username='$userVote '");
$RYVote     = mysqli_fetch_array($Yvote);

?>
<title>Your Vote <?= $RYVote['t_vote']; ?> | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <div id="main-content" class="main-content">
        <div class="container">
            <div style="display: flex;margin-top: 10px;justify-content: space-between;">
                <div>
                    <a href="#" onclick="history.back()">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <div style="display: flex;margin-top: -25px;justify-content: center;">
                <div></div>
                <div style="font-size: 20px;font-weight: 900;color: #000;">See Your Vote <?= $RYVote['t_vote']; ?></div>
                <div></div>
            </div>
            <div style="display: flex;justify-content: center;align-items: center;">
                <div class="icon-ok-ok-ok">
                    <img src="assets/3d/medal-dynamic-premium.png" alt="Vote" style="width: 700px;">
                </div>
            </div>
        </div>
        <!-- List Menu -->
        <div class="list-menu-m-vote">
            <div style="margin: 20px;margin-top: 5px;">
                <div style="display: flex;justify-content: flex-start;align-items: center;">
                    <div style="font-size: 35px;color: #fff;margin-bottom: 5px;">
                        <i class="fas fa-grip-vertical"></i>
                    </div>
                    <div style="margin-left: 5px;">
                        <font style="color: #fff;font-size: 18px;font-weight: 700;">List KN Show Participants</font>
                        <div style="margin-top: -7px;">
                            <font style="font-size: 12px;color: #fff;">Total <?= $RAll['t_talent']; ?> Participants</font>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex;justify-content: space-between;align-items: center;margin-top: -15px;">
                <!-- Train List -->
                <a href="train.php">
                    <div style="padding: 10px;background: #fff;margin: 15px;">
                        Nama
                    </div>
                    <div style=" display: flex;justify-content: center;margin-top: -15px;">
                        <font style="font-size: 10px;font-weight: 400;color: #00346e;">Train</font>
                    </div>
                </a>
                <!-- Hotel Location -->
            </div>
        </div>
        <!-- End List Menu -->
    </div>
</div>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty_r.php"; ?>
<script type="text/javascript">
    $("#reviewOne").rating({
        "value": 0,
        "click": function(e) {
            console.log(e);
            $("#forQone").val(e.stars);
        }
    });
    $("#reviewTwo").rating({
        "value": 0,
        "click": function(e) {
            console.log(e);
            $("#forQtwo").val(e.stars);
        }
    });
</script>