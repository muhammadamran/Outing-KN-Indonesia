<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<title>Home | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="banner-promotion-04 xs-margin-top-50px sm-margin-top-49px">
            <div class="biolife-banner promotion4 biolife-banner__promotion4">
                <div class="container">
                </div>
            </div>
        </div>
        <!--Block 03: Categories-->
        <div class="wrap-category xs-margin-top-20px sm-margin-top-20px">
            <div class="container">
                <div class="biolife-title-box style-02 xs-margin-bottom-10px">
                    <span class="subtitle">Your Hot Program</span>
                    <!-- <h3 class="main-title">Overview</h3> -->
                    <center>
                        <p class="desc">Date: 14 15 January 2023 - Location: Sheraton Bandung Hotel & Towerss</p>
                    </center>
                </div>
                <div class="biolife-service type01 biolife-service__type01 sm-margin-top-10px xs-margin-top-10px">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        <li style="width: 205px;margin-right: 30px;">
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/svg/team-build.svg" alt="Team Building" style="margin-bottom: -90px;">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Team Building</h4>
                                    <span class="cat-number">(Day 1)</span>
                                </a>
                            </div>
                        </li>
                        <li style="width: 205px;margin-right: 30px;">
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/svg/dinner-garden.svg" alt="Dinner Garden" style="margin-bottom: -90px;">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Dinner Garden</h4>
                                    <span class="cat-number">(Day 1)</span>
                                </a>
                            </div>
                        </li>
                        <li style="width: 205px;margin-right: 30px;">
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/svg/show-time.svg" alt="KN Show Time" style="margin-bottom: -90px;">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">KN Show Time</h4>
                                    <span class="cat-number">(Day 1)</span>
                                </a>
                            </div>
                        </li>
                    </ul>
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