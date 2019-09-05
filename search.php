<?php
/**
 * @author SevernCode
 * @version 1.0
 * Thanks For Everything
 */

@system("clear");
/* 
Kalian Bisa Download API Nya Disini https://github.com/SevernC0de/anitoki-api/
Upload Di Cpanel Kalian
Ganti http://repository.poltekpos.ac.id/dashboard/de/ani.php 
Menjadi http://websitekalian.com/ani.php
*/
define('url', 'http://repository.poltekpos.ac.id/dashboard/de/ani.php');
include_once "color.php";
$banner = "
 █████╗ ███╗   ██╗██╗████████╗ ██████╗ ██╗  ██╗██╗
██╔══██╗████╗  ██║██║╚══██╔══╝██╔═══██╗██║ ██╔╝██║
███████║██╔██╗ ██║██║   ██║   ██║   ██║█████╔╝ ██║
██╔══██║██║╚██╗██║██║   ██║   ██║   ██║██╔═██╗ ██║
██║  ██║██║ ╚████║██║   ██║   ╚██████╔╝██║  ██╗██║
╚═╝  ╚═╝╚═╝  ╚═══╝╚═╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚═╝
";
echo $lred.$banner;
echo $lcyan;
$s = fwrite(STDOUT, "Search Anime : ");
$s = trim(fgets(STDIN));
$p = isset($page) ? intval($page) : 1;
menu:
// get Json
$get = file_get_contents(url."?s=".urlencode($s)."&p=".$p);
$json = json_decode($get,true);
if ($json['error_code'] == "200") {
    $count = count($json['result']);
    // Looping
    echo $lred."==============================================\n";
    for ($i=0; $i < $count; $i++) { 
        echo $lgreen.$i. ". ".$json['result'][$i]['title'],"\n";
    }
    echo $lred."==============================================\n";

    echo $white."1. Download\n2. Next Page\n3. Exit\n";
    $option = fwrite(STDOUT, "Choose : ");
    $option = trim(fgets(STDIN));
    // action 1
    if($option == 1 || $option == "1") {
        download:
        $option = fwrite(STDOUT, $white."Choose a Number You Want Download : ");
        $option = trim(fgets(STDIN));
        $id = $json['result'][$option]['link'];
        if (!empty($id)) {
            include_once "download.php";
        }else {
            echo "Please Choose a number\n";
            goto download;
        }
    } 
    // action 2
    elseif ($option == 2 || $option == "2") {
        $p = $p + 1;
    goto menu;
    } 
    // action 3
    elseif ($option == 3 || $option == "3") {
        echo "See You Next Time :*\n" ;
        exit();
    }

}
elseif ($json['error_code'] == "404") {
    echo $lred."Not Found\n";
    $s = fwrite(STDOUT, $white."Coba lagi : ");
    $s = trim(fgets(STDIN));
    goto menu;
}else {
    "Build By SevernCode - SecurityGhost\n";
    sleep(5);
    exit();
}



?>