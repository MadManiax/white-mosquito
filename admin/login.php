<?php
  //Buffer larger content areas like the main page content
  ob_start();
  
    require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."config.inc.php");
    require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");
?>

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
<?php
if(isset($_GET['Mode']))
{
	if($_GET['Mode'] == "login")
	{
?>
<form action="admin/login.php?login=ok" method='POST'>

<b>Username</b><br>
<input type='text' name='user'><br>
<b>Password</b><br>
<input type='password' name='pass'><br>

<input type='submit' value='Effettua il login'>


</form>
<?php
	}
	else if($_GET['Mode'] == "logout")
	{
		setcookie("admin");
		header("location: ".$location."index.php");
	}	
}
?>
<?php

// recupero di valori inviati dal form: user e pass

if(isset($_GET['login']))
{
$risp = "ok";
$login = $_GET['login'];

// questo serve per evitare di ricevere subito un messaggio dallo script

	if ( $login == $risp ) 
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
	// controllo che entrambi i valori siano stati compilati
		if ( $user && $pass ) 
		{
			$membersDao = DAOFactory::getMembersDAO();
			$member = $membersDao->queryByUsername($user);			
			$passReturned = $member[0]->password;
			
			if(!$member)
				echo("Username errato");
			else if(strcmp(md5($pass),$passReturned) != 0)
                        {                                
				echo("Password errata");
                        }
			else
			{
				setcookie("admin","1");                                
				header("location: index.php");
			}
		}
		else
			echo "Non sono stati compilati tutti i dati obbligatori";
	} 
}
?>

<a href="<?php echo $redirectPage; ?>">Indietro</a>
<?php
  //Assign all Page Specific variables
  $pagecontent = ob_get_contents();
  ob_end_clean();
  $pageInternaltitle = "Login";
  $pagetitle = "Login - White Mosquito";
 
  //Apply the template
  include(dirname(__DIR__).DIRECTORY_SEPARATOR."masterpage.php");
?>