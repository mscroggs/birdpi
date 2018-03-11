<?php

function show_snap($file){
    echo("<div class='snap'>");
    echo("<img src='".$file."'>");
    echo("<br />");
    echo("<a class='save'>save</a> &nbsp; <a class='delete'>delete</a>");
    echo("</div>");
}

?>

<html>
<head>
<title>Birdpi</title>
<link rel='icon' type='image/png' href='/owl-32.png' sizes='32x32'>
<link rel='icon' type='image/png' href='/owl-16.png' sizes='16x16'>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel='stylesheet' type='text/css' href='/sty.css'>
</head>
<body>
<div class='header'>
<img src='/owl-100.png'> 
<span class='title'>Birdpi</span> 
<span class='links'><a href='/'>main page</a></span>
</div>
