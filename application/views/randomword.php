<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Word Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        h4 {
            border: 1px solid;
            width: 250px;
            margin: 0 auto;
        }
        .container {
            width: 450px;
            margin: 20px auto;
            text-align: center;
        }
        .word {
            width: 400px;
            min-height: 50px;
            margin: 20px auto;
            border: 2px solid;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Random Word (attempt #<?php echo $counter;?>)</h4>
        <div class="word">
            <h2> <?php echo $word; ?> </h2>
        </div>
        <form action="/word/getWord" method="post">
            <input type="submit" value="Generate">
        </form>
    </div>
</body>
</html>