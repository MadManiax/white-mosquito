<div class="pressItem">    
    <div class="pressHeader">
        <div class="pressTitle"><h3><?php echo $pressTitle; ?></h3></div>
        <div class="pressDate">Pubblicato il <?php if(strtotime($pressData) >= strtotime('2012-09-01')) echo "2013"; else echo date('d F Y ',strtotime($pressData)); ?></div>
    </div>
    <div class="clear"></div>
    <div class="pressSubTitle"><a href="<?php echo $pressLink; ?>" target="_blank"><?php echo $pressSubTitle; ?></a></div>  
    <br/>
    <br/>
    <div class="clear"></div>
    <div class="pressText">"<?php echo $pressStralcio; ?>"</div>
    <div class="clear"></div>
    <div class="pressVai"><a href="press.php?pressId=<?php echo $pressId;?>">Leggi tutto</a></div>
</div>
