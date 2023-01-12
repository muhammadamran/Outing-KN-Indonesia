<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_r.php"; ?>
<?php
$Vote     = $db->query("SELECT * FROM tb_vote");
$RVote    = mysqli_fetch_array($Vote);
?>
<title>Awards | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain" id="page-v">
    <div id="main-content" class="main-content">
        <form action="" method="POST">
            <div class="container">
                <div style="display: flex;margin-top: 10px;justify-content: space-between;">
                    <div>
                        <a href="#" onclick="history.back()" style="color:#fff">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
                <div style="display: flex;margin-top: -25px;justify-content: center;">
                    <div></div>
                    <div style="font-size: 20px;font-weight: 900;color: #fff;">Awards</div>
                    <div></div>
                </div>
                <div style="display: flex;justify-content: center;align-items: center;">
                    <div class="icon-ok-ok">
                        <img src="assets/3d/trophy-dynamic-premium.png" alt="Vote" style="width: 700px;">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty_r.php"; ?>