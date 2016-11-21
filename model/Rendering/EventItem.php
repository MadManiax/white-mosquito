
<?php
$daoEvents = DAOFactory::getDatEventsDAO();
$ImageDao = DAOFactory::getDatImmaginiDAO();
$FileDao = DAOFactory::getFilesDAO();

$event = $element_pager;
$Image = $ImageDao->load($event->idDATImmagineLocandina);
$File = "#";
if($Image != null)
{    
    $File = $FileDao->load($Image->filesID);
    $eventImgAlt = $Image->title;
    $eventImgTitle = $Image->title;
    $eventImgSrc = $File->filesName;
}
//$event->id;
$eventId = $event->id;


$eventTitle = $event->title;
$eventPub = $event->locale;
$eventDate = date('d F Y ', strtotime($event->data));
$eventHour = date('H:i', strtotime($event->data));
$eventDesc = $event->descrizione;
$eventCity = $event->citta;
?>

<div class="eventItem">    
    <a href="tour.php?eventID=<?php echo $eventId; ?>">
        <div class="eventItem_data">
            <?php echo date("d-m-Y", strtotime($eventDate)); ?>
        </div>
        <div class="eventItem_locale">
            <?php echo $eventPub; ?>
        </div>
        <div class="eventItem_dove">
            <?php
            if (isset($eventTitle) && $eventTitle !== "")
                echo $eventTitle;
            else
                echo $eventCity;
            ?>
        </div>

    </a>
</div>