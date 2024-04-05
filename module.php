<?php
require_once "config.php";
//echo "abc";
function taoKetNoi(&$link)
{
    $link = mysqli_connect(HOST, USER, PASSWORD, DB);
    //echo $link;
    if (!$link) {
        echo "Lỗi kết nối đến máy chủ: " . mysqli_connect_error();
        exit();
    }
    return $link;
}

function chayTruyVanTraVeDL($link, $q)
{
    $result = mysqli_query($link, $q);
    return $result;
}

function chayTruyVanKhongTraVeDL($link, $q)
{
    $result = mysqli_query($link, $q);
    return $result;
}

function giaiPhongBoNho($link, $result)
{
    try {
        mysqli_close($link);
        mysqli_free_result($result);
    } catch (TypeError $e) {
    }
}

?>