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
        $("div#content").css('height','1700px');
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
        $daoEvents = DAOFactory::getDatEventsDAO();
        $ImageDao = DAOFactory::getDatImmaginiDAO();
        $FileDao = DAOFactory::getFilesDAO();

        $today = date('Y-m-d');
        $allEvents = $daoEvents->queryAllOrderBy("data desc");
        ?>
        <table style="font-size:x-small;" class="tablesorter">
        <thead>
        <tr>
                <th>Id</th>
                <th>Immagine</th>
                <th>Titolo evento</th>
                <th>Locale</th>
                <th>Data</th>
                <th>Descrizione</th>
                <th>Indirizzo</th>
                <th>Citta</th>
                <th>Ingresso</th>
                <th>Evento FB</th>
                <th>Azione</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($allEvents as $event)
        {	                                        
                $eventId= $event->id;
                $Image = $ImageDao->load($event->idDATImmagineLocandina);
                if(isset($Image))
                {
                    $File = $FileDao->load($Image->filesID);					
                    $eventImgSrc =  $File->filesName;
                    $eventImgAlt=  $Image->title;
                    $eventImgTitle=  $Image->title;
                }
                $eventTitle = "White Mosquito @".$event->locale;
                $eventPub = $event->locale;
                $eventDate = date('d F Y ',strtotime($event->data));
                $eventHour = date('H:i',strtotime($event->data));
                if(strlen($event->descrizione) > 200)
                    $eventDesc = substr ($event->descrizione, 0,200)."...";
                else
                    $eventDesc = $event->descrizione;		
                $eventCity = $event->citta;								
                $eventVia = $event->indirizzo;			
                $eventCost = $event->ingresso;			
                $eventFBLink = $event->linkFBEvent;			



?>
        <tr>
                <td><?php echo $eventId;?></td>
                <td><img src="<?php echo $eventImgSrc;?>" alt="<?php echo $eventImgAlt;?>" title="<?php echo $eventImgTitle;?>" width="100px" /></td>
                <td><?php echo $eventTitle;?></td>
                <td><?php echo $eventPub;?></td>
                <td><?php echo $eventDate;?></td>
                <td><?php echo $eventDesc;?></td>
                <td><?php echo $eventVia;?></td>
                <td><?php echo $eventCity;?></td>
                <td><?php echo $eventCost;?></td>
                <td><a href="<?php echo $eventFBLink;?>">Vai</a></td>
                <td><a href="admin/EventDetailManager.php?Mode=edit&id=<?php echo $eventId; ?>" >Modifica</a>&nbsp;&nbsp;<a href="admin/Edit_Delete.php?Mode=DeleteE&idEvent=<?php echo $eventId; ?>" >Elimina</a></td>
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
  $pageInternaltitle = "Gestore Eventi";
  $pagetitle = "Gestore Eventi - White Mosquito";
 
  //Apply the template
  include("admin_masterpage.php");
?>