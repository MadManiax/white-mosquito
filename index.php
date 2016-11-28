
<?php
require_once("config.inc.php");
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
<?php if(isset($_GET['eventID']))
{
    $idEventoT = $_GET['eventID'];
    $eventT = DAOFactory::getDatEventsDAO()->load($idEventoT);
    $imageT = DAOFactory::getDatImmaginiDAO()->load($eventT->idDATImmagineLocandina);
    $fileT = DAOFactory::getFilesDAO()->load($imageT->filesID);
}

?>
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




<?php

if(BrowserTools::isMobile())
{
?>
<link rel="stylesheet" type="text/css" href="includes/glide/css/glide.core.css">
<link rel="stylesheet" type="text/css" href="includes/glide/css/glide.theme.css">
<?php
}
else
{
?>
<!-- bxSlider CSS file -->
<link href="includes/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
<?php
}
?>

<link rel="stylesheet" type="text/css" href="includes/css/home.css"/>
<link rel="stylesheet" type="text/css" href="includes/css/tour.css" />
<link rel="stylesheet" type="text/css" href="includes/css/discografia.css"/>
<link rel="stylesheet" type="text/css" href="includes/sliderjs/css/slider.css"/>
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

<?php

if(BrowserTools::isMobile())
{
?>
<script src="includes/glide/glide.js"></script>
<?php
}
else
{
?>
<!-- bxSlider Javascript file -->
<script src="includes/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="includes/jquery.bxslider/plugins/jquery.fitvids.js"></script>
<?php
}
?>
<script src="includes/page_js/home.js"></script>
<!-- <script src="includes/js/iframe.resize.js"></script> -->

<script type="text/javascript">
  $(document).ready(function(){
  


 <?php

if(BrowserTools::isMobile())
{
?>
  $("#Glide").glide({
        type: "slider",
        autoheight:true
    });

  <?php
}
else
{
  ?>

  /*$('#imageSlider').bxSlider({
    auto:true,
    autoControls: true,
    adaptiveHeight: true
  });*/
  $('#videoSlider').bxSlider({
    video: true,
    /*useCSS: false,*/
    auto:true,
    autoControls: true,
    adaptiveHeight: true
  });

<?php
}
?>

});

</script>
<script src="includes/sliderjs/js/jquery.slides.min.js"></script>


<?php
  //Assign all Page Specific variables
  $pageScripts = ob_get_contents();
  ob_end_clean();
 ?>


<?php
//Buffer larger content areas like the main page content
ob_start();
?>


<?php

if(BrowserTools::isMobile())
{
?>
<div class="stack">
<h1 class="center">Videos</h1>
<div id="Glide" class="glide">

    <div class="glide__arrows">
        <button class="glide__arrow prev" data-glide-dir="<">prev</button>
        <button class="glide__arrow next" data-glide-dir=">">next</button>
    </div>

    <div class="glide__wrapper">
        <ul class="glide__track">
            <li class="glide__slide"><iframe src="http://www.youtube.com/embed/vCUHvT7IG4Q" class="youtube-player" type="text/html"  id="v_1" frameborder="0" width="100%" height="500px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
            <li class="glide__slide"><iframe src="http://www.youtube.com/embed/KDnxsBwsA4A" class="youtube-player" type="text/html" id="v_2" frameborder="0" width="100%" height="500px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
            <li class="glide__slide"><iframe src="http://www.youtube.com/embed/DD0BmgEEjW0" class="youtube-player" type="text/html" id="v_3" frameborder="0" width="100%" height="500px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
        </ul>
    </div>

    <div class="glide__bullets"></div>

</div>
</div>

<div class="clear"></div>
<?php 
}
else
{

 ?>
<div class="stack">
<h1 class="center">Videos</h1>
<ul id="videoSlider" class="bxslider">
<li>

    <iframe src="http://www.youtube.com/embed/vCUHvT7IG4Q" class="youtube-player" type="text/html"  id="v_1" frameborder="0" width="100%" height="60%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/KDnxsBwsA4A" class="youtube-player" type="text/html" id="v_2" frameborder="0" width="100%" height="60%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/DD0BmgEEjW0" class="youtube-player" type="text/html" id="v_3" frameborder="0" width="100%" height="60%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  <li>
    <iframe src="http://www.youtube.com/embed/8opta3y6nPE" class="youtube-player" type="text/html" id="v_4" frameborder="0" width="100%" height="60%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:block" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
  
</ul>
</div>
<div class="clear"></div>

<?php 
}
?>


<div class="stack">
<h1 class="center">Tour</h1>

<?php
include_once("model/Rendering/EventsRender.php");
?>
</div>
<div class="clear"></div>
<div class="stack">
<h1 class="center">Images</h1>	
<?php 
include("model/Rendering/ImageSlider.php")
?>
</div>
<div class="clear"></div>
<div class="stack">
<h1 class="center">Discografia</h1>
<?php
include("model/Rendering/DiscografiaRender.php");
?>
</div>
<div class="clear"></div>
<div class="stack">
<h1 class="center">Press</h1>

<?php
include("model/Rendering/PressRender.php");
?>
</div>
<div class="clear"></div>
<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "White Mosquito - Official Web Site";
$pageInternaltitle = "Index";  //Apply the template
include("masterpage.php");
?>

