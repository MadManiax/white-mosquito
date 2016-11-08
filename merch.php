<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
  
?>
<meta name="title" content="White MosQuito - Official Website - Merchandise"/>
<meta name="description" content="Area merchandise del sito, acquitsta le spillette, gli album"/>
<meta name="keywords" content="white mosquito, pins, spillette, albums, dischi, il potere e la sua signora, personalita nascoste"/>
<?php
  //Assign all Page Specific variables
  $pageMetatags = ob_get_contents();
  ob_end_clean();
 ?>	


<!-- CSS CONTENT -->
<?php  
  //Buffer larger content areas like the main page content
  ob_start();
  require_once('popup-contactform.php');
?>

<?php
  //Assign all Page Specific variables
  $pageCss = ob_get_contents();
  ob_end_clean();
 ?>
<link rel="stylesheet" href="includes/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link rel="STYLESHEET" type="text/css" href="includes/css/popup-contact.css">
<!-- JAVASCRIPT CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<script src="includes/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>


<script type="text/javascript">
    $(document).ready(function(){
        fg_hideform('fg_formContainer','fg_backgroundpopup');
        $("area[rel^='prettyPhoto']").prettyPhoto();

        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:5000, autoplay_slideshow: false});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:5000, hideflash: true, autoplay_slideshow: false});

        $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
            custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
            changepicturecallback: function(){ initialize(); }
        });

        $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
            custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
            changepicturecallback: function(){ _bsap.exec(); }
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
<div style="float:right">
    <?php
    //var_dump($_SERVER['HTTP_USER_AGENT']);
    /* if(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
      { */
    ?>
    <!--    <a id="merchOrder" href="mailto:info@whitemosquito.it">Ordina</a>-->
    <?php //}else{  ?>
    <a id="merchOrder" href="javascript:fg_popup_form('fg_formContainer','fg_form_InnerContainer','fg_backgroundpopup');">Ordina</a>

    <?php //} ?>
</div>
<?php
$flipMode = "false";
$merchItemImgSrc = "images/merchItem/pin2.png";
$merchItemAlt = "Pin \"Il Potere e la sua signora\"";
$merchItemTitle = "Pin \"Il Potere e la sua signora\"";
$merchItemDescrizione = "Compra la spilletta del nuovo album (d 4cm)";
$merchItemCosto = "1&euro;";
$merchItemMode = "Ordina via mail";
include("model/Rendering/MerchItem.php");


$flipMode = "true";
$merchItemImgSrc = "images/coverAlbum/IlPotereELaSuaSignora.jpg";
$merchItemAlt = "Il Potere e la sua signora";
$merchItemTitle = "Il Potere e la sua signora";
$merchItemDescrizione = "Compra l'album &quot;$merchItemTitle&quot; (<a href='discografia.php'><b>info</b></a>)";
$merchItemCosto = null;
$merchItemMode = null;
$urlToBuy = "https://itunes.apple.com/it/album/il-potere-e-la-sua-signora/id893232475";
include("model/Rendering/MerchItem.php");

$flipMode = "false";
$merchItemImgSrc = "images/merchItem/pins.jpg";
$merchItemAlt = "Pin";
$merchItemTitle = "Pin";
$merchItemDescrizione = "Compra la spilletta dei White Mosquito (d 5.8cm)";
$merchItemCosto = "2&euro;";
$merchItemMode = "Ordina via mail";
include("model/Rendering/MerchItem.php");

$flipMode = "true";
$merchItemImgSrc = "images/coverAlbum/InFaccia.jpg";
$merchItemAlt = "In faccia (singolo)";
$merchItemTitle = "In faccia (singolo)";
$merchItemDescrizione = "Compra il singolo di in faccia (<a href='discografia.php'><b>info</b></a>)";
$merchItemCosto = "3&euro;";
$merchItemMode = "Ordina via mail";
include("model/Rendering/MerchItem.php");

require_once('contactform-code.php');

$flipMode = "false";
$merchItemImgSrc = "images/coverAlbum/personalitaNascoste.jpg";
$merchItemAlt = "Personalit&agrave; Nascoste";
$merchItemTitle = "Personalit&agrave; Nascoste";
$merchItemDescrizione = "Compra l'album Personalit&agrave; Nascoste (<a href='discografia.php'><b>info</b></a>)";
$merchItemCosto = "10&euro;";
$merchItemMode = "Ordina via mail oppure acquista copia digitale on line";
$urlToBuy = "http://www.believedigital.com/artists/74096-910,white-mosquito.html";
include("model/Rendering/MerchItem.php");


//if(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
require_once('contactform-code.php');
?>
<!-- some content here     -->

<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Merch - White Mosquito";
$pageInternaltitle = "Merchandise";
//Apply the template
include("masterpage.php");
?>
