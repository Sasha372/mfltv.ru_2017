<?php

function dirDel ($dir)
{
    $d=opendir($dir);
    while(($entry=readdir($d))!==false)
    {
        if ($entry != "." && $entry != "..")
        {
            if (is_dir($dir."/".$entry))
            {
                dirDel($dir."/".$entry);
            }
            else
            {
                unlink ($dir."/".$entry);
            }
        }
    }
    closedir($d);
    return rmdir($dir);
}

$basepath = $_SERVER['DOCUMENT_ROOT'].'/uploads/newspapers/';
$dir = $_GET['rm'];
if($dir != ""){
    if(delDir($basepath.$dir)){
        echo "Directory was successful delite.";
    }else{
        echo "Directory wasn't delite.";
    }
}else echo "Directory for delite not ";

