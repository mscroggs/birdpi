<?php

$f = $_POST['f'];

echo shell_exec("mv ".$f." saved/");
?>
