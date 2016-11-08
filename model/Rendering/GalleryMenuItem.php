<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="galleryMenu">
    <div class="periodo" style="float:<?php echo $divPeriodoFloat; ?>">
        <a href="<?php echo $page."?periodo=".$periodSelected; ?>">
            <img src="<?php echo $imgPeriodoSrc; ?>" title="<?php echo $imgPeriodoTitle; ?>" alt="<?php echo $imgPeriodoAlt; ?>"/>
        </a>    
    </div>
    <div class="preview" style="float:<?php echo $divPreviewFloat; ?>">
        <a href="<?php echo $page."?periodo=".$periodSelected; ?>">
            <img src="<?php echo $imgPreviewSrc; ?>" title="<?php echo $imgPreviewTitle; ?>" alt="<?php echo $imgPreviewAlt; ?>"/>
        </a>    
    </div>
    <div class="clear" ></div>
</div>