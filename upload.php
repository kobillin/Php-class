<?php

$target_dir ="uploads/";
$target_file = $target_dir.basename($_FILES["FileToUpload"]["name"]);
$upload_sucessfull =1;
$imageFileType =(pathinfo($target_file, PATHINFO_EXTENSION));
?>
