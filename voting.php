<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<title>Voting | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Page -->
        <div class="hero-section hero-background-voting style-02" style="margin-top: 49px;">
            <h1 class="page-title">Voting</h1>
            <nav class="biolife-nav">
                <ul style="text-transform: uppercase;">
                    <li class="nav-item"><span class="current-page">Voters: <?= $Rrole['fullname']; ?></span></li>
                    <li class="nav-item"><span class="current-page">Time: <font id="clock"> </font></span></li>
                </ul>
            </nav>
        </div>
        <!-- End Page -->

    </div>
</div>
<?php
include "include/footer.php";
?>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty.php"; ?>