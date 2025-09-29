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
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="../assets/styles/switch.css" />

</head>

<body>
    <header>
    </header>
    <main>
        <section class="contact-section">
            <div class="w-50">
                <form action="proses_upload.php" method="post" enctype="multipart/form-data" class="form-contact" id="destinations-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" class="form-name" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" placeholder="Description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">Image</label>
                        <input type="file" name="image" id="file" placeholder="Image" accept="image/*" required></input>
                    </div>
                    <button type="submit" name="submit" class="btn-primary">Upload</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <section>Admin</section>
    </footer>
    <script src="./assets/scripts/index.js"></script>
</body>

</html>