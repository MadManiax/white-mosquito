







<!-- <ul class="bxslider" id="imageSlider"> -->


<div class="events">
<?php
    $daoEvents = DAOFactory::getDatEventsDAO();   
    $ImageDao = DAOFactory::getDatImmaginiDAO();
    $FileDao = DAOFactory::getFilesDAO();
    
    $today = date('Y-m-d');

    $allEvents = array();
    if (isset($_GET['PastEvents'])) {
        ?>
        <h3 class="black">EVENTI PASSATI</h3>
        <?php

        $allEvents = DAOFactory::getDatEventsDAO()->queryByDataLT($today);
    } else {
        ?>
        <h3 class="black">PROSSIMI LIVE</h3>
        <?php
        $allEvents = DAOFactory::getDatEventsDAO()->queryByDataGEQ($today);
    }
?>
<div id="event-slider">
<?php
    foreach($allEvents as $event)
    {
        include("model/Rendering/EventItem.php");

    }
?>
<!-- </ul> -->
</div>
<div class="clear"></div>
<?php
$pageLink = "index.php";
if (isset($_GET['PastEvents'])) {
        ?>
        <a href="<?php echo $pageLink; ?>"><b>Prossimi live</b></a><br/><br/>
        <?php
    } else {
        ?>
        <a href="<?php echo $pageLink; ?>?PastEvents=true"><b>Eventi passati</b></a><br/><br/>
        <?php
    }
    ?>
</div>
<script>
$(function() {
      $('#event-slider').slidesjs({
        width: 900,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 6000,
          swap: true
        },
        pagination:{
        	active: false
        }
      });
      $('a.slidesjs-stop.slidesjs-navigation').css('display', 'none');
  });
</script>