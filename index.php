
<?php
    require_once("model/include_dao.php");
    //$gallery = new DatGallerie();
?>
<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

<meta name="title" content="White MosQuito - Official Website"/>
<meta name="description" content="Gli amici dei white mosquito"/>
<meta name="keywords" content="white mosquito, ascolta, musica, personalità nascoste, in faccia, il potere e la sua signora"/>


<?php
  //Assign all Page Specific variables
  $pageMetatags = ob_get_contents();
  ob_end_clean();
 ?>	


<!-- CSS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<!-- jQuery library (served from Google) <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->


<!-- bxSlider CSS file -->
<link href="includes/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="includes/css/home.css"/>
<?php
  //Assign all Page Specific variables
  $pageCss = ob_get_contents();
  ob_end_clean();
 ?>


<!-- JAVASCRIPT CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<!-- bxSlider Javascript file -->
<script src="includes/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="includes/jquery.bxslider/plugins/jquery.fitvids.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
  $('#imageSlider').bxSlider({
    auto:true,
    autoControls: true
  });
  $('#videoSlider').bxSlider({
    video: true,
    useCSS: false,
    auto:true,
    autoControls: true
  });
});

</script>


<?php
  //Assign all Page Specific variables
  $pageScripts = ob_get_contents();
  ob_end_clean();
 ?>


<?php
//Buffer larger content areas like the main page content
ob_start();
?>

<h3>Images</h3>	
<ul class="bxslider" id="imageSlider">
  <?php
    $gallery = DAOFactory::getDatGallerieDAO()->load(28);//queryByTitle("ImageSlider");

    $images = DAOFactory::getDatImmaginiDAO()->queryByIdGalleria($gallery->id);
    foreach($images as $image)
    {
        set_time_limit(0);
        $file = DAOFactory::getFilesDAO()->load($image->filesID);
?>
         <li><img src="<?php echo $file->filesName; ?>" /></li>
<?php
    }
?>
</ul>

<h3>Videos</h3>
<ul id="videoSlider" class="bxslider">
<li>

    <iframe src="http://www.youtube.com/embed/vCUHvT7IG4Q" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/KDnxsBwsA4A" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/DD0BmgEEjW0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/8opta3y6nPE" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  
</ul>

<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Home - White Mosquito";
$pageInternaltitle = "Index";  //Apply the template
include("masterpage.php");
?>

