<?php
include '../../configs/global.php';
include FUNC_PATH . "/function.php";
if (isset($_GET['id'])) {
    $url = "http://music.163.com/api/playlist/detail?id=" . $_GET['id'];
    $json = get_by_curl($url, "163");
    $playlist = json_decode($json, true);
} else {
    echo '<meta http-equiv="refresh" content="0;url=index.php">';
    exit();
}
include VIEW_PATH . "/playlist.php"
?>
