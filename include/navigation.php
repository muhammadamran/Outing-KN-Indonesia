<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<?php
$userHeader = $_SESSION['username'];
$header     = $db->query("SELECT * FROM tb_users WHERE username='$userHeader' ");
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
        <div class="mobile-block block-minicart" id="IDMB-Menu">
            <a class="link-to-cart <?= $uriSegments[2] == 'index.php' || $uriSegments[2] == '#' || $uriSegments[2] == '' ? 'active' : '' ?>" href="index.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-home"></i>
                    </div>
                    Home
                </span>
            </a>
        </div>
        <!-- <div class="mobile-block block-minicart" id="IDMB-Menu" style="display: <?= $showS; ?>;">
            <a class="link-to-cart <?= $uriSegments[2] == 'train.php' ? 'active' : '' ?>" href="train.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-subway"></i>
                    </div>
                    Train
                </span>
            </a>
        </div> -->
        <!-- <div class="mobile-block block-minicart" id="IDMB-Menu">
            <a class="link-to-cart <?= $uriSegments[2] == 'voting.php' ? 'active' : '' ?>" href="voting.php">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    Voting
                </span>
            </a>
        </div> -->
        <!-- <div class="mobile-block block-minicart" id="IDMB-Menu">
            <a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
                <span class="text">
                    <div style="font-size: 25px;margin-bottom: 5px;">
                        <i class="far fa-user-circle"></i>
                    </div>
                    <font style="text-transform: uppercase;">Account</font>
                </span>
            </a>
        </div> -->
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
            <?php if ($Rheader['role'] == 'admin') { ?>
                <div style="display: flex;justify-content: flex-start;align-items: center;margin-top:20px">
                    <div>
                        <a href="https://discord.gg/c9pha7A3" target="_blank" class="a-global-icon-discord">
                            <i class="fab fa-discord"></i>
                        </a>
                    </div>
                    <div style="margin-left: 5px;">
                        <a href="" class="a-global-icon-wa">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <hr>
        </div>
        <div style="margin-top: -18px;margin-bottom: 5px;">
            <b class="title" style="font-size: 13px;font-weight: 900;font-variant-caps: petite-caps;color: #fff;margin-top: -58px;"><i class="fas fa-map-marker-alt"></i> Location: Sheraton Bandung Hotel & Towers </b>
        </div>
        <div id="googleMap" style="width:100%;height:380px;"></div>
        <div style="margin: -15px;margin-top: 70px;">
            <img src="assets/apps/bg.png" alt="">
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly" defer></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-6.8746317669106585, 107.62022027905368),
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-6.8746317669106585, 107.62022027905368),
            map: peta,
            icon: "assets/icon/maker.png"
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>