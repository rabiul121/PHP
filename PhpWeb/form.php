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
            <?php if(isset($_GET['fname']) && !empty($_GET['fname'])): ?>
            First Name: <?php echo $_GET['fname'];?> <br>
            <?php endif; ?>
            <?php if(isset($_GET['lname']) && !empty($_GET['lname'])): ?>
            Last Name: <?php echo $_GET['lname'];?> <br> <br>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="GET">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>