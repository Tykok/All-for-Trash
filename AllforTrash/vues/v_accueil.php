<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p> TEST </p>
<?php

    foreach ($lesUsers as $unUsers){
        echo $unUsers['id_user'];
        echo $unUsers['nom'];
    }

    









