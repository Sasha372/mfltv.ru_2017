<meta charset="UTF-8">
<link href="style.css" rel="stylesheet">
<title>Журналы</title>
<?php
    if($_GET['count']){$count = $_GET['count'];}else{$count = 10;}

    /*require (__FILE__."/Smarty/Smarty.class.php");

    $smarty = new Smarty;
    $smarty->template_dir = 	ABSPATH . "templates/"._TPLFOLDER;	//NO trailing or preceding slash!
    $smarty->compile_dir =		ABSPATH . "Smarty/templates_c"; 	//NO trailing or preceding slash!
    $smarty->cache_dir =  		ABSPATH . "Smarty/cache"; 			//NO trailing or preceding slash!
    $smarty->config_dir = 		ABSPATH . "Smarty/configs"; 		//NO trailing or preceding slash!

    //$smarty->display("header.tpl");*/

    include ("/var/www/mfltv/templates/Syntetica/header/index.php");

    /*class newspap_data {
        function __construct($day, $month_i, $month_s, $year){
            $this->day = $day;
            $this->month_i = $month_i;
            $this->month_s = $month_s;
            $this->year = $year;
        }
        var $day;
        var $month_i;
        var $month_s;
        var $year;
    }*/

    $mfl_path = "/var/www/mfltv/uploads/newspapers/";
    if($_GET['p'] != "")$mfl_path = "C:\\OSPanel\\domains\\mrsashaplay.xyz\\uploads\\newspapers\\";
    $nwp_file = fopen($mfl_path."info.json", "r");
    while(!feof($nwp_file)){
        $json_data .= fgets($nwp_file);
    }
    fclose($nwp_file);
    $nwp_info = json_decode($json_data, true);

    $allNewsp = 8;
    if($count < $allNewsp){
        $lim = $allNewsp - $count;
    }elseif ($count > $allNewsp){
        if($count >= 30){
            if($allNewsp < 30){
                $lim = 0;
            }else{$lim = $allNewsp - 30;}
        }else{$lim = 0;}
    }
?>
<div class="newspaper-list">
    <?php
    for($a = $allNewsp;$a > $lim;$a--){
        $nwp_data = $nwp_info[$a]["year"].'-'.$nwp_info[$a]["month_i"].'-'.$nwp_info[$a]["day"];
        $nwp_name = 'Газета MFL №'.$a.' от '.$nwp_info[$a]["day"].' '.$nwp_info[$a]["month_s"].' '.$nwp_info[$a]["year"].' года';
        include ("block-newspaper.php");
    }
    ?>
</div>