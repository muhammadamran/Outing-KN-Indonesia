<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_r.php"; ?>
<?php
?>
<title>Master | Kuehne+Nagel Indonesia - BDG Gathering</title>
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
                <div style="font-size: 20px;font-weight: 900;color: #000;">Master</div>
                <div></div>
            </div>
            <div style="display: flex;justify-content: center;align-items: center;">
                <div class="icon-ok-ok-ok">
                    <img src="assets/3d/puzzle-dynamic-premium.png" alt="Master" style="width: 700px;">
                </div>
            </div>
        </div>
        <div class="container">
            <!-- List Menu -->
            <div style="display: flex;justify-content: center;align-items: center;margin-top: 5px;text-align: center;">
                <div>
                    <h1 style="color: #000;font-weight: 600;">
                        Manage Your Apps
                    </h1>
                </div>
            </div>
            <div class="list-menu-m-vote" style="margin-top: 40px;">
                <div style="margin: 20px;margin-top: -10px;">
                    <div style="display: flex;justify-content: flex-start;align-items: center;">
                        <div style="font-size: 35px;color: #003369;margin-bottom: 5px;">
                            <i class="fas fa-grip-vertical"></i>
                        </div>
                        <div style="margin-left: 5px;">
                            <font style="color: #003369;font-size: 18px;font-weight: 700;">Master Menu</font>
                            <div style="margin-top: -7px;">
                                <font style="font-size: 12px;color: #003369;">For Administrator</font>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex;justify-content: space-between;align-items: center;margin-top: -7px;">
                    <!-- Manage Main -->
                    <a href="main.php">
                        <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                            <img src="assets/menu/main-menu.png" alt="Main" style="width: 495px;">
                        </div>
                        <div style="display: flex;justify-content: center;margin-top: -15px;">
                            <font style="font-size: 10px;font-weight: 400;color: #00346e;">Group</font>
                        </div>
                    </a>
                    <!-- End Manage Main -->
                    <!-- Member -->
                    <a href="member.php">
                        <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                            <img src="assets/menu/group.png" alt="Member" style="width: 495px;">
                        </div>
                        <div style="display: flex;justify-content: center;margin-top: -15px;">
                            <font style="font-size: 10px;font-weight: 400;color: #00346e;">All Members</font>
                        </div>
                    </a>
                    <!-- End Member -->
                    <!-- Rating Web -->
                    <a href="web_awards.php" target="_blank">
                        <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                            <img src="assets/menu/dashboard.png" alt="Train" style="width: 495px;">
                        </div>
                        <div style="display: flex;justify-content: center;margin-top: -15px;">
                            <font style="font-size: 10px;font-weight: 400;color: #00346e;">Rating Web</font>
                        </div>
                    </a>
                    <!-- End Rating Web -->
                    <!-- Train List -->
                    <a href="train.php">
                        <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                            <img src="assets/menu/train-station.png" alt="Train" style="width: 495px;">
                        </div>
                        <div style="display: flex;justify-content: center;margin-top: -15px;">
                            <font style="font-size: 10px;font-weight: 400;color: #00346e;">Train</font>
                        </div>
                    </a>
                    <!-- End Train List -->
                </div>
            </div>
            <!-- End List Menu -->
        </div>
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