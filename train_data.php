<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>

<?php
header("Content-type: application/vnd-ms-excel");
date_default_timezone_set("Asia/Bangkok");
$datenow = date('d-m-Y h-i-s');

$userRole   = $_SESSION['username'];
$role       = $db->query("SELECT * FROM tb_member WHERE username='$userRole' ");
$Rrole      = mysqli_fetch_array($role);
$ll         = $Rrole['train_go'];
header("Content-Disposition: attachment; filename=List-Gerbong-$ll-$datenow.xls");
?>
<style>
    body {
        font-family: Poppins, Open Sans, Helvetica, Arial, sans-serif;
    }
</style>
<table border="1">
    <thead style="background: #00346e;color:#fff;text-align:center">
        <tr>
            <th colspan="5" width="802">A. Parahyangan T. (KA 36B)
                <font style="color:#08c792">Gambir-Bandung</font>
            </th>
        </tr>
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama Lengkap</th>
            <th colspan="2">
                Eksekutif-
                <font style="color:#08c792"><?= $Rrole['train_go'] ?></font>
            </th>
            <th rowspan="2">Remarks</th>
        </tr>
        <tr>
            <th colspan="2">Nomor TD</th>
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
        ?>
                <tr>
                    <td><?= $no ?>.</td>
                    <td><?= $row['fullname']; ?></td>
                    <td style="text-align:center"><?= $row['train_go_sheet_n']; ?></td>
                    <td style="text-align:center"><?= $row['train_go_sheet_c']; ?></td>
                    <td>-</td>
                </tr>
    </tbody>
<?php } ?>
<?php } else { ?>
<?php } ?>
</table>