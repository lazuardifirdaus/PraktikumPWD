<?
    $myDir = "c:/xampp/htdocs/PWD/prak1/guestbook/";
    $dir = opendir($myDir);
    echo "Isi folder (klik link untuk download : <br>";
    while ($tmp = readdir($dir)) {
        # code...
        echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
    }
    closedir($dir);
?>