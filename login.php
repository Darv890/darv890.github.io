<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="./assets/styles/register.css">
</head>

<body class="body-bg">
    <main>
        <section class="wrapper">
            <div class="bg-blur w-25">
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?= $_SESSION['error'];
                        unset($_SESSION['error']); ?>
                    </div>
                <?php endif ?>

                <form action="post_login.php" method="post">
                    <h2 class="text-center text-white">User Login</h2>
                    <div class="form-group text-white">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" required />
                    </div>
                    <div class="form-group text-white">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-password" required />
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn-secondary w-full">Login</button>
                    </div>
                    <div>
                        <p class="text-white text-center">Doesn't have an account? <a href="./register.php" class="text-white">Register</a></p>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>