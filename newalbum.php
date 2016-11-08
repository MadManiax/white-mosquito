<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Il Potere e la sua signora"/>
<meta name="description" content="L'ultimo album dei W1hite MosQuito - Il Potere e la sua Signora (2012)"/>
<meta name="keywords" content="white mosquito, new album, Il potere e la sua signora, dimmi, in faccia, Non smetto, Manifesto, Solite Parole, Nuvola, Candido, Demone, Stato Confusionale"/>
<!-- some header here     -->
<?php
  //Assign all Page Specific variables
  $pageheader = ob_get_contents();
  ob_end_clean();
 ?>
 
 <?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

<!-- some content here     -->

<?php
  //Assign all Page Specific variables
  $pagecontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "New Album - White Mosquito";
  $pageInternaltitle = "New Album";
  //Apply the template
  include("masterpage.php");
?>
