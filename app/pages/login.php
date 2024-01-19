<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/assets/css/reset.css">
    <link rel="stylesheet" href="../../public/assets/css/login.css">
    <title>Sign in | My site</title>

</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
        <form autocomplete="off" action="/app/core/function.php" method="post">
            <label autocomplete="false" for="chk" aria-hidden="true">Registration form</label>
            <input autocomplete="false" type="text" name="name" placeholder="User name" required pattern='/^[A-Za-z0-9_\x{4e00}-\x{9fa5}]+$/u' >
            <input autocomplete="false" type="email" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <input autocomplete="false" type="password" name="pswd" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
            <p class="log"><?php echo $_SESSION['msg_signup'] ?? '' ?></p>
            <p class="log"><?php echo $_SESSION['error_login'] ?? '' ?></p>
            <button name="sign_up">Register</button>
        </form>
        <a href="<?=ROOT?>"><button id="btn_return" name="back_to_home">&larr; Back to home page</button></a>
    </div>

    <div class="login">
        <form autocomplete="off" action="/app/core/function.php" method="post">
            <label for="chk" aria-hidden="true">Sign in</label>
            <input type="email" name="email" placeholder="Email" required="" autocomplete="off">
            <input type="password" name="pswd" placeholder="Password" required="" autocomplete="off">
            <button name="login">Sign in</button>
        </form>
    </div>
</div>
</body>
</html>