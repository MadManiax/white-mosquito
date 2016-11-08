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
        $daoPress = DAOFactory::getDatPressDAO();
        

        $today = date('Y-m-d');
        $allPress = $daoPress->queryAllOrderBy("data desc");
        ?>
        <table style="font-size:x-small;" class="tablesorter">
        <thead>
        <tr>
                <th>Id</th>
                <th>Titolo</th>
                <th>Fonte</th>
                <th>Link</th>
                <th>Data</th>   
                <th></th>                
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($allPress as $press)
        {	                                        
                $pressId= $press->id;               
                $pressTitle = $press->title;
                $pressSubTitle = $press->subtitle;
                $pressData = date('d F Y ',strtotime($press->data));
                $pressLink = $press->link;
?>
        <tr>
                <td><?php echo $pressId;?></td>                
                <td><?php echo $pressTitle;?></td>
                <td><?php echo $pressSubTitle;?></td>
                <td><?php echo $pressLink;?></td>
                <td><?php echo $pressData;?></td>                                
                <td><a href="admin/pressDetailManager.php?Mode=edit&id=<?php echo $pressId; ?>" >Modifica</a>&nbsp;&nbsp;<a href="admin/Edit_Delete.php?Mode=DeleteP&pressId=<?php echo $pressId; ?>" >Elimina</a></td>
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
  $pageInternaltitle = "Gestore Press";
  $pagetitle = "Gestore Press - White Mosquito";
 
  //Apply the template
  include("admin_masterpage.php");
?>