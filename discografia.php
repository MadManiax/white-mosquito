
<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Discografia"/>
<meta name="description" content="Esplora la discografia dei White MosQuito"/>
<meta name="keywords" content="white mosquito, discography, discografia"/>
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
<link rel="stylesheet" href="includes/css/discografia.css"/>
<link rel="stylesheet" href="includes/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
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
<script src="includes/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript" type="text/javascript" src="swfobject.js" ></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
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
<div>
    <div class="itemContainer left">
        <?php
//Il potere e la sua signora
        $discoImgSrc = "images/coverAlbum/IlPotereELaSuaSignora.jpg";
        $discoTitle = "Il potere e la sua signora (Riserva Sonora Records)";
        $discoYear = "2012";
        $discoDurata = "38:42";
        $tracks = array(
            array("Candido", "01:34")
            , array("Solite parole", "05:04")
            , array("Stato confusionale", "04:15")
            , array("Manifesto", "04:38")
            , array("Demone", "03:57")
            , array("Forme", "03:11")
            , array("Anche qst è rocchenroll", "00:33")
            , array("In faccia", "03:56")
            , array("Non smetto", "03:37")
            , array("Dimmi", "04:11")
            , array("Nuvola", "03:46")
			, array("Quello che non vedi", "03:57")
			, array("Fino a farmi male", "03:49")
        );
        include("model/Rendering/DiscoItem.php");

//In faccia
        $discoImgSrc = "images/coverAlbum/InFaccia.jpg";
        $discoTitle = "In Faccia (singolo)";
        $discoYear = "2011";
        $discoDurata = "05:45";
        $tracks = array(
            array("In Faccia", "03:59")
            , array("Circostanze", "04:48")
            , array("In Faccia videoclip", "05:03")
        );
        include("model/Rendering/DiscoItem.php");

//Personalita nascoste
        $discoImgSrc = "images/coverAlbum/personalitaNascoste.jpg";
        $discoTitle = "Personalit&agrave; nascoste";
        $discoYear = "2008";
        $discoDurata = "45:14";
        $tracks = array(
            array("Come se", "03:05")
            , array("Ultimo incontro", "04:48")
            , array("Manifesto", "03:03")
            , array("Sono colpevole", "03:30")
            , array("Quello che non vedi", "04:10")
            , array("White MosQuito", "04:22")
            , array("Non smetto di sognare mai", "03:35")
            , array("Il mio impossibile", "02:37")
            , array("Real", "03:28")
            , array("Tu senza me", "03:21")
            , array("Fino a Farmi male", "04:29")
            , array("Sola e vuota", "04:41")
        );
        include("model/Rendering/DiscoItem.php");

//20grammi
        $discoImgSrc = "images/coverAlbum/20grammi.jpg";
        $discoTitle = "20 grammi";
        $discoYear = "2006";
        $discoDurata = "20:29";
        $tracks = array(
            array("Come se", "03:05")
            , array("Ultimo incontro", "04:48")
            , array("Manifesto", "03:03")
            , array("Fino a Farmi male", "04:29")
            , array("Sola e vuota", "04:41")
        );
        include("model/Rendering/DiscoItem.php");
        ?>
    </div>
    <div class="clear"></div>
</div>
<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Discografia - White Mosquito";
$pageInternaltitle = "Discografia";
//Apply the template
include("masterpage.php");
?>
