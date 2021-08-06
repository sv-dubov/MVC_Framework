<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
<header>
    <h1>MVC Framework</h1>
</header>
<h2>Register Page</h2><br>
<form id="register" method="post" action="register.php">
    <div class="container">
        <p>Please, fill in this form to create an account.</p>
        <hr>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="username" id="username" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="password" id="password" required>
        <button type="submit" class="registerBtn">Register</button>
    </div>
    <div class="container signIn">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
<footer>
    <div class="container">
        <hr>
        <p class="pull-right">Dubov Studio 2021 <span>&copy</span></p>
    </div>
</footer>
</body>
</html>
