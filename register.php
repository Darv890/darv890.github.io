<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/styles/register.css">
</head>

<body class="body-bg">
    <main>
        <section class="wrapper">
            <form action="" method="post" class="bg-blur w-25">
                <h2 class="text-center text-white">Register</h2>
                <div class="form-row">
                    <div class="form-group text-white">
                        <label for="Username">Username</label>
                        <input type="text" id="Username" name="Username" placeholder="Username" required />
                    </div>
                    <div class="form-group text-white">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Full Name" class="form-name" required />
                    </div>
                </div>
                <div class="form-group text-white">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Email Address" required />
                </div>
                <div class="form-group text-white">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder="Password" class="form-password" required />
                </div>
                <div>
                    <button type="submit" class="btn-secondary w-full">Register</button>
                </div>
            </form>

        </section>
    </main>
</body>

</html>