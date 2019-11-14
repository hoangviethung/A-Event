<footer>
    <div class="container">
        <div class="row list-info-company">
            <div class="col-lg-6">
                <h5>HOGASH STUDIOS</h5>
                <p>Were a full-service digital agency that believes being a Favorite brand is more valuable than just being a Famous one. We craft beautifully useful, connected ecosystems that grow businesses and build enduring relationships between brands and humans.</p>
            </div>
            <div class="col-lg-2">
                <h5>COMPANY</h5>
                <ul class="list-item-footer">
                    <li class="item-footer"><a href="#">Our Blog</a></li>
                    <li class="item-footer"><a href="#">Instagram</a></li>
                    <li class="item-footer"><a href="#">Snapchat</a></li>
                    <li class="item-footer"><a href="#">Facebook</a></li>
                    <li class="item-footer"><a href="#">Twitter</a></li>
                    <li class="item-footer"><a href="#">Dribbble</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5>MEMBER</h5>
                <ul class="list-item-footer">
                    <li class="item-footer"><a href="#">Home</a></li>
                    <li class="item-footer"><a href="#">About</a></li>
                    <li class="item-footer"><a href="#">Pricing</a></li>
                    <li class="item-footer"><a href="#">Blog</a></li>
                    <li class="item-footer"><a href="#">Services</a></li>
                    <li class="item-footer"><a href="#">Shop</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5>FOLLOW</h5>
                <ul class="list-item-footer">
                    <li class="item-footer"><a href="#">Account</a></li>
                    <li class="item-footer"><a href="#">Billing</a></li>
                    <li class="item-footer"><a href="#">Membership</a></li>
                    <li class="item-footer"><a href="#">Receipt</a></li>
                    <li class="item-footer"><a href="#">Invoice</a></li>
                </ul>
            </div>
        </div>
        <div class="coppy-right">
            <h3>@ 2020 <a href="https://www.facebook.com/hoangviet.hung.009"><span>A EVENT | ALL COPYRIGHT BY A EVENT</span></a></h3>
            <p>This is Project of Hùng, Tuyến, Huy, Sơn.</p>
        </div>
    </div>
</footer>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
    FB.init({
    xfbml            : true,
    version          : 'v4.0'
    });
    };
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-customerchat" attribution="setup_tool" page_id="117903549608295" theme_color="#ffc300" logged_in_greeting="A Event xin chào, chúng tôi giúp gì được cho bạn ?" logged_out_greeting="A Event xin chào, chúng tôi giúp gì được cho bạn ?"></div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?&amp;key=AIzaSyCHvmyTralDp2Y0m7zEiN185u1vtArcC5s&amp;libraries=places"></script>
<script type="text/javascript" src="js/core.min.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script> -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>
@yield('script')
</body>
</html>
