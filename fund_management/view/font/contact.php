<?php
include_once 'include/header.php';
?>
<div class="container">
    <!------------------------PAGE-AREA START--------------------->
    <div class="all-page-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-page-text">
                        <h1>contact us</h1>
                        <ul>
                            <li><a href="index.html">home <span><i class="fa fa-angle-right"></i></span></a></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------PAGE-AREA END--------------------->
    <!------------------------GOOGLE-AREA START--------------------->
    <br>
    <hr>
    Find us on Google Map and Satellite:
    <div class="google-area">
        <div id="googleMap"></div>
    </div>
    <hr>
    <!------------------------GOOGLE-AREA END--------------------->
    <!------------------------CONTACT-AREA START--------------------->
    <div class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact-form">
                        <h3 class="contact-title">Get in Touch</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <p><input class="form-control" placeholder="Your name *" type="text"></p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <p><input class="form-control" placeholder="Your email *" type="email"></p>
                                </div>
                            </div>
                            <p><textarea style="height:150px" class="form-control" placeholder="Message*" name="message" id="message" cols="30" rows="10"></textarea></p>
                            <input value="Submit" type="submit">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="contact-info">
                        <h3 class="contact-title">Contact information</h3>
                        <p><span><i class="fa fa-map-marker"></i></span> London, Greater London <br> NR1 20NS, UK</p>
                        <p><span><i class="fa fa-envelope"></i></span> education@gmail.com</p>
                        <p><span><i class="fa fa-phone"></i></span> +8801723333608 <br> +8801558952616</p>
                        <p><span><i class="fa fa-globe"></i></span>www.princimran.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------CONTACT-AREA END--------------------->
</div>
<!------------------------FOOTER-AREA START--------------------->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="single-footer-widget">
                    <div class="footer-logo">
                        <h3>Fund Management</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, suscipit iste minus itaque voluptate quod, quo ex, a delectus distinctio sapiente officia! Ex distinctio, ratione odit doloremque dolores quidem ipsum!</p>
                    <div class="footer-social-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <!-- .single-footer-widget -->
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-footer-widget">
                    <h4 class="footer-widget-title">Importaint link</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">about</a></li>
                        <li><a href="#">service</a></li>
                        <li><a href="#">course</a></li>
                        <li><a href="#">testimonial</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
                <!-- .single-footer-widget -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-footer-widget">
                    <h4 class="footer-widget-title">contact us</h4>
                    <p><strong>Location</strong> Dhanmondi - 32, Dhaka <br> Dhaka - 1215</p>
                    <p><strong>Email</strong> fund_management@gmail.com
                    </p>
                    <p><strong>Phone</strong> +8801723333608
                    </p>
                </div>
                <!-- .single-footer-widget -->
            </div>
        </div>
    </div>
</div>
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="copyright">
                    <p>Copyright <span>&copy;</span> 2017, All Right Reserved</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="design-by">
                    <p>Designed by <span>Team_hackslash_BITM_batch_63</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/venobox.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
<script>
var myCenter = new google.maps.LatLng(23.756998, 90.379639);
function initialize() {
var mapProp = {
center: myCenter,
scrollwheel: false,
zoom: 15,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
var marker = new google.maps.Marker({
position: myCenter,
animation: google.maps.Animation.BOUNCE,
icon: '',
map: map,
});
var styles = [{
stylers: [{
hue: "#c5c5c5"
},
{
saturation: -100
}
]
}, ];
map.setOptions({
styles: styles
});
marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>