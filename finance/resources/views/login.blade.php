@include('header')
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main" style="width: 100%;">
            <div class="auth-box">
                <div class="top">
                    <img src="../assets/images/kopagas/logo.png" alt="Kopagas">
                    <h6 style=> HRMS </h6>
                </div>
                <div class="card">
                    <div class="header"> 
                        <p class="lead">Login to your account</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" action="index.html">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control" id="signin-email" value="user@domain.com" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>								
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                                <span>Don't have an account? <a href="page-register.html">Register</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')