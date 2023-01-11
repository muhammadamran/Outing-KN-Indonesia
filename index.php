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
                    <div style="font-size: 35px;color: #00346e;margin-bottom: 5px;">
                        <i class="fas fa-grip-vertical"></i>
                    </div>
                    <div style="margin-left: 5px;">
                        <font style="color: #00346e;font-size: 18px;font-weight: 700;">Your Navigation</font>
                        <div style="margin-top: -7px;">
                            <font style="font-size: 12px;color: #00346e;">Direct page</font>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex;justify-content: space-between;align-items: center;margin-top: -15px;">
                <!-- Train List -->
                <a href="train.php">
                    <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                        <img src="assets/menu/train-station.png" alt="Train" style="width: 495px;">
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: -15px;">
                        <font style="font-size: 10px;font-weight: 400;color: #00346e;">Train</font>
                    </div>
                </a>
                <!-- Hotel Location -->
                <a href="https://www.google.com/maps/dir//sheraton+bandung+hotel+%26+towers/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e68e6e2f0f1143f:0xef1bcae174c31a1?sa=X&ved=2ahUKEwiJirmim7_8AhWkTGwGHTocDc0Q9Rd6BAhuEAQ">
                    <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                        <img src="assets/menu/hotel.png" alt="Hotel Location" style="width: 485px;">
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: -15px;">
                        <font style="font-size: 10px;font-weight: 400;color: #00346e;">Hotel Location</font>
                    </div>
                </a>
                <!-- News -->
                <a href="train.php">
                    <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                        <img src="assets/menu/broadcast.png" alt="News" style="width: 485px;">
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: -15px;">
                        <font style="font-size: 10px;font-weight: 400;color: #00346e;">News</font>
                    </div>
                </a>
                <!-- Galery -->
                <a href="train.php">
                    <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                        <img src="assets/menu/picture.png" alt="Galery" style="width: 485px;">
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: -15px;">
                        <font style="font-size: 10px;font-weight: 400;color: #00346e;">Gallery</font>
                    </div>
                </a>
            </div>
            <div style="display: flex;justify-content: space-between;align-items: center;margin-top: -7px;">
                <!-- Schedule -->
                <a href="train.php">
                    <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                        <img src="assets/menu/event.png" alt="Schedule" style="width: 495px;">
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: -15px;">
                        <font style="font-size: 10px;font-weight: 400;color: #00346e;">Schedule</font>
                    </div>
                </a>
                <!-- Vote -->
                <a href="train.php">
                    <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                        <img src="assets/menu/starred.png" alt="Vote" style="width: 485px;">
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: -15px;">
                        <font style="font-size: 10px;font-weight: 400;color: #00346e;">Vote</font>
                    </div>
                </a>
                <!-- Champions -->
                <a href="train.php">
                    <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                        <img src="assets/menu/successful.png" alt="Champions" style="width: 485px;">
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: -15px;">
                        <font style="font-size: 10px;font-weight: 400;color: #00346e;">Awards</font>
                    </div>
                </a>
                <?php if ($Rrole['role'] == 'admin') { ?>
                    <!-- Master Data -->
                    <a href="train.php">
                        <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                            <img src="assets/menu/master-data.png" alt="Master Data" style="width: 485px;">
                        </div>
                        <div style="display: flex;justify-content: center;margin-top: -15px;">
                            <font style="font-size: 10px;font-weight: 400;color: #00346e;">Master Data</font>
                        </div>
                    </a>
                <?php } else { ?>
                    <!-- Logout -->
                    <a href="logout.php">
                        <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                            <img src="assets/menu/check-out.png" alt="Logout" style="width: 485px;">
                        </div>
                        <div style="display: flex;justify-content: center;margin-top: -15px;">
                            <font style="font-size: 10px;font-weight: 400;color: #00346e;">Logout</font>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <?php if ($Rrole['role'] == 'admin') { ?>
                <div style="display: flex;justify-content: center;align-items: center;margin: 123px;margin-top: -8px;">
                    <!-- Logout -->
                    <a href="logout.php">
                        <div style="padding: 10px;background: #fff;margin: 15px;border-radius: 10px;box-shadow: 2px 2px 3px 3px rgb(219 219 219);">
                            <img src="assets/menu/check-out.png" alt="Logout" style="width: 485px;">
                        </div>
                        <div style="display: flex;justify-content: center;margin-top: -15px;">
                            <font style="font-size: 10px;font-weight: 400;color: #00346e;">Logout</font>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <!-- End List Menu -->
    </div>
</div>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty.php"; ?>