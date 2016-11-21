<!-- table rows -->
<?php
$daoEvents = DAOFactory::getDatEventsDAO();
$ImageDao = DAOFactory::getDatImmaginiDAO();
$FileDao = DAOFactory::getFilesDAO();
if (!isset($_GET["eventID"])) {
    ?>
    <script type="text/javascript">
        $(document).ready(function()
        {
            var maxlength = 600;
            $("p#event_desc").each(function(){
                var text = $(this).text();
                if(text.length > maxlength)
                {
                    text = text.substring(0,maxlength);
                    $(this).text(text+"...");
                }
            });                    
        });
    </script>
    <!-- <div class="bookingInfo"><a href="contatti.php"><b>BOOKING</b></a></div> -->
    <div class="events">
        <?php
        $today = date('Y-m-d');
        $allEvents = array();
        if (isset($_GET['PastEvents'])) {
            ?>
            <h3 class="black">EVENTI PASSATI</h3>
            <?php
            $allEvents = $daoEvents->queryByDataLT($today);
        } else {
            ?>
            <h3 class="black">PROSSIMI LIVE</h3>
            <?php
            $allEvents = $daoEvents->queryByDataGEQ($today);
        }
        ?>
    </div>
    <?php
    //Requirements
    $pageCount = 5;

    //$pageLink = "tour.php";
    $pageLink = "index.php";
    $parameters = array();
    $parameters[] = "PastEvents=true";
    $elements_pager = $allEvents;
    $renderer = "EventItem.php";
    $messaggioNessunRisultato = "Nessun evento in programmazione";
    $pagerClass = "eventsPager";
    $noItemsClass = "eventsNoItems";
    include("model/Rendering/pager.php");

    if (isset($_GET['PastEvents'])) {
        ?>
        <div class="events"><a href="<?php echo $pageLink; ?>"><b>Prossimi live</b></a></div><br/><br/>
        <?php
    } else {
        ?>
        <div class="events"><a href="<?php echo $pageLink; ?>?PastEvents=true"><b>Eventi passati</b></a></div><br/><br/>
        <?php
    }
} else {
    $eventId = $_GET["eventID"];
    $eventDetail = $daoEvents->load($eventId);
    $Image = $ImageDao->load($eventDetail->idDATImmagineLocandina);
    $File = $FileDao->load($Image->filesID);
    $eventImgSrc = $File->filesName;
    $eventImgAlt = $Image->title;
    $eventImgTitle = $Image->title;
    $eventTitle = "White Mosquito @" . $eventDetail->locale;
    $eventPub = $eventDetail->locale;
    $eventDate = date('d F Y ', strtotime($eventDetail->data));
    $eventHour = date('H:i', strtotime($eventDetail->data));
    $eventDesc = $eventDetail->descrizione;
    $eventVia = $eventDetail->indirizzo;
    $eventCity = $eventDetail->citta;
    $eventFBLink = $eventDetail->linkFBEvent;
    $eventCost = $eventDetail->ingresso;
    include("EventDetail.php");
    ?>


    <a href="<?php echo $pageLink; ?>" style="float:right;">Indietro</a>
    <?php
}
?>