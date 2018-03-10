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
<link rel='stylesheet' type='text/css' href='/sty.css'>
</head>
<body>
<div class='header'>
</div>
