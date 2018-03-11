<?php
include("intro.php");
?>
<h1>All snaps</h1>
<?php
$files = glob('snaps/*.jpg');
foreach(array_slice($files) as $file) {
    show_snap($file);
}
?>
<?php
include("outro.php");
?>
