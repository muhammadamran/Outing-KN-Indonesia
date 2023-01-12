<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_n.php"; ?>
<?php include "include/dataTablesCSS.php"; ?>
<?php include "include/header.php"; ?>
<?php
$userRole   = $_SESSION['username'];
$role       = $db->query("SELECT * FROM tb_member WHERE username='$userRole' ");
$Rrole      = mysqli_fetch_array($role);

if (isset($_GET["checkin"])) {
    $train_go_check_in_time =   date('Y-m-d H:i:m');
    $train_go_check_in_by   =   $_SESSION['username'];

    if (count($_POST["train"]) > 0) {

        $all = implode(",", $_POST["train"]);

        $query = $db->query("UPDATE tb_member SET train_go_check_in='Check In',
                                                  train_go_check_in_time='$train_go_check_in_time',
                                                  train_go_check_in_by='$train_go_check_in_by'
                             WHERE id IN ($all)");
        if ($query) {
            echo "<script>window.location.href='train.php?Success';</script>";
        } else {
            echo "<script>window.location.href='train.php?Failed';</script>";
        }
    } else {
        echo "<script>window.location.href='train.php?SelectedPlease';</script>";
    }
}

if (isset($_GET["cencel"])) {
    if (count($_POST["train"]) > 0) {

        $all = implode(",", $_POST["train"]);

        $query = $db->query("UPDATE tb_member SET train_go_check_in='Cencel',
                                                        train_go_check_in_time=NULL,
                                                        train_go_check_in_by=NULL
                             WHERE id IN ($all)");
        if ($query) {
            echo "<script>window.location.href='train.php?SuccessC';</script>";
        } else {
            echo "<script>window.location.href='train.php?FailedC';</script>";
        }
    } else {
        echo "<script>window.location.href='train.php?SelectedPlease';</script>";
    }
}
?>
<title>Train G-<?= $Rrole['train_go']; ?> | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <div class="ori-judul">
        <!-- Main content -->
        <div id="main-content" class="main-content">

            <div class="product-related-box single-layout">
                <div class="biolife-title-box lg-margin-bottom-26px-im" style="margin-top: -45px;margin-bottom: -30px;">
                    <!-- <span class="biolife-icon icon-organic"></span> -->
                    <div>
                        <img src="assets/icon/train.png" alt="Train">
                    </div>
                    <span class="subtitle">Data List Train G-<?= $Rrole['train_go']; ?> </span>
                    <h3 class="main-title">Train G-<?= $Rrole['train_go']; ?></h3>
                    <span class="current-page">Time: <font id="clock"> </font></span>
                </div>
            </div>

            <div class="testimonial-block">
                <div class="container">
                    <form action="" id="form-submit" method="POST">
                        <?php if ($Rrole['role'] == 'admin') { ?>
                            <div class="page-divider"></div>
                            <div style="display: flex;justify-content: flex-start;align-items: center;margin-bottom: 10px;">
                                <button class=" btn btn-sm btn-primary" id="btn-checkin-yes" style="margin-left: 10px;"><i class="fas fa-user-check"></i> Check In</button>
                                <button class="btn btn-sm btn-green" id="btn-checkin-cencel" style="margin-left: 10px;"><i class="fas fa-user-times"></i> Cencel</button>
                                <a href="train_data.php" class="btn btn-sm btn-info" id="btn-download" style="margin-left: 10px;"><i class="far fa-file-excel"></i> Download</a>
                            </div>
                            <div class="page-divider"></div>
                            <div style="margin-top: -15px;margin-bottom: 10px;">
                                <!-- alert -->
                                <div style="padding: 10px;">
                                    <?php if (isset($_GET['Success'])) { ?>
                                        <!-- Success -->
                                        <div class="alert-success">
                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                <div>
                                                    <i class="fas fa-user-check" style="font-size: 40px;"></i>
                                                </div>
                                                <div style="margin-left: 5px;">
                                                    <strong> Check In Success!</strong>
                                                </div>
                                            </div>
                                            <span class="closebtn" onclick="this.parentElement.style.display='none';" style="margin-top: -45px;margin-right: 0px;">&times;</span>
                                        </div>
                                        <!-- End Success -->
                                    <?php } ?>
                                    <?php if (isset($_GET['Failed'])) { ?>
                                        <!-- Failed -->
                                        <div class="alert-failed">
                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                <div>
                                                    <i class="fas fa-user-check" style="font-size: 40px;"></i>
                                                </div>
                                                <div style="margin-left: 5px;">
                                                    <strong> Check In Failed!</strong>
                                                </div>
                                            </div>
                                            <span class="closebtn" onclick="this.parentElement.style.display='none';" style="margin-top: -45px;margin-right: 0px;">&times;</span>
                                        </div>
                                        <!-- End Failed -->
                                    <?php } ?>
                                    <?php if (isset($_GET['SuccessC'])) { ?>
                                        <!-- SuccessC -->
                                        <div class="alert-success-c">
                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                <div>
                                                    <i class="fas fa-user-check" style="font-size: 40px;"></i>
                                                </div>
                                                <div style="margin-left: 5px;">
                                                    <strong> Check In Cencel!</strong>
                                                </div>
                                            </div>
                                            <span class="closebtn" onclick="this.parentElement.style.display='none';" style="margin-top: -45px;margin-right: 0px;">&times;</span>
                                        </div>
                                        <!-- End SuccessC -->
                                    <?php } ?>
                                    <?php if (isset($_GET['FailedC'])) { ?>
                                        <!-- FailedC -->
                                        <div class="alert-failed-c">
                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                <div>
                                                    <i class="fas fa-user-check" style="font-size: 40px;"></i>
                                                </div>
                                                <div style="margin-left: 5px;">
                                                    <strong> Check In Cencel Failed!</strong>
                                                </div>
                                            </div>
                                            <span class="closebtn" onclick="this.parentElement.style.display='none';" style="margin-top: -45px;margin-right: 0px;">&times;</span>
                                        </div>
                                        <!-- End FailedC -->
                                    <?php } ?>
                                </div>
                                <!-- end alert -->
                            </div>
                        <?php } ?>
                        <div class="table-responsive">
                            <table id="C_TableDefault" class="table table-bordered first">
                                <thead>
                                    <tr>
                                        <!-- <th style="width: 5px;">#</th> -->
                                        <?php if ($Rrole['role'] == 'admin') { ?>
                                            <th style="width: 5px;" class="no-sort">
                                                <button type="button" class="btn btn-sm btn-primary" id="chk_new" onclick="checkAll('chk');">
                                                    <i class="fas fa-check-square"></i>
                                                </button>
                                            </th>
                                        <?php } ?>
                                        <th style="text-align: center;font-size: 12px;font-weight: bold;" class="no-sort">Name<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Details</th>
                                        <th style="text-align: center;font-size: 12px;font-weight: bold;" class="no-sort">Boarding<font style="color:transparent">.</font>Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $G         = $Rrole['train_go'];
                                    $dataTable = $db->query("SELECT * FROM tb_member WHERE train_go='$G' ORDER BY train_go_sheet_n ASC, train_go_sheet_c ASC", 0);
                                    if (mysqli_num_rows($dataTable) > 0) {
                                        $no = 0;
                                        while ($row = mysqli_fetch_array($dataTable)) {
                                            $no++;

                                            if ($row['train_go_check_in'] == NULL) {
                                                $class = 'table-icon';
                                            } else if ($row['train_go_check_in'] == 'Check In') {
                                                $class = 'table-icon-checkin';
                                            } else if ($row['train_go_check_in'] == 'Cencel') {
                                                $class = 'table-icon-cencel';
                                            }

                                            if ($row['username'] == $_SESSION['username']) {
                                                $bg = 'style="background: gainsboro;"';
                                            } else {
                                                $bg = '';
                                            }
                                    ?>
                                            <tr <?= $bg ?>>
                                                <?php if ($Rrole['role'] == 'admin') { ?>
                                                    <td style="width: 5px;">
                                                        <div style="margin-top: 15px;">
                                                            <input type="checkbox" id="chk" name="train[]" value="<?= $row['id'] ?>">
                                                        </div>
                                                    </td>
                                                <?php } ?>
                                                <!-- Nama & Details -->
                                                <td>
                                                    <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                        <div class="<?= $class ?>">
                                                            <i class="fas fa-id-card-alt"></i>
                                                        </div>
                                                        <div style="margin-left: 5px;display: grid;text-align: initial;">
                                                            <div style="font-size: 10px;font-weight: 900;display: flex;justify-content: flex-start;">
                                                                <?= $row['fullname']; ?>
                                                            </div>
                                                            <div style="font-size: 10px;font-weight: 300;display: flex;justify-content: flex-start;">
                                                                G-<?= $row['train_go']; ?> /<b><?= $row['train_go_sheet_n']; ?>-<?= $row['train_go_sheet_c']; ?></b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php if ($row['train_go_check_in'] == NULL) { ?>
                                                    <td>
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;" class="blink">
                                                            <div class="waiting-icon">
                                                                <i class="fas fa-clock"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;display: grid;text-align: initial;margin-top: 10px;">
                                                                <div style="font-size: 10px;font-weight: 900;display: flex;justify-content: flex-start;">
                                                                    <font>Waiting</font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php } else if ($row['train_go_check_in'] == 'Check In') { ?>
                                                    <td>
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                            <div class="<?= $class ?>">
                                                                <i class="fas fa-info-circle"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;display: grid;text-align: initial;">
                                                                <div style="font-size: 10px;font-weight: 900;display: flex;justify-content: flex-start;">
                                                                    <?= $row['train_go_check_in']; ?>
                                                                </div>
                                                                <div style="font-size: 10px;font-weight: 300;display: flex;justify-content: flex-start;">
                                                                    <?php
                                                                    $alldate = $row['train_go_check_in_time'];
                                                                    $tgl = substr($alldate, 0, 10);
                                                                    $time = substr($alldate, 10, 20);
                                                                    ?>
                                                                    <?= $time; ?><br><?= $row['train_go_check_in_by']; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php } else if ($row['train_go_check_in'] == 'Cencel') { ?>
                                                    <td>
                                                        <div style="display: flex;justify-content:flex-start;align-items: center;" class="blink">
                                                            <div class="waiting-icon-cencel">
                                                                <i class="fas fa-clock"></i>
                                                            </div>
                                                            <div style="margin-left: 5px;display: grid;text-align: initial;margin-top: 10px;">
                                                                <div style="font-size: 10px;font-weight: 900;display: flex;justify-content: flex-start;">
                                                                    <font>Waiting</font>
                                                                </div>
                                                                <div style="font-size: 10px;font-weight: 300;display: flex;justify-content: flex-start;">
                                                                    <?= $row['train_go_check_in']; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php if ($Rrole['role'] == 'admin') { ?>
                                <div class="page-divider"></div>
                                <div style="display: flex;justify-content: flex-start;align-items: center;margin-bottom: 10px;">
                                    <button class=" btn btn-sm btn-primary" id="btn-checkin-yes" style="margin-left: 10px;"><i class="fas fa-user-check"></i> Check In</button>
                                    <button class="btn btn-sm btn-green" id="btn-checkin-cencel" style="margin-left: 10px;"><i class="fas fa-user-times"></i> Cencel</button>
                                    <a href="train_data.php" class="btn btn-sm btn-info" id="btn-download" style="margin-left: 10px;"><i class="far fa-file-excel"></i> Download</a>
                                </div>
                                <div class="page-divider"></div>
                            <?php } ?>
                        </div>
                    </form>
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
<?php include "include/dataTablesJS.php"; ?>
<script type="text/javascript">
    $("#btn-checkin-yes").click(function() {
        $("#form-submit").attr('action', `train.php?checkin`)
        var confirm = window.confirm("Check In?");

        if (confirm)
            $("#form-submit").submit();
        else
            return false;
    });

    $("#btn-checkin-cencel").click(function() {
        $("#form-submit").attr('action', `train.php?cencel`)
        var confirm = window.confirm("Cencel Check In?");

        if (confirm)
            $("#form-submit").submit();
        else
            return false;
    });


    function checkAll(checkId) {
        var inputs = document.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].type == "checkbox" && inputs[i].id == checkId) {
                if (inputs[i].checked == true) {
                    inputs[i].checked = false;
                } else if (inputs[i].checked == false) {
                    inputs[i].checked = true;
                }
            }
        }
    }
</script>