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
        <!-- <div class="mobile-block block-minicart" style="display: <?= $showS; ?>;">
            <a class="link-to-cart <?= $uriSegments[2] == 'bus.php' ? 'active' : '' ?>" href="bus.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-bus"></i>
                    </div>
                    Bus
                </span>
            </a>
        </div> -->
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
        <span class="biolife-current-panel-title"><i class="far fa-user-circle"></i> My Account</span>
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
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <div class="header-profiles">
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
                    <font style="text-transform: uppercase;"><?= $showU; ?></font>
                </div>
                <div style="margin-top: -12px;">
                    <a href="logout.php" class="btn btn-sm btn-line-ok">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
            <b class="title"><?= $showD ?> </b>
            <b class="title" style="font-size: 16px;font-weight: 500;font-variant-caps: petite-caps;">Access: <?= $Rheader['role']; ?> </b>
            <b class="title" style="font-size: 16px;font-weight: 500;font-variant-caps: petite-caps;">Contact: <?= $Rheader['tlp']; ?> </b>
            <hr>
        </div>
        <div>
            location
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.134189836487!2d107.6202453!3d-6.874521100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x785d6dbcd145a004!2zNsKwNTInMjguMyJTIDEwN8KwMzcnMTIuOSJF!5e0!3m2!1sen!2sid!4v1673173409878!5m2!1sen!2sid" style="width:100%;height:300px;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div style="margin: -15px;margin-top: 70px;">
            <img src="assets/apps/bg.png" alt="">
        </div>
    </div>
</div>
<script src="dist/markers-on-map-1.4.0.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-6.873512015060014, 107.6203027306792),
            zoom: 9,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // membuat Marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-6.873512015060014, 107.6203027306792),
            map: peta,
            icon: "assets/icon/maker.png"
        });

    }

    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
</script>