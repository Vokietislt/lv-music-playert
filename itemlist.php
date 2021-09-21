<?php
function getList($url = "music/*"){
    $dir    = $url;
    $folder = rtrim($url,'/* ');
    $files1 = glob($dir) ;

    $backfolder = explode('/',$folder);
    $folderLength=count($backfolder)-1;
    unset($backfolder[$folderLength]);
    $backfolder =implode("/",$backfolder);
    if ($backfolder !=="")
    echo '<a onclick=folder("'.urlencode($backfolder).'")>Back</a>';
    echo $folder;
    foreach ($files1 as $value) {
        $name = explode('/',$value);
        if(!is_file($value) ){
            
            echo '<a onclick=folder("'.urlencode($value) .'")>'. end($name).'/...</a>';
        }
        else {
           echo '<a onclick=player("'.urlencode($value) .'")>'. end($name).'</a>';
       }
    }
}
if ($_GET["directory"]!=""){ getList($_GET["directory"]) ;}
else {getList();}
?>