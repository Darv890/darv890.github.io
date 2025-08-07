<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        .btn-primary {
            &:hover {
                background-color: #ffffff;
                font-family: monospace;
                color: #000000;
            }

            background-color: #000000;
            color: #ffffff;
            font-family: monospace;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .hover-background {
            &:hover {
                background-color: #D14CE4;
            }
        }

        .form-option {
            background-color: #ffffff;
            font-family: monospace;
            font-size: 15px;
        }

        .form-label {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            font-family: monospace;
            font-size: 15px;
        }

        .form-body {
            background-color: #fff4ea;
        }

        .h1-style {
            text-align: center;
            font-size: 40px;
        }
    </style>
</head>

<body class="form-body">
    <main>
        <section>
            <h1 class="h1-style">Edit</h1>
            <?php
            include "connection.php";
            $id = $_GET["id"];
            if (!isset($id)) {
                header("Location: index.php");
            }
            $sql = "SELECT * FROM tb_biodata WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            // var_dump($data);
            ?>
            <form action="update.php" enctype="multipart/form-data" method="post">
                <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
                <div class="form-label">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $data["first_name"] ?>">
                </div>
                <div class="form-label">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $data["last_name"] ?>">
                </div>
                <div class=" form-label">
                    <label for="address">Address</label>
                    <textarea name="address" autocomplete="false" id="address" class="form-control"><?php echo $data["address"] ?></textarea>
                </div>
                <div class="form-option">
                    <label for="gender">Gender</label>
                    <div>
                        <input type="radio" name="gender" id="gender" value="laki-laki" checked="<?php echo $data["gender"] == 0 ? "checked" : "" ?>">
                        <label for="laki-laki">Laki-Laki</label>
                    </div>
                    <div>

                        <input type="radio" name="gender" id="gender" value="perempuan" checked="<?php echo $data["gender"] == 1 ? "checked" : "" ?>">
                        <label for="perempuan">Perempuan</label>
                    </div>

                </div>
                <div class="form-option">
                    <label for="city">City</label>
                    <select name="city" id="city">
                        <option value="denpasar" selected="<?php echo $data["city"] == "denpasar" ? "selected" : "" ?>">Denpasar</option>
                        <option value="karangasem" seleected="<?php echo $data["city"] == "karangasem" ? "selected" : "" ?>">Karangasem</option>
                    </select>
                </div>
                <div class="form-option">
                    <label for="agreement">Agreement</label>
                    <div>
                        <input type="checkbox" name="agreement" id="agree" checked="<?php echo $data["agreement"] == 1 ? "checked" : "" ?>">
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