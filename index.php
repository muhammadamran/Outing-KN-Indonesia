<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<title>Home | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <!-- Main content -->
    <div class="ori area">
        <div class="ori-bg">
            <ul class="circles">
                <li></li>
                <li></li>
            </ul>
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