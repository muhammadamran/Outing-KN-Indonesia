<?php include "include/db.php"; ?>
<?php include "include/restrict.php"; ?>
<?php include "include/head_r.php"; ?>


<!-- Start -->
<div style="margin-bottom: 130px;">
    <?php
    $user      = $_SESSION['username'];
    $dataTable = $db->query("SELECT * FROM tb_talent ORDER BY rating DESC LIMIT 3", 0);
    if (mysqli_num_rows($dataTable) > 0) {
        $no = 0;
        while ($row = mysqli_fetch_array($dataTable)) {
            $no++;
            // <!-- Calculation -->
            // NMT Voters
            $P_NMT        = $db->query("SELECT COUNT(*) AS P_NMT FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='NMT'");
            $RP_NMT       = mysqli_fetch_array($P_NMT);
            $result_P_NMT = $RP_NMT['P_NMT'];
            // Employee Voters
            $P_Employee        = $db->query("SELECT COUNT(*) AS P_Employee FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='Employee'");
            $RP_Employee       = mysqli_fetch_array($P_Employee);
            $result_P_Employee = $RP_Employee['P_Employee'];
            // External Voters
            $P_External        = $db->query("SELECT COUNT(*) AS P_External FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='External'");
            $RP_External       = mysqli_fetch_array($P_External);
            $result_P_External = $RP_External['P_External'];

            // NMT Star
            $S_NMT             = $db->query("SELECT (star_one + star_two) AS S_NMT FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='NMT'");
            $RS_NMT            = mysqli_fetch_array($S_NMT);
            $result_S_NMT      = $RS_NMT['S_NMT'];
            // Employee Voters
            $S_Employee        = $db->query("SELECT (star_one + star_two) AS S_Employee FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='Employee'");
            $RS_Employee       = mysqli_fetch_array($S_Employee);
            $result_S_Employee = $RS_Employee['S_Employee'];
            // External Voters 
            $S_External        = $db->query("SELECT (star_one + star_two) AS S_External FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='External'");
            $RS_External       = mysqli_fetch_array($S_External);
            $result_S_External = $RS_External['S_External'];

            // AVG
            $NMT_AVG          = ($result_P_NMT * $result_S_NMT) * 0.3;
            $Employee_AVG     = ($result_P_Employee * $result_S_Employee) * 0.3;
            $External_AVG     = ($result_P_External * $result_S_External) * 0.4;

            $Total_SUM_AVG    = $NMT_AVG + $Employee_AVG + $External_AVG;

            // Result
            if ($NMT_AVG == NULL) {
                $NMT_R      = 0;
            } else {
                $NMT_R      = $NMT_AVG / $result_P_NMT;
            }

            if ($Employee_AVG == NULL) {
                $Employee_R      = 0;
            } else {
                $Employee_R = $Employee_AVG / $result_P_Employee;
            }

            if ($External_AVG == NULL) {
                $External_R      = 0;
            } else {
                $External_R = $External_AVG / $result_P_External;
            }

            $Total_SUM_R    = $NMT_R + $Employee_R + $External_R;
    ?>
            <div style="display: flex;justify-content: center;align-items: center;">
                <div class="icon-awards">
                    <!-- <img src="assets/3d/medal-dynamic-premium.png" alt="Vote" style="width: 700px;"> -->
                    <font style="font-size: 25px;font-weight: 900;color: #fff;text-shadow: 0 0 4px #fafafa;"><?= $no ?></font>
                </div>
            </div>
            <div style="margin: 10px;background: linear-gradient(45deg, #00346f, #19487c);padding: 10px;margin-top: -25px;border-radius: 10px;">
                <div style="margin-top: 25px;display: grid;justify-content: center;align-items: center;">
                    <div>
                        <font style="font-size: 16px;font-weight: 500;color: #fff;text-shadow: 0 0 4px #fafafa;"><?= $row['name_group']; ?></font>
                    </div>
                    <div style="margin-top: -12px;">
                        <font style="font-size: 8px;font-weight: 500;color: #fff;text-shadow: 0 0 4px #fafafa;"><?= $row['desc_group']; ?></font>
                    </div>
                    <div>
                        <center>
                            <font style="font-size: 14px;font-weight: 300;color: #fff;text-shadow: 0 0 4px #fafafa;"><i class="fas fa-star"></i> <?= $Total_SUM_R ?></font>
                        </center>
                    </div>
                </div>
            </div>

            <div style="display: none;">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Employee</th>
                                <th>NMT</th>
                                <th>External</th>
                                <th>R</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Votters</td>
                                <td><?= round($result_P_Employee, 2) ?></td>
                                <td><?= round($result_P_NMT, 2) ?></td>
                                <td><?= round($result_P_External, 2) ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Star</td>
                                <td><?= round($result_S_Employee, 2) ?></td>
                                <td><?= round($result_S_NMT, 2) ?></td>
                                <td><?= round($result_S_External, 2) ?></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Total</td>
                                <td>
                                    <?= round($Employee_AVG, 2) ?>
                                    <br>
                                    (Voters * Star) * 0.3
                                </td>
                                <td>
                                    <?= round($NMT_AVG, 2) ?>
                                    <br>
                                    (Voters * Star) * 0.3
                                </td>
                                <td>
                                    <?= round($External_AVG, 2) ?>
                                    <br>
                                    (Voters * Star) * 0.4
                                </td>
                                <td><?= round($Total_SUM_AVG, 2) ?></td>
                            </tr>
                            <tr>
                                <td>result</td>
                                <td>
                                    <?= round($Employee_R, 2) ?>
                                    <br>
                                    Total/Voters
                                </td>
                                <td>
                                    <?= round($NMT_R, 2) ?>
                                    <br>
                                    Total/Voters
                                </td>
                                <td>
                                    <?= round($External_R, 2) ?>
                                    <br>
                                    Total/Voters
                                </td>
                                <td><?= round($Total_SUM_R, 2) ?></td>
                            </tr>
                            <tr>
                                <td colspan="5"><?= round($Total_SUM_R, 2) ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <?php
            $query = $db->query("UPDATE tb_talent SET rating='$Total_SUM_R' WHERE perform='" . $row['perform'] . "' AND name_group='" . $row['name_group'] . "'");
            ?>
        <?php } ?>
    <?php } else { ?>
    <?php } ?>
</div>
<!-- End -->