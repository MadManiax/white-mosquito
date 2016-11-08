<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - News"/>
<meta name="description" content="Scopri le ultime novità sulla band"/>
<meta name="keywords" content="white mosquito, news, novità, novita"/>
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
<script src="includes/js/jquery.tablesorter.min.js"></script>
<script src="includes/js/jquery.tablesorter.pager.js"></script>
<!-- some header here     -->
<?php
  //Assign all Page Specific variables
  $pageScripts = ob_get_contents();
  ob_end_clean();
 ?>

<?php
require_once("model/include_dao.php");
ob_start();
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div>
	<div style="margin-left: 25%;">
		<div class="fb-page" data-href="https://www.facebook.com/WhiteMosQuitoRock/" data-width="1000" data-height="1000" data-tabs="timeline"
		  data-hide-cover="false"><blockquote cite="https://www.facebook.com/WhiteMosQuitoRock/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WhiteMosQuitoRock/">White MosQuito</a></blockquote></div>
	</div>
	
</div>
<div class="clear"> </div>
<?php
//Assign all Page Specific variables
$pagecontent = ob_get_contents();
ob_end_clean();
$pagetitle = "News - White Mosquito";
$pageInternaltitle = "News";
//Apply the template
include("masterpage.php");
?>
