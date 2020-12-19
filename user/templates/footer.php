    <!-- ***** Footer Start ***** -->
    <footer id="footer">
        <div class="container">

            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <p>
                        Phone : (0341) 577-911<br>
                        Email : info@moondaymood.com
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-xs-12 text-center">
                <h4>Moonday Mood</h4>
                <h6>THE BEST STATIONERY</h6>
            </div>

            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>
                        <strong>© copyright moondaymood</strong>. <br>All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="user/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="user/assets/js/popper.js"></script>
    <script src="user/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="user/assets/js/owl-carousel.js"></script>
    <script src="user/assets/js/accordions.js"></script>
    <script src="user/assets/js/datepicker.js"></script>
    <script src="user/assets/js/scrollreveal.min.js"></script>
    <script src="user/assets/js/waypoints.min.js"></script>
    <script src="user/assets/js/jquery.counterup.min.js"></script>
    <script src="user/assets/js/imgfix.min.js"></script>
    <script src="user/assets/js/slick.js"></script>
    <script src="user/assets/js/lightbox.js"></script>
    <script src="user/assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="user/assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
    </body>

    </html>