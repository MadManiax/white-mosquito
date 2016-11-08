<?php
  //Buffer larger content areas like the main page content
  ob_start();
  
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

<?php
	require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."config.inc.php");
        require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");
	$new_status = 'unchecked';
	$add_status = 'unchecked';
	
	$Mode = NULL;
	$idGallery = NULL;
	if(isset($_GET['idGallery']))
	{
		$idGallery = $_GET['idGallery'];
	}
	
	
	if(isset($_GET['Mode']))
	{
		$Mode = $_GET['Mode'];
	}
	
	if($Mode == 'new'){
		$new_status = 'checked';
	}
	else if($Mode == 'add'){
		$add_status = 'checked';
	}
		
	if (isset($_POST['form1'])) {
		
		$selected_radio = $_POST['saveMode'];
			
		
		if ($selected_radio == 'new') {
			$new_status = 'checked';
		}
		else if ($selected_radio == 'add') {
			$add_status = 'checked';
		}
	}
?>
	<form name="form1" method="post" action="admin/fileGetter.php" enctype="multipart/form-data">
<!--<div>-->
	<table>
	<?php
		if($Mode == "new")
		{
			
	?>
	<tr>
		<td>Nuova Galleria</td>
		<td><input type="text" name="galleryName" /></td>
		<td><Input type = 'Radio' Name ='saveMode' value= 'new'
			<?php print $new_status; ?>
			>
		</td>	
	</tr>
	<?php
		}
	?>
	<?php
		if($Mode == "add")
		{
			$_POST['saveMode'] = "add";
	?>
	<tr>
		<td>Aggiungi a Galleria: </td>		
		<td><select name="GalleryList" >
		<?php
			$DatGallerieDAO = DAOFactory::getDatGallerieDAO();
			$GalleriaLista = $DatGallerieDAO->queryAll();
			foreach($GalleriaLista as $DatGallerie)
			{
				$selected = NULL;
				if(isset($idGallery))
					if($idGallery == $DatGallerie->id)
						$selected = "selected";
				echo "<option value='".$DatGallerie->id."' ".$selected.">".$DatGallerie->title."</option>";
			}
			
		?>
		</select></td>		
		 <td style="float:left;"><Input type = 'Radio' Name ='saveMode' value= 'add'
			<?php print $add_status; ?>
		></td>		
	</tr>
	<?php
		}
	?>
        <tr>
            <td colspan="2">Scegli i file</td>
            <td><input type="file" name="fileUpload[]" multiple/>
            </td>
        </tr> 
<!--	<tr>
	<th colspan = 2>titolo</th><th>file</th>
	</tr>
	<tr>	
	<td  colspan = 2><input type="text" name="title1" /></td>
	<td><input type="file" name="fileUpload[]" multiple></td>
	</tr>
	<tr>	
	<td  colspan = 2><input type="text" name="title2" /></td>
	<td><input type="file" name="fileUpload[]"></td>
	</tr>
	<tr>	
	<td  colspan = 2><input type="text" name="title3" /></td>
	<td><input type="file" name="fileUpload[]"></td>
	</tr>
	<tr>	
	<td  colspan = 2><input type="text" name="title4" /></td>
	<td><input type="file" name="fileUpload[]"></td>
	</tr>
	<tr>	
	<td  colspan = 2><input type="text" name="title5" /></td>
	<td><input type="file" name="fileUpload[]"></td>
	</tr>		-->
	</table>
	<input name="btnSubmit" type="submit" value="Submit">	
	
</form>
	
<?php
  //Assign all Page Specific variables
  $pagecontentAdmin = ob_get_contents();
  ob_end_clean();
  $pageInternaltitle = "Gestore Gallerie";
  $pagetitle = "Gestore Gallerie - White Mosquito";
 
  //Apply the template
  include("admin_masterpage.php");
?>