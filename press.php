<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Press"/>
<meta name="description" content="Dicono di noi - raccolta articoli, stampa e recensioni sui White MosQuito"/>
<meta name="keywords" content="white mosquito, press, review, stampa, recensioni"/>
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
 
 <?php
  //Buffer larger content areas like the main page content
  ob_start();
  
?>
<!-- TODO scrivere iun form /link per richiedere una data ai whitemosquito    -->
<?php
include("model/Rendering/PressRender.php");
?>
<!-- some content here     -->

<?php
  //Assign all Page Specific variables
  $pagecontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Dicono di noi - White Mosquito";
  $pageInternaltitle = "Dicono di noi";
  //Apply the template
  include("masterpage.php");
?>
