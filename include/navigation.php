<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<?php
$userHeader = $_SESSION['username'];
$header     = $db->query("SELECT * FROM tb_member WHERE username='$userHeader' ");
$Rheader    = mysqli_fetch_array($header);
if ($Rheader['role'] == 'admin') {
    $showS = 'show';
} else {
    $showS = 'none';
}
?>
<!--Footer For Mobile-->
<div class="mobile-footer">
    <div class="mobile-footer-inner">
        <div class="mobile-block block-minicart">
            <a class="link-to-cart <?= $uriSegments[2] == 'index.php' || $uriSegments[2] == '#' || $uriSegments[2] == '' ? 'active' : '' ?>" href="index.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-home"></i>
                    </div>
                    Home
                </span>
            </a>
        </div>
        <div class="mobile-block block-minicart" style="display: <?= $showS; ?>;">
            <a class="link-to-cart <?= $uriSegments[2] == 'train.php' ? 'active' : '' ?>" href="train.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-subway"></i>
                    </div>
                    Train
                </span>
            </a>
        </div>
        <div class="mobile-block block-minicart" style="display: <?= $showS; ?>;">
            <a class="link-to-cart <?= $uriSegments[2] == 'bus.php' ? 'active' : '' ?>" href="bus.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-bus"></i>
                    </div>
                    Bus
                </span>
            </a>
        </div>
        <div class="mobile-block block-minicart">
            <a class="link-to-cart <?= $uriSegments[2] == 'voting.php' ? 'active' : '' ?>" href="voting.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    Voting
                </span>
            </a>
        </div>
        <div class="mobile-block block-minicart" style="display: <?= $showS; ?>;">
            <a class="link-to-cart <?= $uriSegments[2] == 'member.php' ? 'active' : '' ?>" href="member.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-users"></i>
                    </div>
                    Member
                </span>
            </a>
        </div>
        <div class="mobile-block block-minicart">
            <a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="far fa-user-circle"></i>
                    </div>
                    <font style="text-transform: uppercase;">Account</font>
                </span>
            </a>
        </div>
    </div>
</div>

<div class="mobile-block-global">
    <div class="biolife-mobile-panels">
        <span class="biolife-current-panel-title">My Account</span>
        <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
    </div>
    <div class="block-global-contain">
        <div class="glb-item my-account">
            <?php
            $myString = $userHeader;
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
            <b class="title"><?= $showD ?> </b>
            <ul class="list">
                <hr>
                <li class="list-item"><a href="#">Role: <?= $Rheader['role']; ?></a></li>
                <li class="list-item"><a href="#">No. Telp: <?= $Rheader['tlp']; ?></a></li>
                <hr>
                <li class="list-item">
                    <a href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>