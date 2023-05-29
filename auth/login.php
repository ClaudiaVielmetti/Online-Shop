<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>


<!-- Home -->
<section class="home">
    <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
            <form action="#">
                <h2>Login</h2>
                <div class="input_box">
                    <input type="email" placeholder="Enter your email" required />
                    <i class="uil uil-envelope-alt email"></i>
                </div>
                <div class="input_box">
                    <input type="password" placeholder="Enter your password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="option_field">
                    <span class="checkbox">
                        <input type="checkbox" id="check" />
                        <label for="check">Remember me</label>
                    </span>
                    <a href="#" class="forgot_pw">Forgot password?</a>
                </div>
                <button class="button">Login Now</button>
                <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
            </form>
        </div>

        <?php require "../includes/footer.php"; ?>