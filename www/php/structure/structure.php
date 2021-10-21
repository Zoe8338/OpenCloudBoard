<?php

require_once 'config.php';

function create_header(){
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.TITLE.'</title>
    
    
    <script src="js/main.js"></script>
</head>
<body>

';
/*
    $counter = 0;
    while ($counter<1000){
        echo "<p>$counter</p>";
        $counter++;
    }*/
}

function create_content($html){
    echo '<div>'.$html.'</div>';
}

function create_footer(){
    echo '</body></html>';
}