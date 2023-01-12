<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_r.php"; ?>
<?php
$userVote = $_SESSION['username'];
$Vote     = $db->query("SELECT * FROM tb_talent WHERE status_group='Show'");
$RVote    = mysqli_fetch_array($Vote);

$GT = 'style="margin-top: 140px;"';
?>
<title>Vote | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <div id="main-content" class="main-content">
        <form action="vouting_get.php?id=<?= $RVote['perform']; ?>&name=<?= $RVote['name_group']; ?>" method="GET">
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
                    <div style="font-size: 20px;font-weight: 900;color: #000;">Vote</div>
                    <div></div>
                </div>
                <div style="display: flex;justify-content: center;align-items: center;">
                    <div class="icon-ok">
                        <img src="assets/3d/notify-heart-dynamic-premium.png" alt="Vote" style="width: 700px;">
                    </div>
                </div>
                <!-- Alert -->
                <?php if (isset($_GET['Success'])) { ?>
                    <?php
                    $GT = 'style="margin-top: 70px;"';
                    ?>
                    <div style="display: flex;justify-content: center;align-items: center;margin-top: 35px;text-align: center;">
                        <div>
                            <font style="font-size:16px;color: #000;font-weight: 600;">
                                Thank You for Your Vote!
                            </font>
                        </div>
                    </div>
                    <!-- Alert -->
                <?php } ?>
                <!-- Alert -->
                <?php if (isset($_GET['Failed'])) { ?>
                    <?php
                    $GT = 'style="margin-top: 70px;"';
                    ?>
                    <div style="display: flex;justify-content: center;align-items: center;margin-top: 35px;text-align: center;">
                        <div>
                            <font style="font-size:16px;color: #000;font-weight: 600;">
                                Your Vote Filed, Please try again!
                            </font>
                        </div>
                    </div>
                    <!-- Alert -->
                <?php } ?>
                <!-- Alert -->
                <?php if (isset($_GET['Info'])) { ?>
                    <?php
                    $GT = 'style="margin-top: 70px;"';
                    ?>
                    <div style="display: flex;justify-content: center;align-items: center;margin-top: 35px;text-align: center;">
                        <div>
                            <font style="font-size:16px;color: #000;font-weight: 600;">
                                Please give the Vote!
                            </font>
                        </div>
                    </div>
                    <!-- Alert -->
                <?php } ?>
                <div style="display: flex;justify-content: center;align-items: center;margin-top: 5px;text-align: center;">
                    <div>
                        <h1 style="color: #000;font-weight: 600;">
                            Let's give a vote for
                            <font style="color: #00346e;">✨<?= $RVote['name_group']; ?></font>
                            <input type="hidden" name="ID" value="<?= $RVote['perform']; ?>">
                            <input type="hidden" name="NAME" value="<?= $RVote['name_group']; ?>">
                        </h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Get Started -->
                <div class=" row" <?= $GT ?>>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-block btn-get"> Get Started <i class="fas fa-arrow-right"></i></button>
                        <?php
                        $Yvote  = $db->query("SELECT COUNT(*) AS t_vote FROM tb_vote WHERE username='$userVote '");
                        $RYVote = mysqli_fetch_array($Yvote);
                        ?>
                        <a href="voting_see.php" class="btn btn-block btn-vote"> See Your Vote <b><?= $RYVote['t_vote']; ?></b></a>
                    </div>
                </div>
                <!-- End Get Started -->
            </div>
        </form>
    </div>
</div>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty.php"; ?>

<script type="text/javascript">
    window.setTimeout(function() {
        window.location.reload();
    }, 10000);
</script>