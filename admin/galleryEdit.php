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
        
        require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");
        $daoGallery = DAOFactory::getDatGallerieDAO();
        if(isset($_GET['idGallery']))
        {
            $idGallery = $_GET['idGallery'];
            $Gallery = $daoGallery->load($idGallery);
            ?>
            <form method="POST" action="admin/Edit_Save.php?Mode=AssociaG&idGallery=<?php echo $idGallery; ?>">
                <div>
                    <table>
                        <tr>
                            <td>ID:</td>
                            <td><label><?php echo $Gallery->id; ?></label></td>
                        </tr>
                        <tr>
                            <td>Titolo:</td>
                            <td><input type="text" value="<?php echo $Gallery->title; ?>" name="txt_gallery_title" /></td>
                        </tr>
                        <tr>
                            <td>Associazione:</td>
                            <td>
                                <select name="select_gallery_assoc">
                                    <option></option>
                                    <option value="Periodo1" <?php if($Gallery->description == "Periodo1") echo "selected"; ?>>Periodo 2006-2008</option>
                                    <option value="Periodo2" <?php if($Gallery->description == "Periodo2") echo "selected"; ?>>Periodo 2008-2010</option>
                                    <option value="Periodo3" <?php if($Gallery->description == "Periodo3") echo "selected"; ?>>Periodo 2011-2014</option>
									<option value="Periodo4" <?php if($Gallery->description == "Periodo4") echo "selected"; ?>>Periodo 2014-oggi</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="admin/uploadForm.php?Mode=add&idGallery=<?php echo $idGallery; ?>">Aggiungi Immagini</a></td>
                        </tr>
                    </table>
                    <br/>
                    <input type="submit" value="Invia"/>
                </div>
            </form>
            <br/>
            <a href="admin/galleryManager.php">Torna a gestore gallerie</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
            
        }

?>        
<?php
  //Assign all Page Specific variables
  $pagecontentAdmin = ob_get_contents();
  ob_end_clean();
  $pageInternaltitle = "Gestore Gallerie";
  $pagetitle = "Gestore Gallerie - White Mosquito";
 
  //Apply the template
  include("admin_masterpage.php");
?>