<?php
    require_once("model/include_dao.php");
    //$gallery = new DatGallerie();
?>
<div id="gallery_<?php echo $gallery->id; ?>">
    <ul class="gallery clearfix">
<?php
    $images = DAOFactory::getDatImmaginiDAO()->queryByIdGalleria($gallery->id);
    foreach($images as $image)
    {
        set_time_limit(0);
        $file = DAOFactory::getFilesDAO()->load($image->filesID);
?>
        <li style="display: inline;"><a href="<?php echo $file->filesName; ?>" rel="prettyPhoto[gallery1]" title="<?php echo $image->description; ?>"><img src="<?php echo $file->thumbnails; ?>" height="100" alt="<?php echo $image->title; ?>" title="<?php echo $image->title; ?>" /></a></li>
<?php
    }
?>
    </ul>
</div>