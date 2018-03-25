<?php

function show_snap($file){
    echo("<div class='snap' id='".$file."'>");
    echo("<a href='javascript:enlarge(\"".$file."\")'><img src='".$file."'></a>");
    echo("<br />");
    echo("<a href='javascript:enlarge(\"".$file."\")'>enlarge</a>");
    echo(" &nbsp; ");
    echo("<a class='save' href='javascript:saveImg(\"".$file."\")'>save</a>");
    echo(" &nbsp; ");
    echo("<a class='delete' href='javascript:delImg(\"".$file."\")'>delete</a>");
    echo("</div>");
}

?>

<script type='text/javascript'>
function enlarge(fn){
    document.getElementById("bigimg").src = fn
    document.getElementById("bigi").style.display = "block"
}
function hideImg(){
    document.getElementById("bigi").style.display = "none"
}
function saveImg(fn){
    document.getElementById(fn).innerHTML = "<a href='javascript:enlarge(\""+fn+"\")'><img src='"+fn+"'></a><br /><span style='color:green'>saved</span>"
    
}
function delImg(fn){
    document.getElementById(fn).style.display='none'
}
</script>

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
<div class='bigi' onclick='hideImg()' id='bigi'><img id='bigimg'></div>
