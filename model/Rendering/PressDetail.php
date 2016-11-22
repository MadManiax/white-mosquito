

<div class="pressDetail">   
    <div class="pressDetailHead">
    <div class="pressHeader">
        <div class="pressTitle"><h3><?php echo $pressDetailTitle; ?></h3></div>
        <div class="pressDate">Pubblicato il <?php echo date('d F Y ',strtotime($pressDetailDate)); ?></div>
    </div>
    <div class="pressSubTitle"><a href="<?php echo $pressDetailLink; ?>" target="_blank"><?php echo $pressDetailSubTitle; ?></a></div>    
    </div>
    <div class="clear"></div>
    <div class="pressDetailText"><?php echo $pressDetailText; ?></div>
    
</div>


<!--<div class="pressDetailTitle"><?php //echo $pressDetailTitle; ?></div>
    <div class="pressDetailSubTitle"><?php //echo $pressDetailSubTitle; ?></div>
    <div class="pressDetailDate"><?php //echo $pressDetailDate; ?></div>-->