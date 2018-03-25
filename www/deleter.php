<?php

$f = $_POST['f'];

echo shell_exec("rm ".$f."");
?>
