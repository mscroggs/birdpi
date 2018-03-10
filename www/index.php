<?php
include("intro.php");
?>
<h1>Recent snaps</h1>
<?php
$files = glob('snaps/*.jpg');
foreach(array_slice($files,-5) as $file) {
    show_snap($file);
}
?>
<h1>Saved pictures</h1>
<?php
include("outro.php");
?>
