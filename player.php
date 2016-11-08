<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Links"/>
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
<style type="text/css">
    .player_container
    {

        margin:50px auto; 
        width:720px;
    }
</style>
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

<script type="text/javascript">
    $(document).ready(function()
    {
        $("div#header").hide();
        $("div#content").css('height','400px');
        $("div#content").css('margin','170px auto');
        $("div#content").css('width','800px');
    });
</script>        
<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
<!-- some header here     -->
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
    <div id="player" class="player_container">
        <div id="player_container">Loading the player...</div> 
        <script type="text/javascript"> 
    jwplayer("player_container").setup(
    { 
        flashplayer: "jwplayer/player.swf"
        , playlist: [ 
            { file: "mp3/303 Stato confusionale.mp3", image: "images/coverAlbum/IlPotereELaSuaSignora.jpg", title: "Stato confusionale" , description: "Il potere e la sua signora (2012)" }
            , { file: "mp3/304 Manifesto.mp3", image: "images/coverAlbum/IlPotereELaSuaSignora.jpg", title: "Manifesto" , description: "Il potere e la sua signora (2012)" }
            , { file: "mp3/311 Nuvola.mp3", image: "images/coverAlbum/IlPotereELaSuaSignora.jpg", title: "Nuvola" , description: "Il potere e la sua signora (2012)" }
            , { file: "mp3/201 In Faccia.mp3", image: "images/coverAlbum/InFaccia.jpg", title: "In faccia" , description: "In faccia [singolo] (2011)" }
            , { file: "mp3/202 Circo Stanze.mp3", image: "images/coverAlbum/InFaccia.jpg", title: "Circo Stanze" , description: "In faccia [singolo] (2011)" }
            , { file: "mp3/101 Come se.mp3", image: "images/coverAlbum/personalitaNascoste.jpg", title: "Come Se", description: "Personalità Nascoste (2008)" }
            , { file: "mp3/104 Sono colpevole.mp3", image: "images/coverAlbum/personalitaNascoste.jpg", title: "Sono il colpevole" , description: "Personalità Nascoste (2008)" }
            , { file: "mp3/105 Quello che non vedi.mp3", image: "images/coverAlbum/personalitaNascoste.jpg", title: "Quello che non vedi" , description: "Personalità Nascoste (2008)" }
        ]
        ,"playlist.position": "right","playlist.size": 340, height: 300, width: 700
        ,skin: "jwplayer/plexi.zip"
    });
</script>
    </div>
</div>
<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Ascolta - White Mosquito";
$pageInternaltitle = "Ascolta";  //Apply the template
include("masterpage.php");
?>