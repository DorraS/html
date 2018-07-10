<?php
var_dump($_FILES);
if (count ($_FILES)){
    $tmp_name= $_FILES['myFile']['tmp_name'];
    $file_size = intval($_FILES['myFile']['size']);
    $file_type= $_FILES['myFile']['type'];
    $uniq_name = uniqid();
    $filr_ext = '.json';
    $uploaded_name = 'upload/' .$_FILES;
}


 ?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myFile"id="myFile" accept="application/json">
    <button type="submit" >Upload</button>

</form>
