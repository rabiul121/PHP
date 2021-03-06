<?php
include_once "form2-functions.php";
$fruits = ['apple', 'banana', 'mango', 'orange', 'pineapple'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML SELECT</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Select/Dropdowns</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae doloribus expedita itaque iusto
                modi omnis quasi quos sapiente sed!</p>
            <p>
                <?php
                if (isset($_POST['fruits']) && $_POST['fruits'] != '') {
                    printf("You have selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING));
                }
                ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form action="" method="POST">
                <label for="fruits">Select Some Fruits</label>
                <select name="fruits" id="fruits">
                    <option value="" disabled selected>Select Some Fruits</option>
                    <?php displayOptions($fruits); ?>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>