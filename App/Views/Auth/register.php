<?php $title = 'Register';
ob_start();
?>

<h2>Register Page</h2><br>

<?php if (isset($user->errors)) {
    echo '<p>Errors:</p>';
    echo '<ul>';
    foreach ($user->errors as $error) : ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; ?>
    <?php echo '<ul>';
}; ?>

<form id="register" method="post" action="/auth/create">
    <div class="container">
        <p>Please, fill in this form to create an account.</p>
        <hr>
        <div>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter your name" name="name" id="name" autofocus>
        </div>
        <div>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter your email" name="email" id="email">
        </div>
        <div>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter password" name="password" id="password">
        </div>
        <button type="submit" class="registerBtn">Register</button>
    </div>
    <div class="container signIn">
        <p>Already have an account? <a href="/auth/login">Sign in</a>.</p>
    </div>
</form>

<?php $content = ob_get_clean();

require_once('../App/Views/layouts/layout.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/hideshowpassword/2.2.0/hideShowPassword.min.js" integrity="sha512-feJ++Gf5tPybXI7qL3wIfavxoRCJIuI72gfd0Z2j5MYQIAnEfhzQMp3XHM6eAsXR6JrHULPCVPYFeH9AJiuPJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    /**
     * Add jQuery Validation plugin method for a valid password
     *
     * Valid passwords contain at least one letter and one number.
     */
    $.validator.addMethod('validPassword',
        function(value, element, param) {
            if (value != '') {
                if (value.match(/.*[a-z]+.*/i) == null) {
                    return false;
                }
                if (value.match(/.*\d+.*/) == null) {
                    return false;
                }
            }
            return true;
        },
        'Password must contain at least one letter and one number'
    );

    $(document).ready(function() {

        /**
         * Validate the form
         */
        $('#register').validate({
            rules: {
                name: 'required',
                email: {
                    required: true,
                    email: true,
                    remote: '/account/validate-email'
                },
                password: {
                    required: true,
                    minlength: 6,
                    validPassword: true
                }
            },
            messages: {
                email: {
                    remote: 'This email is already taken'
                }
            }
        });

        /**
         * Show password toggle button
         */
        $('#password').hideShowPassword({
            show: false,
            innerToggle: 'focus'
        });
    });
</script>
