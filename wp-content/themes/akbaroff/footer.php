<?php wp_footer() ?>
<footer class="footer-section">
    <div class="container">
        <div class="footer-content pt-5 pb-1">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50" id="tutroil">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Ariza Qoldirish</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Telefon raqamingizni yozib qoldiring va biz siz bilan tez orada aloqaga chiqamiz</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Ismingiz">
                                <input type="tel" placeholder="+998991231213" maxlength="13" minlength="9">
                                <button>
                                    <ion-icon name="send-outline"></ion-icon>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-cta pt-5 ">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <ion-icon name="location-outline" style="font-size: 40px;"></ion-icon>
                                <div class="cta-text">
                                    <h4>Manzil</h4>
                                    <span>Toshkent shaxar Yakkasaroy tumani
                                        Navoiy ko'chasi 142 uy</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <ion-icon name="call-outline"></ion-icon>
                                <div class="cta-text">
                                    <h4>Telefon Raqami</h4>
                                    <span><a href="tel:+998998276776">+998 99 827 67 76</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <ion-icon name="mail-outline"></ion-icon>
                                <div class="cta-text">
                                    <h4>Email</h4>
                                    <span><a href="mailto:office@akbaroffstroy.uz">office@akbaroffstroy.uz</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="<?php bloginfo('template_url') ?>/assets/img/logoO.png"
                                    class="img-fluid" alt="logo"></a>
                        </div>

                        <div class="footer-social-icon">

                            <ul class="social_icon">
                                <li><a href="#">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a></li>
                                <li><a href="#">
                                        <ion-icon name="logo-tiktok"></ion-icon>
                                    </a></li>
                                <li><a href="#">
                                        <ion-icon name="logo-youtube"></ion-icon>
                                    </a></li>
                                <li><a href="#">
                                        <ion-icon name="paper-plane-outline"></ion-icon>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('.nav').addClass('affix');
        console.log("OK");
    } else {
        $('.nav').removeClass('affix');
    }
});
$('.navTrigger').click(function() {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $(".navMenu").toggleClass("active");


});

function remuveNav() {
    $('.navMenu').removeClass('active');
}
</script>
</body>

</html>