<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First PHP Site</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<style>
    body {
        margin-top: 30px;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Our First Form</h1>
            <p>
                <?php
                $fname = '';
                $lname = '';
                ?>

                <?php if (isset($_GET['fname']) && !empty($_GET['fname'])) {
                    $fname = htmlspecialchars($_REQUEST['fname']);
                } ?>
                <?php if (isset($_GET['lname']) && !empty($_GET['lname'])) {
                    $lname = htmlspecialchars($_REQUEST['lname']);
                } ?>
            </p>
            <p>
                First Name: <?php echo $fname; ?> <br>
                Last Name: <?php echo $lname; ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="GET">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>