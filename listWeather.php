<?php
$city = $_GET["city"];
$data = array(
    array(
        "name" => "北京",
        "min" => rand(0, 20) . "℃",
        "max" => rand(20, 40) . "℃",
        "weather" => "多云转阴"
    ),
    array(
        "name" => "上海",
        "min" => rand(0, 20) . "℃",
        "max" => rand(20, 40) . "℃",
        "weather" => "晴"
    ),
    array(
        "name" => "广州",
        "min" => rand(0, 20) . "℃",
        "max" => rand(20, 40) . "℃",
        "weather" => "小雨转晴"
    ),
    array(
        "name" => "深圳",
        "min" => rand(0, 20) . "℃",
        "max" => rand(20, 40) . "℃",
        "weather" => "晴"
    ),
    array(
        "name" => "武汉",
        "min" => rand(0, 20) . "℃",
        "max" => rand(20, 40) . "℃",
        "weather" => "晴"
    )
);

$cityMap = array(
    "北京" => 0,
    "上海" => 1,
    "广州" => 2,
    "深圳" => 3,
    "武汉" => 4
);

if (isset($cityMap[$city])) {
    echo json_encode($data[$cityMap[$city]]);
} else {
    echo json_encode(array("error" => "未找到该城市天气信息"));
}
?>