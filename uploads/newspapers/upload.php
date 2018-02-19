<?php
$id = $_GET['id'];
$date = $_GET['date'];
if(isset($_FILES['nwp_file'])){
    $basepath = $_SERVER['DOCUMENT_ROOT'].'/uploads/newspapers/';
    //echo "D: ".$date;
    mkdir($basepath.$id, 0777);
    chmod($basepath.$id, 0777);
    foreach ($_FILES["nwp_file"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $f_name = $_FILES['nwp_file']['name'][$key];
            $f_size = $_FILES['nwp_file']['size'][$key];
            $f_temp = $_FILES['nwp_file']['tmp_name'][$key];
            $f_type = $_FILES['nwp_file']['type'][$key];
            $f_path = $basepath.$id.'/'.$f_name;
            if(move_uploaded_file($f_temp, $f_path)){
                $suc = true;
            }else{
                echo "Error!";
            }
        }
    }
    if($suc)echo $id."й выпуск газеты успешно загружен!<br>";
    $info = fopen($basepath."info.json", "rw+tn");
    while(!feof($info)){
        $info_json .= fgets($info);
    }
    fclose($info);
    $info_arr = json_decode($info_json, true);
    $date_arr = explode("-", $date);
    $info_arr[$id] =[
        "day" => "$date_arr[2]",
        "month_i" => "$date_arr[1]",
        "month_s" => "февраля",
        "year" => "$date_arr[0]",
        "page" => "8",
        "time" => "10:13:40"
    ];
    $info_out = json_encode($info_arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_LINE_TERMINATORS );
    echo "\n\r";
    $out = fopen($basepath."info.json","w+tn");
    fwrite($out, $info_out);
    fclose($out);
}
?>
<head>
    <title>Загрузить новый выпуск газеты</title>
</head>
<body>
    <a href="new.php">Ссылка назад</a>
    <form enctype="multipart/form-data" action="?id=<?php echo $id; ?>&date=<?php echo $date; ?>" method="post">
        <input type="file" name="nwp_file[]" multiple accept="image/jpeg">
        <input type="submit" value="Отправить">
    </form>
</body>

<!--
/uploads/newspapers/6/Page/upload.php