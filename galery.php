<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_r.php"; ?>
<?php
?>
<title>Gallery | Kuehne+Nagel Indonesia - BDG Gathering</title>
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
                <div style="font-size: 20px;font-weight: 900;color: #000;">Gallery</div>
                <div></div>
            </div>
        </div>
        <div class="container">
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