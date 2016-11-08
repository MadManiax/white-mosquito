<div class="merchItem">
    <div class="merchLeft" style="float:<?php $float= "left"; 	if(isset($flipMode)) {if($flipMode == "true"){$float= "right";}} echo $float;?>;">
        <ul class="gallery clearfix">
            <li style="display: inline;">
                <a href="<?php echo $merchItemImgSrc; ?>" rel="prettyPhoto[gallery1]" title="<?php echo $merchItemTitle; ?>" alt="<?php echo $merchItemAlt; ?>">
                    <img src="<?php echo $merchItemImgSrc; ?>" alt="<?php echo $merchItemAlt; ?>" title="<?php echo $merchItemTitle; ?>" />
                </a>
            </li>
        </ul>
    </div>
    <div class="merchRight"  style="float:<?php $float= "right"; if(isset($flipMode)) { if($flipMode == "true") { $float= "left";}} echo $float;?>;">
        <h3><?php echo $merchItemTitle; ?></h3>
        <ul>
            <li><span>DESCRIZIONE:</span> <?php echo $merchItemDescrizione; ?></li>
            <li><span>COSTO:</span> <?php echo $merchItemCosto; ?></li>
            <li><span>MODALITA:</span> <?php echo $merchItemMode; ?></li>            
			<?php if(isset($urlToBuy))
			{
			?>
            <li><span>ACQUISTA ON LINE:</span> <a href="<?php echo $urlToBuy;?>" target="_blank">Compra on line</a></li>
			<?php
			}
			?>
			
			            
        </ul>        
    </div>
</div>