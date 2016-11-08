<?php
  //Buffer larger content areas like the main page content
  ob_start();
  //define('ROOT_PATH', dirname(__DIR__));
?>

<!-- some header here     -->
<?php
  //Assign all Page Specific variables
  $pageheaderAdmin = ob_get_contents();
  ob_end_clean();
 ?>
 
 <?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

				<a href="admin/login.php?Mode=logout">Logout</a>
				<ul>
					<li><a href="admin/uploadForm.php?Mode=add">Aggiungi foto a galleria</a></li>
					<li><a href="admin/uploadForm.php?Mode=new">Nuova galleria di foto</a></li>
                                        <li><a href="admin/galleryManager.php">Gestisci gallerie</a></li>
					<li><a href="admin/eventManager.php">Gestisci eventi</a></li>
					<li><a href="admin/EventDetailManager.php?Mode=new">Aggiungi evento</a></li>
                                        <li><a href="admin/newsManager.php">Gestione News</a></li>
                                        <li><a href="admin/pressDetailManager.php">Aggiungi Press</a></li>
                                        <li><a href="admin/pressManager.php">Gestione Press</a></li>
				</ul>

<?php
  //Assign all Page Specific variables
  $pagecontentAdmin = ob_get_contents();
  ob_end_clean();
  $pageInternaltitle = "Admin";
  $pagetitle = "Admin - White Mosquito";
 
  //Apply the template
  include("admin_masterpage.php");
?>