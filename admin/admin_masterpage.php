<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW"> 
<!--<script type="text/javascript" src="includes/js/jquery-1.3.2.js"></script>-->
<!--<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>-->
<script src="includes/js/jquery.tablesorter.min.js"></script>
<script src="includes/js/jquery.tablesorter.pager.js"></script>
<!-- some header here     -->
<?php
  //Assign all Page Specific variables
  $pageheader = ob_get_contents();
  if(isset($pageheaderAdmin))
    $pageheader = $pageheader.$pageheaderAdmin;
  ob_end_clean();
  $displayShare = "false";
 ?>
 
<?php
  //Buffer larger content areas like the main page content
  ob_start();
  require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."config.inc.php");
?>

<?php    
                $isadmin = NULL;
		if(isset($_COOKIE['admin']))
		{
			$Admin = $_COOKIE['admin'];
			
			if($Admin == "1")
				$isadmin = 1;
                        else
                        	$isadmin = NULL;
                }
                if($isadmin == 1)
                {
                        echo $pagecontentAdmin; 
                        ?>

                        <a href="<?php echo $redirectPage;?>">Indietro</a>
                        <?php
                }
		
		else
		{
?>
				<a href="admin/login.php?Mode=login">Login</a>
<?php
		}
?>
<?php

  //Assign all Page Specific variables
  $pagecontent = ob_get_contents();
  ob_end_clean();
  //Apply the template
  include(dirname(__DIR__).DIRECTORY_SEPARATOR."masterpage.php");
?>