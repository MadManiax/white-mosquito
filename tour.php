<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<meta name="title" content="White MosQuito - Official Website - Eventi"/>
<?php
require_once("model/include_dao.php");
require_once("config.inc.php");
if(!isset($_GET['eventID']))
{
?>
<meta name="description" content="La band dal vivo, controlla le prossime date"/>

<?php
}
else
{
    $idEventoT = $_GET['eventID'];
    $eventT = DAOFactory::getDatEventsDAO()->load($idEventoT);
    $imageT = DAOFactory::getDatImmaginiDAO()->load($eventT->idDATImmagineLocandina);
    $fileT = DAOFactory::getFilesDAO()->load($imageT->filesID);
?>
<meta name="description" content="La band dal vivo, controlla le prossime date - <?php echo $eventT->title;?>"/>
<meta property="og:title" content="<?php echo $eventT->title;?>"/>
<meta property="og:image" content="<?php echo $location; ?><?php echo $fileT->thumbnails; ?>" />
<meta property="og:url" content="<?php echo $location; ?>tour.php?eventID=<?php echo $idEventoT; ?>"/>
<meta property="og:description" content="<?php echo htmlentities($eventT->descrizione);?>"/>
<?php
}
?>
<meta name="keywords" content="white mosquito, tour, events, eventi, concerti, shows"/>
<?php
  //Assign all Page Specific variables
  $pageMetatags = ob_get_contents();
  ob_end_clean();
 ?>	

<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<link rel="stylesheet" type="text/css" href="includes/css/tour.css" />

<?php
  //Assign all Page Specific variables
  $pageCss = ob_get_contents();
  ob_end_clean();
 ?>

<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>



<?php
  //Assign all Page Specific variables
  $pageScripts = ob_get_contents();
  ob_end_clean();
 ?>
 
 <?php
  //Buffer larger content areas like the main page content
  ob_start();
  
?>
<!-- TODO scrivere iun form /link per richiedere una data ai whitemosquito    -->
<?php
include_once("model/Rendering/EventsRender.php");
?>
<!-- some content here     -->

<?php
  //Assign all Page Specific variables
  $pagecontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Eventi - White Mosquito";
  $pageInternaltitle = "Eventi";
  //Apply the template
  include("masterpage.php");
?>
