<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
<header>
    <h1>MVC Framework</h1>
</header>
<h2>Profile Page</h2><br>
<div class="container">
    <div class="row">
        <div">
            <br><img src="../public/img/user.jpg" class="profile-image">
            <form method="post" action="profile.php">
                <input type="file" id="avatar" name="avatar">
                <hr>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Edit username" name="username" id="username">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Edit email" name="email" id="email">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Confirm or change password" name="password" id="password">
                <button type="submit" class="registerBtn">Update</button>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <hr>
        <p class="pull-right">Dubov Studio 2021 <span>&copy</span></p>
    </div>
</footer>
</body>
</html>
