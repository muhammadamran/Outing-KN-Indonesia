<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_r.php"; ?>
<?php
$userVote   = $_SESSION['username'];

$GetU     = $db->query("SELECT * FROM tb_users WHERE username='$userVote'");
$RGetU    = mysqli_fetch_array($GetU);
$Votee    = $RGetU['vote'];

$GID        = $_GET['ID'];
$GName      = $_GET['NAME'];

$Vote     = $db->query("SELECT * FROM tb_vote WHERE group_id='$GID' AND group_name='$GName' AND username='$userVote'");
$RVote    = mysqli_fetch_array($Vote);

if (isset($_POST["GetVote"])) {
    $ID_T       = $_POST['GID'];
    $ID_NAME    = $_POST['GName'];
    $USER_NAME  = $_POST['username'];
    $forQone    = $_POST['forQone'];
    $forQtwo    = $_POST['forQtwo'];
    $status     = 'Done';
    $datetime   = date('Y-m-d H:i:m');

    if ($forQone == NULL & $forQtwo == NULL) {
        echo "<script>window.location.href='voting.php?Info';</script>";
    } else {
        $query = $db->query("INSERT INTO tb_vote (id,group_id,group_name,username,level,star_one,star_two,status,date_time)
                        VALUES
                        ('','" . $ID_T . "','" . $ID_NAME . "','" . $USER_NAME . "','" . $Votee . "','" . $forQone . "','" . $forQtwo . "','" . $status . "','" . $datetime . "')");
        if ($query) {
            echo "<script>window.location.href='voting.php?Success';</script>";
        } else {
            echo "<script>window.location.href='voting.php?Failed';</script>";
        }
    }
}
?>
<title>How's the Perfome | Kuehne+Nagel Indonesia - BDG Gathering</title>
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
                    <div style="font-size: 20px;font-weight: 900;color: #fff;">How's the Perfome</div>
                    <div></div>
                </div>
                <div style="display: flex;justify-content: center;align-items: center;">
                    <div class="icon-ok-ok">
                        <img src="assets/3d/star-dynamic-premium.png" alt="Vote" style="width: 700px;">
                    </div>
                </div>
                <div style="margin-top: 12px;font-size: 20px;font-weight: 500;color: #fff;display: flex;justify-content: center;align-items: center;text-align: center;background: #00346e;padding: 15px 10px 15px 10px;border-radius: 10px;">
                    Please give your rating for <?= $GName; ?>
                </div>
                <div class="page-divider-home"></div>
                <input type="hidden" name="GID" value="<?= $GID ?>">
                <input type="hidden" name="GName" value="<?= $GName ?>">
                <input type="hidden" name="username" value="<?= $userVote ?>">
                <div style="display: grid;justify-content: center;align-items: center;margin-top: 25px;">
                    <div style="font-size: 17px;font-weight: 800;color:#000">
                        <font>1. How much you enjoy the show.</font>
                    </div>
                    <div style="display: flex;justify-content: center;align-items: center;margin-top: 12px;">
                        <div>
                            <font style="color:#9e9e9e">Vote:&nbsp;&nbsp;</font>
                        </div>
                        <div style="font-size: 40px;">
                            <div id="reviewOne" class="o-star"></div>
                            <input type="hidden" id="forQone" name="forQone">
                        </div>
                    </div>
                    <div style="font-size: 17px;font-weight: 800;color:#000;margin-top: 30px;">
                        <font>2. How creative is the show.</font>
                    </div>
                    <div style="display: flex;justify-content: center;align-items: center;margin-top: 12px;">
                        <div>
                            <font style="color:#9e9e9e">Vote:&nbsp;&nbsp;</font>
                        </div>
                        <div style="font-size: 40px;">
                            <div id="reviewTwo" class="o-star"></div>
                            <input type="hidden" id="forQtwo" name="forQtwo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <?php if ($RVote == NULL) { ?>
                    <!-- Submit -->
                    <div class=" row" style="margin-top: 50px;">
                        <div class="col-sm-12">
                            <button type="submit" name="GetVote" class="btn btn-block btn-get"> Done</button>
                        </div>
                    </div>
                    <!-- End Submit -->
                <?php } else { ?>
                    <!-- Submit -->
                    <div class=" row" style="margin-top: 65px;">
                        <div class="col-sm-12">
                            <a href="voting.php" class="btn btn-block btn-get">🎉 Next Vote</a>
                        </div>
                    </div>
                    <!-- End Submit -->
                <?php } ?>
            </div>
        </form>
    </div>
</div>
<?php include "include/navigation.php"; ?>
<?php include "include/jsparty_r.php"; ?>
<?php if ($RVote == NULL) { ?>
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
<?php } else { ?>
    <script type="text/javascript">
        $("#reviewOne").rating({
            "value": <?= $RVote['star_one'] ?>,
            "click": function(e) {
                console.log(e);
                $("#forQone").val(e.stars);
            }
        });
        $("#reviewTwo").rating({
            "value": <?= $RVote['star_two'] ?>,
            "click": function(e) {
                console.log(e);
                $("#forQtwo").val(e.stars);
            }
        });
    </script>
<?php } ?>