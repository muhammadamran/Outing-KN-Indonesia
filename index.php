<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<title>Home | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain" id="page-m">
    <div id="main-content" class="main-content">
        <div class="container">
            <!-- Users -->
            <div class="say">
                <div style="display: flex;justify-content: center;align-items: center;">
                    <div style="font-size: 30px;color: #003369;padding: 5px;background: #fff;border-radius: 10px;box-shadow: 2px 2px 1px 2px rgb(255 255 255 / 83%);">
                        <?= $icon ?>
                    </div>
                    <div style="display:grid;margin-left:8px">
                        <font style="font-size: 18px;font-weight: 200;color: #fff;"><?= $ucapan; ?></font>
                        <font style="font-size: 17px;font-weight: 600;color: #fff;"><?= $RusIn['fullname'] ?></font>
                    </div>
                </div>
                <div>
                    <div class="header-profiles-home"></div>
                </div>
            </div>
            <!-- End Users -->
        </div>
        <!-- Welcome -->
        <div style="margin-top: 215px;">
            <div style="display: grid;justify-content:center;margin-top: -40px;">
                <font style="font-size: 35px;font-weight: 900;color: #fff;text-shadow: 0 0 2px #fff;">Welcome</font>
            </div>
            <div style="display: grid;justify-content:center;margin-top:-15px;">
                <img src="assets/apps/outing.png" alt="Let The Journey Begin" style="width: 370px;">
            </div>
            <div style="display: grid;justify-content:center;margin: 55px;margin-top: -15px;">
                <p style="font-size: 14px;color: #ffffff94;font-family: Roboto, Arial, sans-serif;text-align: center;line-height: 18px;">
                    Date: Saturday-Sunday, January 14-15, 2022
                    Location: Bandung
                </p>
            </div>
            <!-- <div style="display: grid;justify-content:center;margin-top:-15px;margin: 65px;padding: 10px;background: #fafafc;border-radius: 35px;margin-top: -45px;box-shadow: 5px 5px 1px 2px rgb(255 255 255 / 83%);">
                <img src="assets/3d/puzzle-dynamic-premium.png" alt="Let The Journey Begin" style="width: 140px;">
            </div> -->
        </div>
        <!-- End Welcome -->
        <!-- List Menu -->
        <div class="list-menu-m">
            <div style="margin: 20px;margin-top: 5px;">
                <div style="display: flex;justify-content: flex-start;align-items: center;">
                    <div>
                        <!-- <i class="fas fa-th-large"></i> -->
                    </div>
                    <div>
                        <!-- <div style="margin-left:10px"> -->
                        <font style="color: #00346e;font-size: 18px;font-weight: 700;">Your Navigation</font>
                        <div style="margin-top: -7px;">
                            <font style="font-size: 12px;color: #00346e;">Direct page</font>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex;justify-content: space-between;align-items: center;margin-top: -25px;">
                <!-- Train Location -->
                <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                    <img src="assets/menu/train-station.png" alt="Train Location" style="width: 495px;">
                </div>
                <!-- Hotel Location -->
                <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                    <img src="assets/menu/hotel.png" alt="Hotel Location" style="width: 485px;">
                </div>
                <!-- News -->
                <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                    <img src="assets/menu/broadcast.png" alt="News" style="width: 485px;">
                </div>
                <!-- Galery -->
                <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                    <img src="assets/menu/picture.png" alt="Galery" style="width: 485px;">
                </div>
            </div>
            <div style="display: flex;justify-content: space-between;align-items: center;margin-top: -7px;">
                <!-- News -->
                <div style="padding: 15px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                    <img src="assets/3d/video-camera-dynamic-premium.png" alt="News">
                </div>
                <!-- Train Location -->
                <div style="padding: 15px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                    <img src="assets/3d/puzzle-dynamic-premium.png" alt="Train Location">
                </div>
                <!-- Hotel Location -->
                <div style="padding: 15px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                    <img src="assets/3d/video-camera-dynamic-premium.png" alt="Hotel Location">
                </div>
                <!-- Galery -->
                <div style="padding: 15px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                    <img src="assets/3d/star-dynamic-premium.png" alt="Galery">
                </div>
            </div>
        </div>
        <!-- End List Menu -->
    </div>
</div>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty.php"; ?>