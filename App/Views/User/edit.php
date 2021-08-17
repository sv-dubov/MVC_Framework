<?php $title = 'Edit profile';
ob_start();
?>

<h2>Edit Profile Page</h2><br>

<?php if (isset($user->errors)) {
    echo '<ul>';
    foreach ($user->errors as $error) : ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; ?>
    <?php echo '<ul>';
}; ?>

<form id="editProfile" method="post" action="/user/update" enctype="multipart/form-data">
    <div class="container">
        <div>
            <label for="name"><b>Name</b></label>
            <input type="text" name="name" id="name" value="<?php echo $user->name; ?>">
        </div>
        <div>
            <label for="email"><b>Email</b></label>
            <input type="text" name="email" id="email" value="<?php echo $user->email; ?>">
        </div>
        <div>
            <label for="password"><b>Password</b></label>
            <span id="helpBlock"><i> *Leave blank to keep current password</i></span>
            <input type="password" placeholder="Password" name="password" id="password" aria-describedby="helpBlock">
        </div>
        <div>
            <label for="image"><b>Image</b></label><br><br>
            <input type="file" name="image" id="image" class="image">
            <span id="file_error"></span>
        </div>
        <button type="submit" class="registerBtn">Edit</button>
        <a href="/user/profile">Cancel</a>
    </div>
</form>

<?php $content = ob_get_clean();

require_once('../App/Views/layouts/layout.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/hideshowpassword/2.2.0/hideShowPassword.min.js"
        integrity="sha512-feJ++Gf5tPybXI7qL3wIfavxoRCJIuI72gfd0Z2j5MYQIAnEfhzQMp3XHM6eAsXR6JrHULPCVPYFeH9AJiuPJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    /**
     * Add jQuery Validation plugin method for a valid password
     *
     * Valid passwords contain at least one letter and one number.
     */
    $.validator.addMethod('validPassword',
        function (value, element, param) {
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

    $(document).ready(function () {
        /**
         * Validate the form
         */
        $('#editProfile').validate({
            rules: {
                name: 'required',
                email: {
                    required: true,
                    email: true
                },
                password: {
                    minlength: 6,
                    validPassword: true
                }
            }
        });

        /**
         * Validate the avatar image
         */
        $("#image").change(function () {
            $("#file_error").html("");
            $(".image").css("border-color", "#F0F0F0");
            var fileInput = document.getElementById('image');
            var filePath = fileInput.value;
            var file_size = $('#image')[0].files[0].size;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (file_size > 102400) {
                $("#file_error").html("<p style='color:#FF0000'>File is too large. It should be no more than 100KB.</p>");
                $(".image").css("border-color", "#FF0000");
                return false;
            }
            if (!allowedExtensions.exec(filePath)) {
                $("#file_error").html("<p style='color:#FF0000'>Only jpg, jpeg, png and gif files are allowed.</p>");
                $(".image").css("border-color", "#FF0000");
                return false;
            }
            return true;
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
