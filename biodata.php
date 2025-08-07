<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <section>
            <h1 class="h1-style">Biodata</h1>


            <form action="store.php" enctype="multipart/form-data" method="post" class="form-style">

                <div class="form-label">
                    <?php
                    $first_name = "";
                    $last_name = isset($_GET["last_name"]) ? $_GET["last_name"] : "";
                    if (isset($_GET["first_name"])) {
                        $first_name = $_GET["first_name"];
                    }
                    ?>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name ?>">
                </div>
                <div class="form-label">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name ?>">
                </div>
                <div class="form-label">
                    <?php $address = isset($_GET["address"]) ? $_GET["address"] : ""; ?>
                    <label for="address">Adress</label value="<?php echo $address ?>">
                    <textarea name="address" autocomplete="false" id="address" class="form-control"><?php echo $address ?></textarea>
                </div>
                <div class="form-option">
                    <label for="gender">Gender</label>
                    <div>
                        <?php $gender = isset($_GET["gender"]) ? $_GET["gender"] : ""; ?>
                        <input type="radio" name="gender" id="gender" value="laki-laki" <?php echo $gender == "laki-laki" ? "checked" : "" ?>>
                        <label for="laki-laki">Laki-Laki</label>
                    </div>
                    <div>

                        <input type="radio" name="gender" id="gender" value="perempuan" <?php echo $gender == "perempuan" ? "checked" : "" ?>>
                        <label for="perempuan">Perempuan</label>
                    </div>

                </div>
                <div class="form-option">
                    <?php $city = isset($_GET["city"]) ? $_GET["city"] : ""; ?>
                    <label for="city">City</label>
                    <select name="city" id="city">
                        <option value="denpasar" selected="<?php echo $city == "denpasar" ? "selected" : "" ?> ">Denpasar</option>
                        <option value="karangasem" selected="<?php echo $city == "karangasem" ? "selected" : "" ?> ">Karangasem</option>
                    </select>
                </div>
                <div class="form-option">
                    <label for="agreement">Agreement</label>
                    <div>
                        <?php $agreement = isset($_GET["agreement"]) ? $_GET["agreement"] : ""; ?>
                        <input type="checkbox" name="agreement" id="agree" <?php echo $agreement == "on" ? "checked" : "" ?>>
                        <label for="agreement">I Agree</label>
                    </div>
                    <!-- <div>
                        <input type="checkbox" name="agreement" id="dissagree">
                        <label for="agreement">I Disagree</label>
                    </div> -->
                </div>
                <!-- <div>
                    <label for="file">Upload KTP</label>
                    <input type="file" name="file" id="file" accept="image/png,image/jpeg">
                </div> -->
                <div>
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn-primary">
                </div>


            </form>
        </section>
    </main>
</body>

</html>