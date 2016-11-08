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

        require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");
        $daoGallery = DAOFactory::getDatGallerieDAO();
        $ImageDao = DAOFactory::getDatImmaginiDAO();
        $FileDao = DAOFactory::getFilesDAO();

        
        $allGallery = $daoGallery->queryAll();
        ?>
        <table style="font-size:x-small;" class="tablesorter">
        <thead>
        <tr>
                <th>Id</th>
                <th>Titolo</th>
                <th>Associazione</th>
                <th>Gestisci Immagini</th>             
                <th>Azione</th> 
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($allGallery as $gallery)
        {	
?>
        <tr>
                <td><?php echo $gallery->id;?></td>
                <td><?php echo $gallery->title;?></td>
                <td><?php echo $gallery->description;?></td>
                <td><a href="admin/imagesManager.php?idGallery=<?php echo $gallery->id;?>">Vedi</a></td>                
                <td>
                    <a href="admin/galleryEdit.php?idGallery=<?php echo $gallery->id;?>">Modifica</a>
                    &nbsp;&nbsp;
                    <a href="admin/Edit_Delete.php?Mode=DeleteG&idGallery=<?php echo $gallery->id;?>">Elimina</a>
                </td>                
        </tr>
<?php
        }
?>
        </tbody>
        </table>

<?php
  //Assign all Page Specific variables
  $pagecontentAdmin = ob_get_contents();
  ob_end_clean();
  $pageInternaltitle = "Gestore Gallerie";
  $pagetitle = "Gestore Gallerie - White Mosquito";
 
  //Apply the template
  include("admin_masterpage.php");
?>