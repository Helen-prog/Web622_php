<?php
if($_FILES){
    foreach($_FILES["uploads"]["error"] as $key => $error){
        if($error == UPLOAD_ERR_OK){
            $tmp_name = $_FILES["uploads"]["tmp_name"][$key];
            $name = "upload/" . $_FILES["uploads"]["name"][$key];
            move_uploaded_file($tmp_name, $name);
        }
    }
    echo "Файлы загружены";
}

// if($_FILES && $_FILES["filename"]["error"] == UPLOAD_ERR_OK){
//     $name = "upload/" . $_FILES["filename"]["name"];
//     move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
//     echo "Файл загружен";
// }