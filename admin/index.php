<?php
session_start();
// $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
$user = null;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coding - Home</title>
    <link rel="stylesheet" href="./assets/styles/index.css" />
    <link rel="stylesheet" href="./assets/styles/switch.css" />

</head>

<body>
    <header>
    </header>
    <main>
        <section>Admin</section>
    </main>
    <footer>
        <section>Admin</section>
    </footer>
    <script src="./assets/scripts/index.js"></script>
</body>

</html>