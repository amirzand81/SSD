<?php
    echo("get base 64 file\n");
    $file = file_get_contents("index.php");
    echo base64_encode($file);
?>
