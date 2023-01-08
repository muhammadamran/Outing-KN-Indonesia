<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/dataTablesCSS.php"; ?>
<?php include "include/header.php"; ?>
<title>All Member | Kuehne+Nagel Indonesia - BDG Gathering</title>
<div class="page-contain">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Page -->
        <div class="hero-section hero-background-member style-02" style="margin-top: 49px;">
            <h1 class="page-title">All Members</h1>
            <nav class="biolife-nav">
                <ul style="text-transform: uppercase;">
                    <li class="nav-item"><span class="current-page">Time: <font id="clock"> </font></span></li>
                </ul>
            </nav>
        </div>
        <!-- End Page -->

        <div class="product-related-box single-layout">
            <div class="biolife-title-box lg-margin-bottom-26px-im" style="margin-top: -45px;margin-bottom: -30px;">
                <div>
                    <img src="assets/icon/group.png" alt="bus">
                </div>
                <span class="subtitle">Data Members </span>
                <h3 class="main-title">All Members</h3>
            </div>
        </div>

        <div class="testimonial-block">
            <div class="container">
                <div class="table-responsive">
                    <table id="C_TableDefault_L" class="table table-bordered first">
                        <thead>
                            <tr>
                                <th style="width: 5px;">#</th>
                                <th style="text-align: center;font-size: 12px;font-weight: bold;" class="no-sort">Fullname<font style="color:transparent">.</font>&<font style="color:transparent">.</font>Username</th>
                                <th style="text-align: center;font-size: 12px;font-weight: bold;" class="no-sort">Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dataTable = $db->query("SELECT * FROM tb_member ORDER BY id ASC", 0);
                            if (mysqli_num_rows($dataTable) > 0) {
                                $no = 0;
                                while ($row = mysqli_fetch_array($dataTable)) {
                                    $no++;

                                    if ($row['username'] == $_SESSION['username']) {
                                        $bg = 'style="background: gainsboro;"';
                                    } else {
                                        $bg = '';
                                    }
                            ?>
                                    <tr <?= $bg ?>>
                                        <td style="width: 5px;">
                                            <div style="margin-top: 15px;">
                                                <?= $no; ?>.
                                            </div>
                                        </td>
                                        <td>
                                            <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                <span id="copyBtn" class="table-icon">
                                                    <i class="far fa-clipboard"></i>
                                                </span>
                                                <div style="margin-left: 5px;display: grid;text-align: initial;">
                                                    <div style="font-size: 10px;font-weight: 900;display: flex;justify-content: flex-start;">
                                                        <?= $row['fullname']; ?>
                                                    </div>
                                                    <div style="font-size: 10px;font-weight: 300;display: flex;justify-content: flex-start;">

                                                        <input type="text" value="<?= $row['username']; ?>" id="copyText" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                <a href="tel:<?= $row['tlp']; ?>" class="table-icon">
                                                    <i class="fas fa-phone-alt"></i>
                                                </a>
                                                <div style="margin-left: 5px;display: grid;text-align: initial;">
                                                    <div style="font-size: 10px;font-weight: 900;display: flex;justify-content: flex-start;">
                                                        <?= $row['tlp']; ?>
                                                    </div>
                                                    <div style="font-size: 10px;font-weight: 300;display: flex;justify-content: flex-start;">
                                                        Direct Call
                                                    </div>
                                                </div>
                                            </div>
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
    const copyBtn = document.getElementById('copyBtn')
    const copyText = document.getElementById('copyText')
    copyBtn.onclick = () => {
        copyText.select(); // Selects the text inside the input
        document.execCommand('copy'); // Simply copies the selected text to clipboard 
        Swal.fire({ //displays a pop up with sweetalert
            icon: 'success',
            title: 'Text copied to clipboard',
            showConfirmButton: false,
            timer: 1000
        });
    }
</script>