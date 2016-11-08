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
<script type="text/javascript">
    $(document).ready(function() {
        $("table.tablesorter")
        .tablesorter({ widthFixed: true, widgets: ['zebra'] })
        .tablesorterPager({ container: $("#pager"),positionFixed:false });
    });
</script>
<div class="pager" id="pager" >
        <form>
            <img class="first" src="images/first.png">
            <img class="prev" src="images/prev.png">
            <input type="text" class="pagedisplay">
            <img class="next" src="images/next.png">
            <img class="last" src="images/last.png">
            <select class="pagesize">
                <option value="10" selected="selected">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
            </select>
        </form>
    </div>
<?php

if(isset($_GET['idGallery']))
{
        require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");
        
        $ImageDao = DAOFactory::getDatImmaginiDAO();
        $FileDao = DAOFactory::getFilesDAO();

        $idGallery = $_GET['idGallery'];
        $allImages = $ImageDao->queryByIdGalleria($idGallery);
        
        $Mode = "";
        if(isset($_GET['Mode']))
            $Mode = $_GET['Mode'];
        $isEdit = false;
        if($Mode == "edit")
            $isEdit = true;
        ?>
        
        <table style="font-size:x-small;" class="tablesorter">
        <thead>
        <tr>
                <th>Id</th>
                <th>Immagine</th> 
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Alt</th>      
                <th>Azione</th> 
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($allImages as $image)
        {	
            $file = $FileDao->load($image->filesID);
        ?>
        <tr>
            <?php
            if($isEdit == false)
            {                
            ?>
                <td><?php echo $image->id;?></td>
                <td><img src="<?php echo $file->thumbnails; ?>" title="<?php echo $image->title;?>" alt="<?php echo $image->alt;?>" height="100"/>
                    &nbsp;&nbsp;<a href="<?php echo $file->filesName; ?>" target="_blank">Vedi</a>
                </td>  
                <td><?php echo $image->title;?></td>               
                <td><?php echo $image->description;?></td>
                <td><?php echo $image->alt;?></td>                
                
                <td>                    
                    <a href="admin/imagesManager.php?Mode=edit&idGallery=<?php echo $idGallery;?>">Modifica</a>
                    &nbsp;&nbsp;
                    <a href="admin/Edit_Delete.php?Mode=Delete&IdImg=<?php echo $image->id;?>">Elimina</a>                    
                </td>        
            <?php
            }
            else
            {
            ?>
                <form action="admin/Edit_Save.php?Mode=SaveI" method="POST">
                    <td><?php echo $image->id;?></td>
                    <td><img src="<?php echo $file->filesName; ?>" title="<?php echo $image->title;?>" alt="<?php echo $image->alt;?>" height="100"/></td>  
                    <td><input type="text" name="image_txt_title" value="<?php echo $image->title; ?>"/>                      </td>
                    <td><input type="text" name="image_txt_description" value="<?php echo $image->description; ?>"/></td>
                    <td><input type="text" name="image_txt_alt" value="<?php echo $image->alt; ?>"/></td>
                    
                    <td>
                        <input type="hidden" name="id_image" value="<?php echo $image->id; ?>"/>
                        <input type="hidden" name="id_gallery" value="<?php echo $image->idGalleria; ?>"/>
                        <input type="submit" value="Salva"/>
                    </td>
                </form>

            <?php
            }
            ?>
                
        </tr>
<?php
        }
        
?>
        </tbody>
        </table>
<br/>
<a href="admin/galleryManager.php">Torna a gestore gallerie</a>&nbsp;&nbsp;&nbsp;&nbsp;
<?php
}
  //Assign all Page Specific variables
  $pagecontentAdmin = ob_get_contents();
  ob_end_clean();
  $pageInternaltitle = "Gestore Gallerie";
  $pagetitle = "Gestore Gallerie - White Mosquito";
 
  //Apply the template
  include("admin_masterpage.php");
?>