<?php
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

if (preg_match('/iphone|ipod|ipad|android/', $userAgent)) {
    // スマートフォン版にリダイレクト
    header('Location: deeblue_sp/index.html');
} else {
    // PC版にリダイレクト
    header('Location: deeblue/index.html');
}
exit();
?>