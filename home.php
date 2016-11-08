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

<script type='text/javascript' src='includes/page_js/home.js'></script>



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
	<div >
	<!-- <div id="musicraiser"></div>-->
	<!--<iframe  width="1100px" height="3000px" src="https://www.musicraiser.com/projects/5991-superego-lalbum" frameborder="0" allowfullscreen></iframe>-->
	<iframe width="1150px" height="3000px" src="https://www.musicraiser.com/projects/5991-superego-lalbum" frameborder="0" allowfullscreen></iframe>
</div>


<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Home - White Mosquito";
$pageInternaltitle = "Home";  //Apply the template
include("masterpage.php");
?>

