
<!-- META TAGS CONTENT -->
<?php
  //Buffer larger content areas like the main page content
  ob_start();
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

<!-- BODY CONTENT -->
 <?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

<?php
  //Assign all Page Specific variables
  $pagecontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Video - White Mosquito";
  $pageInternaltitle = "Video";
  //Apply the template
  include("masterpage.php");
?>