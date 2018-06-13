<!-- Footer -->
<footer>
    <div class="container text-center">
        <p style="font-size: 15px; color: #000000;">This work was funded by the US National Institutes of Health Fogarty International Center grant"<a href="https://www.fic.nih.gov/Grants/Search/Pages/ecapacity-TW009697.aspx"
                target="_blank"> R25 TW009697</a>.This content is solely the responsibility of the authors and does not necessarily
            represent the official views of the National Institutes of Health.</p>
        <br></br>
        <p style="font-size: 15px; color: #000000;"><?= $pages->find('home')->copyright() ?></p>
        <br></br>
        <li>
            <a href="https://www.instagram.com/mundocomm/" target="_blank">
    <img src="assets/images/instagram-button.png" alt="Instagram Follow Logo" style="width:150px;height:50px;border:0;">
    <a href="https://www.facebook.com/groups/1194471593924303/"
    target="_blank">
    <img src="assets/images/facebook.jpeg" alt="Facebook Group Logo" style="width:150px;height:50px;border:0;">
    </a>
        </li>
    </div>
</footer>

<!-- jQuery -->
<?= js('assets/css/vendor/jquery/jquery.js') ?>

<!-- Bootstrap Core JavaScript -->
<?= js('assets/css/vendor/bootstrap/js/bootstrap.min.js') ?>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

<!-- Theme JavaScript -->
<?= js('assets/js/grayscale.min.js') ?>

</body>
</html>