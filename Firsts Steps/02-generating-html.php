<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-1 {background-color: red;}
        .body-2 {background-color: green;}
        .body-3 {background-color: blue;}
        .body-5 {background-color: orangered;}
        .body-4 {background-color: yellow;}
        .body-6 {background-color: cyan;}
    </style>
</head>
<body class="body-<?php echo rand(1, 6); ?>" >
    <h1>Choquei</h1>
</body>
</html>