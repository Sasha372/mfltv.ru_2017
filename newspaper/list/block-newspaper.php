<div class="clearfix newspaper-block">
    <div class="newspaper-space"></div>
    <img src="/uploads/newspapers/<?php echo $a?>/title.jpg" class="newspaper-img" />
    <div class="newspaper-data">
        <a href="/newspaper/?path=<?php echo $a?>" class="newspaper-name" target="_blank"><?php echo $nwp_name?></a>
        <div class="newspaper-time">Страниц: <?php echo $nwp_info[$a]["page"]?> <br>Дата создания: <?php echo $nwp_data?></div>
        <a href="/newspaper/?path=<?php echo $a?>" class="grey-button pcb" target="_blank"><span>Листать газету</span></a>
    </div>
</div>