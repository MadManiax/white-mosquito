
<div class="eventDetail">    
    <div class="contentLeft">
        <div class="locandina">
            <img src="<?php echo $eventImgSrc;?>" alt="<?php echo $eventImgAlt;?>" title="<?php echo $eventImgTitle;?>" />
        </div>
        <div class="eventInfo">
            <ul>
			<li><span>INDIRIZZO: </span> <?php echo $eventVia.", ".$eventCity;?></li>
            <li><span>ORARIO: </span> <?php echo $eventHour;?></li>
            <li><span>COSTO: </span> <?php echo $eventCost;?></li>
            <?php
                if(isset($eventFBLink))
                {
            ?>
            <li><span>EVENTO Facebook: </span> <a href="<?php echo $eventFBLink;?>" target="_blank">Vai</a></li>
            <?php
                }
            ?>
            </ul>
        </div>
    </div>
    <div class="contentRight">
        <div class="eventDescription">
        <h3><?php echo $eventTitle;?></h3>            
            <ul>
            <li><span>dove: </span> <?php echo $eventPub;?></li>
            <li><span>quando:</span> <?php echo $eventDate;?></li>
            </ul>
            
            <p class="description"><?php echo $eventDesc;?></p>
        </div>
        
        <div class="eventLocationMap">
            <iframe class="right" style="border:1px solid #CE5E1C;" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.it/maps?q=<?php echo preg_replace("/ /","+",$eventVia).",".preg_replace("/ /","+",$eventCity);  ?>&amp;oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;hl=it&amp;hq=&amp;hnear=<?php echo preg_replace("/ /","+",$eventVia).",".preg_replace("/ /","+",$eventCity);  ?>&amp;t=m&amp;vpsrc=0&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
    </div>
    <div class="clear"></div>
</div>
