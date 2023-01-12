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
        <div class="container">
            <!-- List Menu -->
            <div class="list-menu-m-vote">
                <div style="margin: 20px;margin-top: -10px;">
                    <div style="display: flex;justify-content: flex-start;align-items: center;">
                        <div style="font-size: 35px;color: #003369;margin-bottom: 5px;">
                            <i class="fas fa-grip-vertical"></i>
                        </div>
                        <div style="margin-left: 5px;">
                            <font style="color: #003369;font-size: 18px;font-weight: 700;">List KN Show Participants</font>
                            <div style="margin-top: -7px;">
                                <font style="font-size: 12px;color: #003369;">Total <?= $RAll['t_talent']; ?> Participants</font>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div style="display: flow-root;justify-content: center;align-items: center;margin-top: -5px;">
                            <?php
                            $user      = $_SESSION['username'];
                            $dataTable = $db->query("SELECT 
                                        tal.id,tal.perform,tal.pictures,tal.name_group,tal.desc_group,tal.status_group,
                                        vot.id,vot.group_id,vot.group_name,vot.username,vot.star_one,vot.star_two,vot.status
                                    FROM tb_talent AS tal
                                    LEFT OUTER JOIN tb_vote AS vot ON tal.id=vot.group_id AND vot.username='$user'", 0);
                            if (mysqli_num_rows($dataTable) > 0) {
                                $no = 0;
                                while ($row = mysqli_fetch_array($dataTable)) {
                                    $no++;
                            ?>
                                    <!-- Train List -->
                                    <div style="margin: 10px;">
                                        <div class="land-<?= $no ?>">
                                            <div style="display: flex;justify-content: space-between;align-items: center;">
                                                <div style="margin-left: 15px;">
                                                    <font style="font-size: 12px;">
                                                        <?= $row['name_group']; ?>
                                                    </font>
                                                    <div style="margin-top: -10px;">
                                                        <font style="font-weight: 500;font-size: 11px;"><?= $row['desc_group']; ?></font>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <div>
                                                            <div style="margin-top: 10px;margin-bottom: -12px;">
                                                                <?php
                                                                $OT     = $db->query("SELECT (star_one + star_two) AS OT FROM tb_vote WHERE username='" . $_SESSION['username'] . "' AND group_name='" . $row['name_group'] . "'");
                                                                $ROT    = mysqli_fetch_array($OT);
                                                                ?>
                                                                <center>
                                                                    <font><i class="fas fa-star"></i> <?= $ROT['OT']; ?></font>
                                                                </center>
                                                            </div>
                                                            <font style="font-size: 8px;font-weight: 300;">Your<font style="color: transparent;">.</font>Star</font>
                                                        </div>
                                                        <div style="margin-left: 145px;">
                                                            <div style="margin-top: 10px;margin-bottom: -12px;">
                                                                <center>
                                                                    <?php
                                                                    $TP     = $db->query("SELECT COUNT(*) AS TP FROM tb_vote WHERE group_name='" . $row['name_group'] . "'");
                                                                    $RTP    = mysqli_fetch_array($TP);
                                                                    ?>
                                                                    <font><i class="fas fa-users"></i> <?= $RTP['TP']; ?></font>
                                                                </center>
                                                            </div>
                                                            <font style="font-size: 8px;font-weight: 300;">People<font style="color: transparent;">.</font>Vote</font>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                            <?php } ?>
                        </div>
                    </div>
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