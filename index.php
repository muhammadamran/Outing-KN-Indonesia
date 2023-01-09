<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<title>Home | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <div class="page-contain">
        <div class="ori-dd">
            <div style="display: flex;justify-content: center;align-items: center;margin-top: -9px;">
                <div class="header-profiles-home">
                    <?php
                    $myString = $_SESSION['username'];
                    if (strstr($myString, '.')) {
                        $FL    = explode('.', $myString);
                        $F     = $FL[0];
                        $L     = $FL[1];
                        $showU = substr($F, 0, 1) . "" . substr($L, 0, 1);
                        $showD = "<font style='text-transform: capitalize;'>$L</font>, <font style='text-transform: capitalize;'>$F</font> / Kuehne + Nagel";
                    } else {
                        $F     = $myString;
                        $L     = $myString;
                        $showU = substr($myString, 0, 1) . "" . substr($myString, 0, 1);
                        $showD = "<font style='text-transform: capitalize;'>$L</font>, <font style='text-transform: capitalize;'>$F</font> / Kuehne + Nagel";
                    }
                    ?>
                    <font style="text-transform: uppercase;"><?= $showU; ?></font>
                </div>
            </div>
            <div style="display: flex;justify-content: center;align-items: center;color: #00346f;margin-top: -13px;font-size: 10px;font-weight: 900;">
                <font><?= $showD ?></font>
            </div>
        </div>
        <!-- Main content -->
        <div class="ori">
            <div class="ori-bg"></div>
            <div style="margin: 10px;margin-top: 12px;">
                <div>
                    <div style="display: flex;justify-content:flex-start;align-items: center;margin-top: 12px;color: #000;">
                        <div style="padding: 10px;font-size: 20px;background: #00346f;color: #fff;border-radius: 5px;">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div style="margin-left: 5px;display: grid;text-align: initial;">
                            <div style="font-size: 17px;font-weight: 900;display: flex;justify-content: flex-start;">
                                Your Hot Event
                            </div>
                            <div style="font-size: 12px;font-weight: 300;display: flex;justify-content: flex-start;margin-top: -5px;">
                                Event
                            </div>
                        </div>
                    </div>
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