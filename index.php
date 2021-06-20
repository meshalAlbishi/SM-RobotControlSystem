<?php
include_once('includes/database.inc.php');

$engineValues = getMotorsValue();
$isPower = getArmPower();

if (isset($_POST['submit'])) {

    updateMotors();

    $engineValues = getMotorsValue();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Robot Control System</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="main">

        <!-- title -->
        <div class="header">
            <h1>Robot Control System</h1>
        </div>

        <!-- robot sliders container-->
        <div class="container">

            <form action="index.php" method="POST">

                <div id="sliders">

                    <?php

                    for ($i = 0; $i < count($engineValues); $i++) {
                    ?>

                        <div class="slider-box">

                            <label for="">Engine <?php echo $engineValues[$i][0] ?> </label>

                            <input class="range" type="range" value="<?php echo $engineValues[$i][1] ?>" min="0" max="180" step="90" name="engine<?php echo $engineValues[$i][0] ?>">

                            <span class="range-value"><?php echo $engineValues[$i][1] ?></span>
                        </div>

                    <?php } ?>

                </div>

                <!-- buttons -->
                <div class="buttons">
                    <?php echo $enign ?>
                    <button type="submit" name="submit">Save</button>
                    <input id="power" type="checkbox" <?php echo ($isPower == 1 ? 'checked' : ''); ?>>

            </form>

        </div>

    </div>

    <script src="main.js"></script>

</body>

</html>