<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Video"/>
<meta name="description" content="Guarda i video dei White MosQuito"/>
<meta name="keywords" content="white mosquito, video, In Faccia, promo, Sono Colpevole, Alcoa, Manifesto, Solite Parole, Deep Purple"/>
<?php
  //Assign all Page Specific variables
  $pageMetatags = ob_get_contents();
  ob_end_clean();
 ?>	

<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<link rel="stylesheet" href="includes/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link rel="stylesheet" href="includes/css/video.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

<?php
  //Assign all Page Specific variables
  $pageCss = ob_get_contents();
  ob_end_clean();
 ?>

<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

<script src="includes/js/jyoutube.js"></script>
<script src="includes/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

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

<div id="divVideo" class="main">
<!--  youtube video embedding left alignment     -->
	
	<div class="fleft" >		
		<ul class="gallery clearfix" id="thumbs">
                    			
		</ul>
            <div class="clear" ></div>
	</div>	
</div>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
        // Get youtube video thumbnail on user click

        var urlArray = new Array(
			["https://www.youtube.com/watch?v=vCUHvT7IG4Q","SUPEREGO","(video di presentazione per il crowdfunding di musicraiser)"]			
			,["https://www.youtube.com/watch?v=8opta3y6nPE","NUVOLA","(official video)"]
			,["https://www.youtube.com/watch?v=DD0BmgEEjW0","DEMONE","(promo del video ufficiale In faccia)"]
			,["http://www.youtube.com/watch?v=KDnxsBwsA4A","IN FACCIA","(video ufficiale tratto la singolo In faccia 11/11/11)"]
                ,["http://www.youtube.com/watch?v=0a345DXgh4Y","IN FACCIA (promo)","(promo del video ufficiale In faccia)"]
                ,["http://www.youtube.com/watch?v=b70zMT65OoE","WHITE MOSQUITO","i White Mosquito sostengono gli operai dell'ALCOA"]

                ,["http://www.youtube.com/watch?v=jbVE0QwyRjA","SONO COLPEVOLE","(Deep Purple opening act 05/05/07)"]					
                ,["http://www.youtube.com/watch?v=IarSz72Nwfw","SOLITE PAROLE","(Mastercastle opening act 03/12/10)"]
                ,["http://www.youtube.com/watch?v=xRj46-MiWvw","MANIFESTO","(Mastercastle opening act 03/12/10)"]
                ,["https://www.youtube.com/watch?v=LC5Wdt959Dw","IL MIO IMPOSSIBILE","(live @ L'angelo azzurro club 18/05/12)"]
                ,["http://www.youtube.com/watch?v=QBCMY130b5g","INTERVISTA YouSulcis","(calasetta 01/08/12)"]
                ,["http://www.youtube.com/watch?v=tXJJZoscy3s","INTERVISTA Genova Rock","(Genova - Utri beach 01/07/12)"]
                ,["http://www.youtube.com/watch?v=E_hRHWfVAYY","Nuvola","(Genova - Angelo Azzurro 18/05/12)"]
                                                        ,["http://www.youtube.com/watch?v=9n-Tuwr_saU","Live@Bulldog","(Genova Rock - 14/12/2012 - parte 1)"]
                                                        ,["http://www.youtube.com/watch?v=bEoGc19vPPo","Live@Bulldog","(Genova Rock - 14/12/2012 - parte 2)"]
                );
        $.each(urlArray, function(index,url){
                if(url !== ''){
                        // Get youtube video's thumbnail url
                        // using jYoutube jQuery plugin
                        urlThumb = $.jYoutube(url[0]);

                        // Now append this image to <ul id="thumbs">
                        $('#thumbs').append($('<li><div><h3 class="videoTitle">'+url[1]+'</h3><p class="caption">'+url[2]+'</p><div class="video"><a class="record" href="'+url[0]+'?rel=0" rel="prettyPhoto" title="'+url[1]+'"><span></span><img src="'+urlThumb+'" /></a></div></div></li>'));
                }                
        });

        $("area[rel^='prettyPhoto']").prettyPhoto();

        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:5000, autoplay_slideshow: false});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: false});

        $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
                custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
                changepicturecallback: function(){ initialize(); }
        });

        $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
                custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
                changepicturecallback: function(){ _bsap.exec(); }
        });
        $("a.record").hover(
            function()
            {
                $(this).stop().animate({"opacity": "0.6"}, "slow");
            }
            ,function()
            {
                $(this).stop().animate({"opacity": "1"}, "slow");
            }
        );
});
</script>
<?php
  //Assign all Page Specific variables
  $pagecontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Video - White Mosquito";
  $pageInternaltitle = "Video";
  //Apply the template
  include("masterpage.php");
?>