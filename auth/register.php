<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<div class="container_register" style="margin-top: 100px;"  >
    <div class="register-form">
        <form action="">
            <h2>Register</h2>
            <div class="input_box">
                <input type="email" placeholder="Enter your email" required />
                <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
                <input type="password" placeholder="Create password" required />
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
                <input type="password" placeholder="Confirm password" required />
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <button class="button">Register Now</button>
            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
        </form>
    </div>
</div>



<?php require "../includes/footer.php"; ?>