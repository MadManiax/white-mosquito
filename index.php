
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


<link rel="stylesheet" type="text/css" href="includes/css/home.css"/>
<link rel="stylesheet" type="text/css" href="includes/css/tour.css" />
<link rel="stylesheet" type="text/css" href="includes/css/discografia.css"/>
<link rel="stylesheet" type="text/css" href="includes/css/video.css"/>
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

<script src="includes/page_js/home.js"></script>

<script src="includes/sliderjs/js/jquery.slides.min.js"></script>

<script type="text/javascript">
  $(function() {
    $('#vslides').slidesjs({
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
      $('#event-slider').slidesjs({
        width: 900,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 6000,
          swap: true
        },
        pagination:{
            active: false
        }
      });
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
      
      $('a.slidesjs-stop.slidesjs-navigation').css('display', 'none');
    

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


<div class="stack">
<h1 class="center">Videos</h1>
<div class="videoContainer">
<?php 
include("model/Rendering/VideoSlider.php")
?>
</div>
</div>
<div class="clear"></div>


<div class="stack">
<h1 class="center">Tour</h1>

<?php
include_once("model/Rendering/EventSlider.php");
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

