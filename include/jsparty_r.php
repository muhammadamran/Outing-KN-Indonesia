<!-- Scroll Top Button -->
<a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

<!-- Rating Script -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<script src="assets/dist/rating.js"></script>
<!-- End Rating Script -->
<!-- <script src="assets/js/jquery-3.4.1.min.js"></script> -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/biolife.framework.js"></script>
<script src="assets/js/functions.js"></script>
<script type="text/javascript">
    function digitalClock() {
        var d = new Date();
        var h = d.getHours();
        var m = d.getMinutes();
        var s = d.getSeconds();
        var hrs;
        var mins;
        var tsecs;
        var secs;
        hrs = h;
        mins = m;
        secs = s;
        var ctime = hrs + ":" + mins + ":" + secs + " WIB";
        document.getElementById("clock").firstChild.nodeValue = ctime;
    }
    window.onload = function() {
        digitalClock();
        setInterval('digitalClock()', 1000);
    }
</script>
</body>

</html>