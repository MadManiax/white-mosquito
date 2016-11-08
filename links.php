<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Links"/>
<meta name="description" content="Gli amici dei white mosquito"/>
<meta name="keywords" content="white mosquito, contacts, links, mastercastle, deimos, greenfog studio, zerodieci studio, taxi driver record store"/>
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
    div.linksItem
    {
        width:300px;
        height:300px;
        margin-right:5px;
        float:left;
    }
    div.linksItem ul
    {
        list-style-type:none;
        list-style-image:url(images/listItem_small.png);       
        font-size:small;   
        font-weight:bold;  
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
<script src="http://www.websnapr.com/js/websnapr.js"></script>
<script type='text/javascript' src='includes/js/qtip/jquery.qtip-1.0.0-rc3.js'></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("div#content").css('height','500px');
        var apiKey = 'RJApCmAGkvE7';

        // Notice the use of the each method to gain access to each element individually
	$('ul.linkBubble li a').each(function()
	{
          //window.alert($(this).attr('href'));
		// Grab the URL from our link
		var url = encodeURIComponent( $(this).attr('href') ),
                
		// Create image thumbnail using Websnapr thumbnail service
		thumbnail = $('<img />').attr({
			src: 'http://images.websnapr.com/?url=' + url + '&key=' + apiKey + '&hash=' + encodeURIComponent(websnapr_hash),
			alt: 'Loading thumbnail...',
			width: 202,
                        height: 152
		});

		// Setup the tooltip with the content
		$(this).qtip(
		{
			content: thumbnail,
			position: {
				corner: {
					tooltip: 'bottomMiddle',
					target: 'topMiddle'
				}
			},
			style: {
				tip: true, // Give it a speech bubble tip with automatic corner detection
				name: 'dark'
			}
		});
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
<div class="linksItem">
    <h3>LABEL</h3>
    <br/>
    <ul  class="linkBubble">
        <li><a href="http://www.riservasonora.com/" target="_blank">Riserva Sonora Records</a></li> 
    </ul>
</div>

<div class="linksItem">
    <h3>BANDS</h3>
    <br/>
    <ul  class="linkBubble">
        <li><a href="http://www.distorsionementale.com/" target="_blank">Distorsione Mentale</a></li>
        <li><a href="http://www.myspace.com/mastercastle" target="_blank">Mastercastle</a></li>
        <li><a href="http://www.myspace.com/edgarcafe" target="_blank">Edgar Caf&eacute;</a></li>
        <li><a href="http://www.deimosofficial.it/" target="_blank">DeimOs</a></li>
        <li><a href="http://www.belzer.org/" target="_blank">Belzer</a></li>
        <li><a href="http://www.matteoconta.it/" target="_blank">Matteo Conta</a></li>
    </ul>
</div>

<div class="linksItem">
    <h3>STUDIO</h3>
    <br/>
    <ul class="linkBubble">
        <li><a href="http://www.greenfogstudio.com/" target="_blank">GreenFog Studio</a></li>
        <li><a href="http://www.myspace.com/emistudioe" target="_blank">Emi studio E</a></li>
        <li><a href="http://www.zerodieci.com/" target="_blank">Zerodieci Studio</a></li>
    </ul>
</div>

<div class="linksItem">
    <h3>NEGOZI &amp; ART DESIGNER</h3>
    <br/>
    <ul class="linkBubble">
        <li><a href="http://www.guitarland.it/" target="_blank">Guitarland</a></li>
        <li><a href="http://www.taxidriverstore.com/store/" target="_blank">Taxi Driver record store</a></li>
        <li><a href="http://www.framezeroart.com/" target="_blank">Framezero Art (Simone Lezzi)</a></li>
        <li><a href="http://www.alessandrocorio.com/" target="_blank">Alessandro Corio Fotografia</a></li>

    </ul>
</div>

<div class="linksItem">
    <h3>RADIO</h3>
    <br/>
    <ul class="linkBubble">
        <li><a href="http://www.radiobooonzo.it/">Radio Boonzo</a></li>
        <li><a href="http://www.radioflyweb.it/wrf/">Radio Fly Web</a></li>
        <li><a href="http://www.radiorvietoweb.it/">Radio Orvieto Web</a></li>
    </ul>
</div>



<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Links - White Mosquito";
$pageInternaltitle = "Links";  //Apply the template
include("masterpage.php");
?>
