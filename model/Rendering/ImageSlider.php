







<!-- <ul class="bxslider" id="imageSlider"> -->
<div id="slides">
  <?php
    $gallery = DAOFactory::getDatGallerieDAO()->load(28);//queryByTitle("ImageSlider");

    $images = DAOFactory::getDatImmaginiDAO()->queryByIdGalleria($gallery->id);
    foreach($images as $image)
    {
        set_time_limit(0);
        $file = DAOFactory::getFilesDAO()->load($image->filesID);
?>
         <img src="<?php echo $file->filesName; ?>" />
<?php
    }
?>
<!-- </ul> -->

</div>
<script>
$(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        },
        pagination:{
        	active: false
        }
      });
    });
</script>