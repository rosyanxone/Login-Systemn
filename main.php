<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login / Signup Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/loginTrainee.css">
    <!-- <link rel="icon" href="../image/Logo SHIAN W.png"> -->
</head>

<body>
    <div class="container">

        <?php 
            include_once 'signin.php';
        ?>

        <?php
            include_once 'signup.php';
        ?>

    </div>

    <script src="./src/login.js"></script>
</body>