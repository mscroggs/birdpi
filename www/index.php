<?php
include("intro.php");
?>
<h1>Recent snaps</h1>
<div class='allink'><a href='/all.php'>Show all</a></div>
<?php
$files = glob('snaps/*.jpg');
foreach(array_slice($files,-5) as $file) {
    show_snap($file);
}
?>
<h1>Recently saved pictures</h1>
<?php
include("outro.php");
?>
