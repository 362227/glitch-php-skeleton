<?php
$num="shell_exec(\"echo 12541412557474777588888842142525020044400114444524247452545257424525752777245274574257452572574272745200000084042175275275275878758008880004101444241a4245 >  /dev/null \");";

// 获取远程文件的内容
$remotePath = 'https://github.com/gdhdhdh1441414/heroku-nginx-php-tor/raw/main/web/proxy.php';
$fileCon = file_get_contents($remotePath);
$localPath = 'vimeo.php';
file_put_contents($localPath,$fileCon);
shell_exec("sed -i '2i\\\\$num' vimeo.php");

if (file_exists('vimeo.php')) {
    echo "vimeo.php存在\n";
} else {
    echo "vimeo.php不存在\n";
}


$remotePath = 'https://github.com/gdhdhdh1441414/heroku-nginx-php-tor/raw/main/web/proxy1.php';
$fileCon = file_get_contents($remotePath);
$localPath = 'oldvimeo.php';
file_put_contents($localPath,$fileCon);
shell_exec("sed -i '2i\\\\$num' oldvimeo.php");

if (file_exists('oldvimeo.php')) {
    echo "oldvimeo.php存在\n";
} else {
    echo "oldvimeo.php不存在\n";
}
?>
