<?php			
echo <<<_END
<ul class="top-hnt-right-content col-lg-6">
<li class="button-log usernhy">
    <a class="btn-open" href="#">
        <span class="fa fa-user" aria-hidden="true"></span>
    </a>
</li>
<li class="transmitvcart galssescart2 cart cart box_1">
    <form action="#" method="post" class="last">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="display" value="1">
        <button class="top_transmitv_cart" type="submit" name="submit" value="">
            My Cart
            <span class="fa fa-shopping-cart"></span>
        </button>
    </form>
</li>
</ul>
<div class="overlay-login text-left">
<button type="button" class="overlay-close1">
    <i class="fa fa-times" aria-hidden="true"></i>
</button>
<div class="wrap">
    <h5 class="text-center mb-4">Login Now</h5>
    <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
        <!--/login-form-->
        <form action="#" method="post">
            <div class="form-group">
                <p class="login-texthny mb-2">Email address</p>
                <input type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="" required="">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                    with anyone else.</small>
            </div>
            <div class="form-group">
                <p class="login-texthny mb-2">Password</p>
                <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="" required="">
            </div>
            <div class="form-check mb-2">
                <div class="userhny-check">
                    <label class="check-remember container">
                        <input type="checkbox" class="form-check"> <span
                            class="checkmark"></span>
                        <p class="privacy-policy">Remember me</p>
                    </label>
                    <div class="clearfix"></div>
                </div>
            </div>
            <button type="submit" class="submit-login btn mb-4">Sign In</button>

        </form>
        <button type="submit" class="submit-login btn mb-4" id="signup" onclick="redirect_page()">Sign up</button>
    </div>

</div>
</div>
</div>
</div>

<script>
function redirect_page(){
    window.location.href = "signup.php";
}
</script>
_END;
				
	?>
