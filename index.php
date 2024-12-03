<?php
include "config.php";
$menu = $_REQUEST['menu'] ?? null;
$aksi = $_REQUEST['aksi']  ?? null;
$id = $_REQUEST['id']  ?? null;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>EXPERT SYSTEM</title>
    <script language="javascript" src="jscript.js" type="text/javascript"></script>
</head>

<body>
    EXPERT SYSTEM BASED ON PHP & MySQL <br />
    by Za~Q <a href="https://www.google.com/search?q=achmad+zakki+falani&rlz=1C1CHZL_enID840ID840&sxsrf=ALiCzsakZG0GN6lh4DCbAt1W661sXMyIeA%3A1670249363016&ei=k_uNY5dPpaKx4w-nipCQCg&ved=0ahUKEwjX5N_f0-L7AhUlUWwGHScFBKIQ4dUDCA8&uact=5&oq=achmad+zakki+falani&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIECCMQJ0oECEEYAEoECEYYAFAAWPsBYOAFaABwAHgAgAF5iAHlAZIBAzAuMpgBAKABAcABAQ&sclient=gws-wiz-serp" target="_blank">(My Profile)</a><br /><br />
    <a href="index.php">Home</a> | <a href="index.php?menu=master_gejala">Master Gejala</a> | <a href="index.php?menu=master_penyakit">Master Penyakit</a> | <a href="index.php?menu=seting_rule">Seting Rule</a> | <a href="index.php?menu=keluhan_pasien">Keluhan Pasien</a>
    <p>
        <?php
        if (isset($menu)) {
            include $menu . ".inc.php";
        } else {
            echo "<br><br>SHORT ALGORITHM PRODUCE WONDERFULL OUTPUT, <br>dibalik Tampilan Yang Sederhana ini tersimpan Methode yang Cantik";
        }
        ?>
    </p>
</body>

</html>
