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
            if ($RP_NMT == NULL) {
                $result_P_NMT = 0;
            } else {
                $result_P_NMT = $RP_NMT['P_NMT'];
            }
            // Employee Voters
            $P_Employee        = $db->query("SELECT COUNT(*) AS P_Employee FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='Employee'");
            $RP_Employee       = mysqli_fetch_array($P_Employee);
            if ($RP_Employee == NULL) {
                $result_P_Employee = 0;
            } else {
                $result_P_Employee = $RP_Employee['P_Employee'];
            }
            // External Voters
            $P_External        = $db->query("SELECT COUNT(*) AS P_External FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='External'");
            $RP_External       = mysqli_fetch_array($P_External);
            if ($RP_External == NULL) {
                $result_P_External = 0;
            } else {
                $result_P_External = $RP_External['P_External'];
            }

            // NMT Star 1
            $S_O_NMT             = $db->query("SELECT SUM(star_one) AS S_O_NMT FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='NMT'");
            $RS_O_NMT            = mysqli_fetch_array($S_O_NMT);
            if ($RS_O_NMT == NULL) {
                $result_S_O_NMT  = 0;
            } else {
                $result_S_O_NMT  = $RS_O_NMT['S_O_NMT'];
            }
            // NMT Star 2
            $S_T_NMT             = $db->query("SELECT SUM(star_two) AS S_T_NMT FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='NMT'");
            $RS_T_NMT            = mysqli_fetch_array($S_T_NMT);
            if ($RS_T_NMT == NULL) {
                $result_S_T_NMT  = 0;
            } else {
                $result_S_T_NMT  = $RS_T_NMT['S_T_NMT'];
            }
            $result_S_NMT = $result_S_O_NMT +  $result_S_T_NMT;

            // Employee Voters 1
            $S_O_Employee        = $db->query("SELECT SUM(star_one) AS S_O_Employee FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='Employee'");
            $RS_O_Employee       = mysqli_fetch_array($S_O_Employee);
            if ($RS_O_Employee == NULL) {
                $result_S_O_Employee = 0;
            } else {
                $result_S_O_Employee = $RS_O_Employee['S_O_Employee'];
            }
            // Employee Voters 2
            $S_T_Employee        = $db->query("SELECT SUM(star_two) AS S_T_Employee FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='Employee'");
            $RS_T_Employee       = mysqli_fetch_array($S_T_Employee);
            if ($RS_T_Employee == NULL) {
                $result_S_T_Employee = 0;
            } else {
                $result_S_T_Employee = $RS_T_Employee['S_T_Employee'];
            }
            $result_S_Employee = $result_S_O_Employee +  $result_S_T_Employee;


            // External Voters 1
            $S_O_External        = $db->query("SELECT SUM(star_one) AS S_O_External FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='External'");
            $RS_O_External       = mysqli_fetch_array($S_O_External);
            if ($RS_O_External == NULL) {
                $result_S_O_External = 0;
            } else {
                $result_S_O_External = $RS_O_External['S_O_External'];
            }
            // External Voters 2
            $S_T_External        = $db->query("SELECT SUM(star_two) AS S_T_External FROM tb_vote WHERE group_name='" . $row['name_group'] . "' AND level='External'");
            $RS_T_External       = mysqli_fetch_array($S_T_External);
            if ($RS_T_External == NULL) {
                $result_S_T_External = 0;
            } else {
                $result_S_T_External = $RS_T_External['S_T_External'];
            }
            $result_S_External = $result_S_O_External +  $result_S_T_External;

            // AVG
            if ($result_S_NMT == NULL) {
                $NMT_AVG          = 0;
            } else {
                $NMT_AVG          = $result_S_NMT / $result_P_NMT;
            }
            if ($result_S_Employee == NULL) {
                $Employee_AVG          = 0;
            } else {
                $Employee_AVG     = $result_S_Employee / $result_P_Employee;
            }
            if ($result_S_External == NULL) {
                $External_AVG          = 0;
            } else {
                $External_AVG     = $result_S_External / $result_P_External;
            }

            $Total_SUM_AVG    = $NMT_AVG + $Employee_AVG + $External_AVG;

            // Result
            if ($NMT_AVG == NULL) {
                $NMT_R      = 0;
            } else {
                $NMT_R      = $NMT_AVG * 0.3;
            }

            if ($Employee_AVG == NULL) {
                $Employee_R = 0;
            } else {
                $Employee_R = $Employee_AVG * 0.3;
            }

            if ($External_AVG == NULL) {
                $External_R      = 0;
            } else {
                $External_R = $External_AVG * 0.4;
            }

            $Total_SUM_R    = $NMT_R + $Employee_R + $External_R;
    ?>
    <div style="display: flex;justify-content: center;align-items: center;">
        <div class="icon-awards">
            <!-- <img src="assets/3d/medal-dynamic-premium.png" alt="Vote" style="width: 700px;"> -->
            <font style="font-size: 25px;font-weight: 900;color: #fff;text-shadow: 0 0 4px #fafafa;"><?= $no ?></font>
        </div>
    </div>
    <div
        style="margin: 10px;background: linear-gradient(45deg, #00346f, #19487c);padding: 10px;margin-top: -25px;border-radius: 10px;">
        <div style="margin-top: 25px;display: grid;justify-content: center;align-items: center;">
            <div>
                <font style="font-size: 16px;font-weight: 500;color: #fff;text-shadow: 0 0 4px #fafafa;">
                    <?= $row['name_group']; ?></font>
            </div>
            <div style="margin-top: -12px;">
                <font style="font-size: 8px;font-weight: 500;color: #fff;text-shadow: 0 0 4px #fafafa;">
                    <?= $row['desc_group']; ?></font>
            </div>
            <div>
                <center>
                    <font style="font-size: 14px;font-weight: 300;color: #fff;text-shadow: 0 0 4px #fafafa;"><i
                            class="fas fa-star"></i> <?= $Total_SUM_R ?></font>
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
                        <td><?= $result_P_Employee ?></td>
                        <td><?= $result_P_NMT ?></td>
                        <td><?= $result_P_External ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Star</td>
                        <td><?= $result_S_Employee ?></td>
                        <td><?= $result_S_NMT ?></td>
                        <td><?= $result_S_External ?></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Average</td>
                        <td>
                            <?= round($Employee_AVG, 2); ?>
                            <br>
                            <font style="font-size:8px">Voters / Star</font>
                        </td>
                        <td>
                            <?= round($NMT_AVG, 2); ?>
                            <br>
                            <font style="font-size:8px">Voters / Star</font>
                        </td>
                        <td>
                            <?= $External_AVG ?>
                            <br>
                            <font style="font-size:8px">Voters / Star</font>
                        </td>
                        <td><?= round($Total_SUM_AVG, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Weightage</td>
                        <td>
                            30%
                        </td>
                        <td>
                            30%
                        </td>
                        <td>
                            40%
                        </td>
                        <td><?= $Total_SUM_R ?></td>
                    </tr>
                    <tr>
                        <td>W. Perform</td>
                        <td>
                            <?= round($Employee_R, 2); ?>
                            <br>
                            Total/Voters
                        </td>
                        <td>
                            <?= round($NMT_R, 2); ?>
                            <br>
                            Total/Voters
                        </td>
                        <td>
                            <?= round($External_R, 2); ?>
                            <br>
                            Total/Voters
                        </td>
                        <td><?= round($Total_SUM_R, 2); ?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= round($Total_SUM_R, 2); ?></td>
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