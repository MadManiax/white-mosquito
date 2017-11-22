
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
<link rel="stylesheet" type="text/css" href="includes/css/player.css"/>

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
<script src="includes/page_js/player.js"></script>
<script src="includes/sliderjs/js/jquery.slides.min.js"></script>

<script type="text/javascript">
  $(function() {
    $('#vslides').slidesjs({
        width: 940,
        height: 528,
        /*play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        },*/
        pagination:{
          active: true,
          // [boolean] Create pagination items.
          // You cannot use your own pagination. Sorry.
          effect: "fade"
          // [string] Can be either "slide" or "fade".
        },
        play: {
          active: true,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
          effect: "fade",
            // [string] Can be either "slide" or "fade".
          interval: 5000,
            // [number] Time spent on each slide in milliseconds.
          auto: true,
            // [boolean] Start playing the slideshow on load.
          swap: true,
            // [boolean] show/hide stop and play buttons
          pauseOnHover: true,
            // [boolean] pause a playing slideshow on hover
          restartDelay: 2500
            // [number] restart delay on inactive slideshow
        }
      });
      $('#event-slider').slidesjs({
        width: 900,
        height: 528,
        play: {
          active: true,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
          effect: "fade",
            // [string] Can be either "slide" or "fade".
          interval: 5000,
            // [number] Time spent on each slide in milliseconds.
          auto: true,
            // [boolean] Start playing the slideshow on load.
          swap: true,
            // [boolean] show/hide stop and play buttons
          pauseOnHover: true,
            // [boolean] pause a playing slideshow on hover
          restartDelay: 2500
            // [number] restart delay on inactive slideshow
        },
        pagination:{
            active: true,
            // [boolean] Create pagination items.
            // You cannot use your own pagination. Sorry.
            effect: "fade"
            // [string] Can be either "slide" or "fade".
        }
      });
      $('#slides').slidesjs({
              width: 940,
              height: 528,
              play: {
                active: true,
                  // [boolean] Generate the play and stop buttons.
                  // You cannot use your own buttons. Sorry.
                effect: "fade",
                  // [string] Can be either "slide" or "fade".
                interval: 5000,
                  // [number] Time spent on each slide in milliseconds.
                auto: true,
                  // [boolean] Start playing the slideshow on load.
                swap: true,
                  // [boolean] show/hide stop and play buttons
                pauseOnHover: true,
                  // [boolean] pause a playing slideshow on hover
                restartDelay: 2500
                  // [number] restart delay on inactive slideshow
              },
              pagination:{
                  active: true,
                  // [boolean] Create pagination items.
                  // You cannot use your own pagination. Sorry.
                  effect: "fade"
                  // [string] Can be either "slide" or "fade".
              }
            });
      
        $('#pslides').slidesjs({
              width: 940,
              height: 528,
              play: {
                active: true,
                  // [boolean] Generate the play and stop buttons.
                  // You cannot use your own buttons. Sorry.
                effect: "fade",
                  // [string] Can be either "slide" or "fade".
                interval: 5000,
                  // [number] Time spent on each slide in milliseconds.
                auto: false,
                  // [boolean] Start playing the slideshow on load.
                swap: true,
                  // [boolean] show/hide stop and play buttons
                pauseOnHover: true,
                  // [boolean] pause a playing slideshow on hover
                restartDelay: 2500
                  // [number] restart delay on inactive slideshow
              },
              pagination:{
                  active: true,
                  // [boolean] Create pagination items.
                  // You cannot use your own pagination. Sorry.
                  effect: "fade"
                  // [string] Can be either "slide" or "fade".
              }
            });

      $('a.slidesjs-stop.slidesjs-navigation').css('display', 'none');
    
      var maxlength = 800;
      $("div.pressText").each(function(){
          var text = $(this).text();
          if(text.length > maxlength)
          {
              text = text.substring(0,maxlength);
              $(this).text(text+"...");
          }
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
<h1 class="center">Music</h1>

<?php include_once("model/Rendering/Player.php") ?>

</div>
<div class="stack">
<h1 class="center">Tour</h1>

<?php
include_once("model/Rendering/EventSlider.php");
?>
</div>
<div class="clear"></div>

<?php 
                if(BrowserTools::isMobile()){
                    ?>
<div class="stack">
<h1 class="center">News</h1>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/WhiteMosQuitoRock/" data-tabs="timeline" data-width="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/WhiteMosQuitoRock/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WhiteMosQuitoRock/">White MosQuito</a></blockquote></div>
</div>
</div>

<div class="clear"></div>
<?php
}
?>
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
                if(!BrowserTools::isMobile()){
                    ?>
<div class="inflow">
    <div class="positioner"><!-- may not be needed: see notes below-->
      <div class="fixed">
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/WhiteMosQuitoRock/" data-tabs="timeline" data-width="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/WhiteMosQuitoRock/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WhiteMosQuitoRock/">White MosQuito</a></blockquote></div>
</div>
      </div>
    </div>
  </div>
<?php
}
?>
<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "White Mosquito - Official Web Site";
$pageInternaltitle = "Index";  //Apply the template
include("masterpage.php");
?>

