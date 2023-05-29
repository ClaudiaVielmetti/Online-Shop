<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<section class="reg_form" style="display: flex; justify-content: center; margin-top: 15px">
    <div class="container_register">
        <div class="register-form">
            <form action="">
                <h2 style="text-align: center; margin-bottom:20px;">Register</h2>
                <div class="input_box" style="margin-bottom: 20px;">
                    <input type="email" placeholder="Enter your email" required />
                    <i class="fa-thin fa-envelope" style="color: #000000;"></i>
                </div>
                <div class="input_box" style="margin-bottom: 20px;">
                    <input type="password" placeholder="Create password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="input_box" style="margin-bottom: 20px;">
                    <input type="password" placeholder="Confirm password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <button class="button" style="margin-bottom: 10px; display: block; justify-content: center">Register Now</button>
                <div class="login_signup" style="margin-bottom: 10px;">Already have an account? <a href="login.php" id="login">Login</a></div>
            </form>
        </div>
    </div>
</section>



<?php require "../includes/footer.php"; ?>