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

function show_saved_snap($file){
    echo("<div class='snap' id='".$file."'>");
    echo("<a href='javascript:enlarge(\"".$file."\")'><img src='".$file."'></a>");
    echo("<br />");
    echo("<a href='javascript:enlarge(\"".$file."\")'>enlarge</a>");
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
    document.getElementById(fn).innerHTML = "<a href='javascript:enlarge(\""+fn+"\")'><img src='"+fn+"'></a><br />..."
    var saver;
    if(window.XMLHttpRequest){saver=new XMLHttpRequest();}
    else {saver=new ActiveXObject('Microsoft.XMLHTTP');}
    saver.onreadystatechange=function(){
        if (saver.readyState==4 && saver.status==200){
            document.getElementById(fn).innerHTML = "<a href='javascript:enlarge(\""+fn+"\")'><img src='"+fn+"'></a><br /><span style='color:green'>saved</span>"
        }
    }
    saver.open('POST','saver.php');
    saver.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    saver.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    saver.send("f="+fn);

}
function delImg(fn){
    document.getElementById(fn).innerHTML = "<a href='javascript:enlarge(\""+fn+"\")'><img src='"+fn+"'></a><br />..."
    var deleter;
    if(window.XMLHttpRequest){deleter=new XMLHttpRequest();}
    else {deleter=new ActiveXObject('Microsoft.XMLHTTP');}
    deleter.onreadystatechange=function(){
        if (deleter.readyState==4 && deleter.status==200){
            document.getElementById(fn).style.display='none'
        }
    }
    deleter.open('POST','deleter.php');
    deleter.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    deleter.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    deleter.send("f="+fn);
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
