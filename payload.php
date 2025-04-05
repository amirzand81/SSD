<?php
echo "<pre>";
passthru("ls");
echo "<pre>";
shell_exec("ls");
echo "<pre>";
exec("ls", $out); print_r($out);
echo "<pre>";
`ls`; 
echo "</pre>";
?>
