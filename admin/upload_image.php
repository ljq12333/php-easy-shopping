<?php
try{
    $path = dirname(dirname(__FILE__))."/images/";
    $name = $_FILES["image"]["name"];
    $path1 = "images/".$name;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $path.$name)) {
        $path = $path.$name;
        header('Content-Type:application/json; charset=utf-8');
        $array = array(
            "code" => 200,
            "path" => $path1,
        );
        exit(json_encode($array));
    } else {
        echo "文件上传失败";
    }
}
catch (Exception $e){
    echo "error";
}
?>