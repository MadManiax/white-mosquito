<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Contatti"/>
<meta name="description" content="Contatta la band, tramite contatto diretto o tramite agenzia"/>
<meta name="keywords" content="white mosquito, contacts, agency, agenzia, info, booking"/>
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
<link rel="stylesheet" type="text/css" href="includes/css/contatti.css" />
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
<script type='text/javascript' src='includes/js/jquery.jqDock.min.js'></script>
<script type='text/javascript'>
    $(document).ready(function(){
        
        // set up the options to be used for jqDock...
        var dockOptions =
            { align: 'top' // horizontal menu, with expansion DOWN from a fixed TOP edge
            ,size:40
        };
        // ...and apply...
        $('#menu').jqDock(dockOptions);
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
<div class="contacts">

    <img src="images/logo2.jpg" alt="White Fottutissimi Mosquito" title="White Fottutissimi Mosquito"/>

    <div id="page">
        <div id='menu'>
            <a href="http://www.youtube.com/WhiteMosQuitoBand" TARGET="_blank" title='YouTube'>
                <img src="images/social/yt.png" title="follow white mosquito" alt=''/>
            </a>
            <a href='http://www.facebook.com/pages/White-MosQuito/42106554501' title='Facebook' TARGET="_blank">
                <img src="images/social/fb.png" title="follow white mosquito" alt=''/>
            </a>

            <a href="https://twitter.com/whitemosquito" TARGET="_blank" title='Twitter'>
                <img src="images/social/tw.png" title="follow white mosquito" alt=''/>
            </a>

            <a href="https://plus.google.com/103687039580096180150/posts" TARGET="_blank" title='Google+'>
                <img src="images/social/g+.png" title="follow white mosquito" alt=''/>
            </a>
        </div>
    </div>

</div>


<div class="cornice">
    <div class="left">
               
        <h3><a href="http://www.whitemosquito.it" target="_blank">Booking</a></h3>
        <span><a href="mailto:booking@whitemosquito.it">booking@whitemosquito.it</a></span>
		<br/>		<br/>
		
		

        <br/><br/>

        <h3><a href="http://www.whitemosquito.it" target="_blank">Press</a></h3>

        <span> <a href="mailto:info@ufficiostampapromozione.com">AG CommunicationS - Antonella Gucci</a></span>
        <br/><br/>
        
        
        <h3>Web</h3>

        <span> <a href="mailto:maniax.matteo@gmail.com">contatta il webmaster</a></span>
        <br/><br/>
    </div>
    <div class="right">
        <h3>Info</h3>

        <span><a href="mailto:info@whitemosquito.it">info@whitemosquito.it</a></span>
        <br/><br/>
        <h3>Press Kit&nbsp; &nbsp;
            <a href="presskit.html" target="_blank">
                <img src="images/social/web_v3.png"/>
            </a>
            &nbsp; &nbsp;
            <a href="resources/WhiteMosQuito_PressKit.pdf" target="_blank">
                <img src="images/social/pdf.png"/>
            </a>
        </h3>

        <br/>
        <h3>Scheda tecnica e Stage plan	&nbsp; &nbsp;
            <a href="resources/WhiteMosQuito_schedaTecnica.pdf" target="_blank">
                <img src="images/social/pdf.png"/>
            </a>
        </h3>
    </div>
    <div class="clear"></div>
</div>






<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Contatti - White Mosquito";
$pageInternaltitle = "Contatti";
//Apply the template
include("masterpage.php");
?>
