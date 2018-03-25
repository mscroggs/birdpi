
<?php
include("intro.php");
$s = 0;
if(isset($_GET['start'])){$s = $_GET['start'];}
?>
<h1>All snaps</h1>
<?php
$N = 100;
$files = glob('snaps/*.jpg');
echo("<div class='navi'>Showing snaps ".$s."-".min(count($files),$s+$N)."/".count($files)."</div>");
for($i=$s;$i<count($files) && $i<$s+$N;$i++){
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
