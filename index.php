
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
<!-- <script type='text/javascript' src='includes/page_js/home.js'></script> -->
<script type="text/javascript">
  $(document).ready(function(){
  $('.bxslider').bxSlider();
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
<!--<div>
	<div style="font-size: 50px;" class="baseFont" id="cap1">
    !--Il rock and roll morirà entro giugno--
</div>
<div style="font-size: 30px;" class="baseFont" id="cap2">
    !--Variety 1965--
</div>-->
	
<ul class="bxslider">
  <?php
    $gallery = DAOFactory::getDatGallerieDAO()->load(21);

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
<script type="text/javascript">
  

</script>

<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Home - White Mosquito";
$pageInternaltitle = "Index";  //Apply the template
include("masterpage.php");
?>

