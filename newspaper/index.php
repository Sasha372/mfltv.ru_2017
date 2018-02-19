<!DOCTYPE html>
<?php
    $nwp_upload = $_SERVER['DOCUMENT_ROOT'].'/uploads/newspapers/';
    $id = $_GET['path'];
    $field =[
        "1" => "pageheight",
        "2" => "pagewidth",
        "3" => "bgcolor",
        "4" => "lang",
        "5" => "pagethickness",
        "6" => "maxloaded",
        "7" => "minscale",
        "8" => "maxscale",
        "9" => "plugins"
    ];
    $tmplat =[
        "1" => "<?xml version = \"1.0\" encoding = \"utf-8\" ?>",
        "2" => "<!DOCTYPE book SYSTEM \"http://www.megazine3.de/megazine2.dtd\">",
        "3" => "<book",
        "4" => "><chapter>",
        "5" => "<page foldfx=\"1\"><img src=\"/uploads/newspapers/",
        "6" => "/",
        "7" => ".jpg\" aa=\"true\" width=\"",
        "8" => "\" height=\"",
        "9" => "\"/></page>",
        "10" => "</chapter></book>"
    ];

    $tmp_xml = "tmp/".rand(1, 99999999999).".xml";

    //==========================//
    $cfg = fopen("config.json", "r");
    $json_data = "";
    while(!feof($cfg)){
        $json_data .= fread($cfg, 1);
    }
    fclose($cfg);
    $cfg_data = json_decode($json_data, true);
    //==========================//
    $file = fopen($tmp_xml, "w+t");
    //chmod(__DIR__.$tmp_xml, 0777);
    //==========================//
    /*$template = fopen("template.xml", "rt");
    while(!feof($template)){
        $data = fgets($template);
        echo $data.")";
        for($i = 0;$i < 8;$i++){
            if($data == $field[$i]){
                $str = $data . $cfg_data[$data];
                break;
                //echo $cfg_data[$data];
                //fwrite($file, $cfg_data[$data]);
            }else{
                $str = $data;
                //fwrite($file, $data);
            }
        }
        fwrite($file, $str);
    }
    //print_r($template_data);
    fclose($template);*/
    //==========================//
    fwrite($file, $tmplat[1]);
    fwrite($file, $tmplat[2]);
    fwrite($file, $tmplat[3]."\n");
    for($i = 1;$i < 10;$i++){
        fwrite($file, $field[$i]."=\"".$cfg_data[$field[$i]]."\"\n");
    }
    fwrite($file, $tmplat[4]);

    $info = fopen($nwp_upload."info.json", "r+t");
    while(!feof($info)){
        $info_file .= fgets($info);
    }
    fclose($info);
    $info_data = json_decode($info_file, true);

    for($i = 1;$i < $info_data[$id]['page'] + 1;$i++){
        $str = $tmplat[5].$id.$tmplat[6].$i.$tmplat[7].$cfg_data["pagewidth"];
        $str .= $tmplat[8].$cfg_data["pageheight"].$tmplat[9]."\n";
        fwrite($file, $str);
    }
    fwrite($file, $tmplat[10]);
    fclose($file);

    //==========================//
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="/newspaper/engine/style.css" rel="stylesheet">
    <script type="text/javascript" src="/newspaper/engine/js/swfobject.js"></script>
    <script type="text/javascript" src="/newspaper/engine/js/swfaddress.js"></script>
    <script type="text/javascript" src="/newspaper/engine/newspaper/newspaper.js"></script>
    <script type="text/javascript">
        var flashvars = {
            /* Used to pass the name of the xml file to use. Path is RELATIVE to basePath, or, if not set, to the megazine.swf file. */
            xmlFile: "/newspaper/<?php echo $tmp_xml?>"
            //logToJsConsole: "true"
        };
        var params = {
            /* Determines whether to enable transparency (show HTML background). Not recommended (slow). Use book/background instead. */
            //wmode: "transparent",
            menu: "false",
            /* Necessary for proper scaling of the content. */
            scale: "noScale",
            /* Necessary for fullscreen mode. */
            allowFullscreen: "true",
            /* Necessary for SWFAddress and other JavaScript interaction. */
            allowScriptAccess: "always"
            /* This is the background color used for the Flash element. */
            //bgcolor: "#333333"
        };
        var attributes = {
            /* This must be the same as the ID of the HTML element that will contain the Flash element. */
            id: "megazine"
        };
        /* Actually load the Flash. */
        swfobject.embedSWF("/newspaper/engine/newspaper/preloader.swf", "megazine", "100%", "100%", "9.0.115",
						   "/newspaper/engine/js/expressInstall.swf", flashvars, params, attributes);
    </script>
</head>
<body class="body-flash">
    <object type="application/x-shockwave-flash" id="megazine"
            data="/newspaper/engine/newspaper/preloader.swf" >
    </object>
</body>
</html>