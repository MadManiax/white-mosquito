
<?php
$daoEvents = DAOFactory::getDatEventsDAO();
$ImageDao = DAOFactory::getDatImmaginiDAO();
$FileDao = DAOFactory::getFilesDAO();


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
$eventDesc = trim($event->descrizione,chr(0x20).chr(0x0A).chr(0x0D));
$eventCity = $event->citta;
$link = $event->linkFBEvent;
?>


<div class="eventItem">   
<a href="<?php echo $link; ?>">
<div>
<div class="left">
    <img src="<?php echo $eventImgSrc; ?>" alt="<?php echo $eventImgAlt; ?>" title="<?php echo $eventImgTitle; ?>"/>

</div> 
  <div class="right">  
        <div class="eventItem_data">
            <?php 
            if (isset($eventTitle) && $eventTitle !== "")
                echo $eventTitle;
            else
                echo $eventCity;
            echo " - ";
            echo date("d-m-Y", strtotime($eventDate)); 
            echo " - ";
            echo $eventPub;

            echo "<p>".$eventDesc."</p>";
?>
        </div>
</div>       
        
</div>
   </a> 
</div>
