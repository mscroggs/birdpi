<?php
include("intro.php");
$s = 0;
if(isset($_GET['start'])){$s = $_GET['start'];}
?>
<h1>All snaps</h1>
<?php
$files = glob('snaps/*.jpg');
for($i=$s;$i<count($files) && $i<$s+20;$i++){
    $file = $files[$i];
    show_snap($file);
}

if($i<count($files)){
    echo("<div class='navi'><a href='?start=".$i."'>Next page</a></div>");
}

?>
<?php
include("outro.php");
?>
