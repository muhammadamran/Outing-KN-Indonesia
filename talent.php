<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/dataTablesCSS.php"; ?>
<?php include "include/header.php"; ?>
<?php

// Import XLS
if (isset($_POST["add_"])) {
    $GroupName         = $_POST['GroupName'];
    $Description       = $_POST['Description'];

    $dir = "assets/talent/";
    $timeUpload = date('Y-m-d-h-m-i');
    $file_name = "Talent_" . $timeUpload . "_" . $_FILES["pictures"]["name"];
    $size = $_FILES["pictures"]["size"];
    $tmp_file_name = $_FILES["pictures"]["tmp_name"];
    $filename = $_FILES['pictures']['name'];
    $exp = explode('.', $filename);
    $ext = end($exp);

    if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'svg') {
        move_uploaded_file($tmp_file_name, $dir . $file_name);

        $query = $db->query("INSERT INTO tb_talent 
                             (id,pictures,name_group,desc_group,status_group)
                             VALUES
                             ('','$file_name','$GroupName','$Description','None')");
        if ($query) {
            echo "<script>window.location.href='talent.php?Success';</script>";
        } else {
            echo "<script>window.location.href='talent.php?Failed';</script>";
        }
    } else {
        echo "<script>window.location.href='talent.php?Extention';</script>";
    }
}
?>
<title>Talent | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Page -->
        <!-- <div class="hero-section hero-background-talent style-02" style="margin-top: 49px;">
            <h1 class="page-title">Talent</h1>
            <nav class="biolife-nav">
                <ul style="text-transform: uppercase;">
                    <li class="nav-item"><span class="current-page">Time: <font id="clock"> </font></span></li>
                </ul>
            </nav>
        </div> -->
        <!-- End Page -->

        <div class="product-related-box single-layout">
            <div class="biolife-title-box lg-margin-bottom-26px-im" style="margin-top: -45px;margin-bottom: -30px;">
                <div>
                    <img src="assets/icon/badge.png" alt="Champion">
                </div>
                <span class="subtitle">Data Talent</span>
                <h3 class="main-title">Talent</h3>
            </div>
        </div>

        <div class="testimonial-block">
            <div class="container">
                <div class="page-divider"></div>
                <div style="display: flex;justify-content: flex-start;align-items: center;margin-bottom: 10px;">
                    <!-- Add Talent -->
                    <a href="#modal-talent" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Talent" style="margin-left: 10px;"><i class="fas fa-plus-circle"></i>
                        <font class="f-action">Add Talent</font>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-talent">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="modal-header">
                                        <h4 class="modal-title">[Add Data] Talent</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="file">Handover Pictures</label>
                                                        <input type="file" class="form-control" id="file" name="pictures" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="GroupName">Group Name</label>
                                                        <input type="text" class="form-control" id="GroupName" name="GroupName" placeholder="Group Name ..." />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="Description">Description</label>
                                                        <textarea type="text" class="form-control" id="Description" name="Description" placeholder="Description ..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <font style="color: red;">*</font> <i>Required.</i>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                                        <button type="submit" name="add_" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <!-- End Add Talent -->
                </div>
                <div class="page-divider"></div>
                <!-- alert -->
                <div style="padding: 10px;margin-bottom: 10px;margin-top: -15px;">
                    <?php if (isset($_GET['Success'])) { ?>
                        <!-- Success -->
                        <div class="alert-success">
                            <div style="display: flex;justify-content: center;align-items: center;">
                                <div>
                                    <i class="fas fa-check" style="font-size: 40px;"></i>
                                </div>
                                <div style="margin-left: 5px;">
                                    <strong> Success!</strong>
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
                                    <i class="fas fa-times" style="font-size: 40px;"></i>
                                </div>
                                <div style="margin-left: 5px;">
                                    <strong> Failed!</strong>
                                </div>
                            </div>
                            <span class="closebtn" onclick="this.parentElement.style.display='none';" style="margin-top: -45px;margin-right: 0px;">&times;</span>
                        </div>
                        <!-- End Failed -->
                    <?php } ?>
                    <?php if (isset($_GET['Extention'])) { ?>
                        <!-- Extention -->
                        <div class="alert-green">
                            <div style="display: flex;justify-content: center;align-items: center;">
                                <div>
                                    <i class="fas fa-question-circle" style="font-size: 40px;"></i>
                                </div>
                                <div style="margin-left: 5px;">
                                    <strong> Extention!</strong>
                                </div>
                            </div>
                            <span class="closebtn" onclick="this.parentElement.style.display='none';" style="margin-top: -45px;margin-right: 0px;">&times;</span>
                        </div>
                        <!-- End Extention -->
                    <?php } ?>
                </div>
                <!-- end alert -->
                <div class="table-responsive">
                    <table id="C_TableDefault" class="table table-bordered first">
                        <thead>
                            <tr>
                                <th class="no-sort"></th>
                                <th style="text-align: center;font-size: 12px;font-weight: bold;" class="no-sort">Talent<font style="color:transparent">.</font>Name</th>
                                <th style="text-align: center;font-size: 12px;font-weight: bold;" class="no-sort">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dataTable = $db->query("SELECT * FROM tb_talent ORDER BY id ASC", 0);
                            if (mysqli_num_rows($dataTable) > 0) {
                                $no = 0;
                                while ($row = mysqli_fetch_array($dataTable)) {
                                    $no++;
                            ?>
                                    <tr>
                                        <td>
                                            <div>
                                                <img src="assets/talent/<?= $row['pictures'] ?>" alt="Talent <?= $row['name_group'] ?>" style="width: 300px;height: 100px;">
                                            </div>
                                        </td>
                                        <td>
                                            <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 25px;">
                                                <span id="copyBtn" class="table-icon">
                                                    <i class="far fa-users"></i>
                                                </span>
                                                <div style="margin-left: 5px;display: grid;text-align: initial;">
                                                    <div style="font-size: 14px;font-weight: 900;display: flex;justify-content: flex-start;">
                                                        <?= $row['name_group']; ?>
                                                    </div>
                                                    <div style="font-size: 10px;font-weight: 300;display: flex;justify-content: flex-start;">
                                                        <?= $row['desc_group']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php if ($row['status_group'] == 'None') { ?>
                                                <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 35px;">
                                                    <a href="#Show<?= $row['id']; ?>" class="btn btn-sm btn-green" data-toggle="modal" title="Delete Users" style="margin-left: 5px;">
                                                        <i class="fas fa-toggle-off"></i>
                                                    </a>
                                                </div>
                                            <?php } else if ($row['status_group'] == 'Show') { ?>

                                                <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 35px;">
                                                    <a href="#None<?= $row['id']; ?>" class="btn btn-sm btn-primary" data-toggle="modal" title="Delete Users" style="margin-left: 5px;">
                                                        <i class="fas fa-toggle-on"></i>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                            <?php } ?>
                        </tbody>
                    </table>
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
    var abc = 0;
    $(document).ready(function() {
        $('#add_more').click(function() {
            $(this).before($("<div/>", {
                id: 'filediv'
            }).fadeIn('slow').append($("<input/>", {
                name: 'file[]',
                type: 'file',
                id: 'file',
                class: 'form-control'
            }), $("<br/>")));
        });
        $('#add_more1').click(function() {
            $(this).before($("<div/>", {
                id: 'filediv'
            }).fadeIn('slow').append($("<input/>", {
                name: 'file[]',
                type: 'file',
                id: 'file',
                class: 'form-control'
            }), $("<br/>")));
        });
        $('body').on('change', '#file', function() {
            if (this.files && this.files[0]) {
                abc += 1;
                var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src='' style='width:140px'/></div>");
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $(this).hide();
                $("#abcd" + abc).append($("<img/>", {
                    id: 'img',
                }).click(function() {
                    $(this).parent().parent().remove();
                }));
            }
        });

        function imageIsLoaded(e) {
            $('#previewimg' + abc).attr('src', e.target.result);
        };
        $('#upload').click(function(e) {
            var name = $(":file").val();
            if (!name) {
                alert("First Image Must Be Selected");
                e.preventDefault();
            }
        });
    });
</script>