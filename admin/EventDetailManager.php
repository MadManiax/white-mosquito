<?php
  //Buffer larger content areas like the main page content
  ob_start();
  define("L_LANG", "it_IT"); // Greek example
?>


<script type="text/javascript" src="calendar/calendar.js"></script>
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
// Load the calendar class
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."config.inc.php");
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."calendar/tc_calendar.php");

$Mode = null;
if(isset($_GET['Mode']))
    $Mode = $_GET['Mode'];

$daoEvents = DAOFactory::getDatEventsDAO();
$ImageDao=DAOFactory::getDatImmaginiDAO();
$FileDao = DAOFactory::getFilesDAO();

$eventId = "";	
$eventImgSrc = "";	
$eventImgAlt = "";	
$eventImgTitle = "";	
$eventTitle = "";	
$eventPub = "";	
$eventDate = "";	
$eventHour = "";	
$eventDesc = "";	
$eventVia = "";	
$eventCity = "";	
$eventFBLink = "";	
$eventCost = "";	

if($Mode == "edit")
{
    $eventId = $_GET["id"];
    $eventDetail = $daoEvents->load($eventId);
    $Image = $ImageDao->load($eventDetail->idDATImmagineLocandina);	
    if(isset($Image))
    {
        $File = $FileDao->load($Image->filesID);
        $eventImgSrc =  $File->filesName;
        $eventImgAlt=  $Image->title;
        $eventImgTitle=  $Image->title;
    }
    $eventTitle = $eventDetail->title;//"White Mosquito @".$eventDetail->locale;
    $eventPub = $eventDetail->locale;
    $eventDate = date('d F Y ',strtotime($eventDetail->data));
    $eventHour = date('H:i',strtotime($eventDetail->data));
    $eventDesc = $eventDetail->descrizione;
    $eventVia=$eventDetail->indirizzo;
    $eventCity=$eventDetail->citta;
    $eventFBLink=$eventDetail->linkFBEvent;
    $eventCost=$eventDetail->ingresso;
}
?>

<form method="POST" action="admin/Edit_Save.php?Mode=SaveE&idEvent=<?php echo $eventId; ?>">
<div>
    <div style="float:left">
        <table>
        <?php
        if($Mode == "edit")
        {
        ?>
        <tr>
            <td>ID:</td>
            <td><label><?php echo $eventId; ?></label></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td>Titolo:</td>
            <td><input type="text" value="<?php echo $eventTitle; ?>" name="txt_event_title" /></td>
        </tr>
        <tr>
            <td>Locale:</td>
            <td><input type="text" value="<?php echo $eventPub; ?>" name="txt_event_pub" /></td>
        </tr>
        <tr>
            <td>Quando</td>
            <td>
            <?php
              $myCalendar = new tc_calendar("date1", true);
              $myCalendar->setIcon($location."calendar/images/iconCalendar.gif");
              
              if($eventDate != "")              
                $myCalendar->setDate(date('d',strtotime($eventDate)), date('m',strtotime($eventDate)), date('Y',strtotime($eventDate)));
              else
                 $myCalendar->setDate(date('d'), date('m'), date('Y'));
              $myCalendar->setPath($location."calendar/");
              $myCalendar->setYearInterval(2012, 2018);
              $myCalendar->dateAllow('2012-01-01', '2018-03-01');	  
              //$myCalendar->setOnChange("myChanged('test')");
              $myCalendar->writeScript();
              ?>
            </td>
        </tr>
        <tr>
            <td>Ora:</td>
            <td>
                <?php
                    $hourSel = 99;
                    $minSel = 99;
                    if($eventHour != "")
                    {
                        $splitHour = preg_split("/:/",$eventHour);
                        $hourSel = $splitHour[0];
                        $minSel = $splitHour[1];
                    }
                ?>
                <select name="select_hour">
                    <option></option>
                    <?php
                        for($i=0;$i<24;$i++)
                        {
                            $hour = $i;
                            if(strlen($i) == 1)
                                $hour = "0".$i;
                    ?>
                    <option <?php if($hour == $hourSel) echo "selected"; ?>><?php echo $hour; ?></option>
                    <?php
                        }
                    ?>
                </select>
                :
                <select name="select_min">
                    <option></option>
                    <?php
                        for($i=0;$i<60;$i++)
                        {
                            $minutes = $i;
                            if(strlen($i) == 1)
                                $minutes = "0".$i;
                    ?>
                    <option <?php if($minutes == $minSel) echo "selected"; ?>><?php echo $minutes; ?></option>
                    <?php
                        }
                    ?>                
                </select>
            </td>
        </tr>
        <tr>
            <td>Descrizione:</td>
            <td><textarea type="text" COLS=40 ROWS=6 name="txt_event_desc" ><?php echo $eventDesc; ?></textarea></td>
        </tr>
        <tr>
            <td>Indirizzo:</td>
            <td><input type="text" value="<?php echo $eventVia; ?>" name="txt_event_address" /></td>
        </tr>
        <tr>
            <td>Citta:</td>
            <td><input type="text" value="<?php echo $eventCity; ?>" name="txt_event_city" /></td>
        </tr>
        <tr>
            <td>Ingresso:</td>
            <td><input type="text" value="<?php echo $eventCost; ?>" name="txt_event_cost" /></td>
        </tr>
        <tr>
            <td>Facebook Event:</td>
            <td><input type="text" value="<?php echo $eventFBLink; ?>" name="txt_event_fb" /></td>
        </tr>
        <tr>
            <td>Locandina:</td>
            <td>
                <?php
                        $daoGallery = DAOFactory::getDatGallerieDAO();
                        $Gallery = $daoGallery->queryByTitle("Locandine");
                        
                        $locandine = $ImageDao->queryByIdGalleria($Gallery[0]->id);
                        ?>
                <select name="select_locandina" id="select_locandina_id">
                    <option value="none"></option>
                    <?php
                        foreach($locandine as $locandina )
                        {         
                            $file = $FileDao->load($locandina->filesID);
                    ?>
                    <option value="<?php echo $locandina->id."_".$locandina->title."_".$locandina->alt."_".$file->filesName; ?>"><?php echo $locandina->title; ?></option>
                    <?php
                        }
                    ?>
                </select>
                <script type="text/javascript">
                      $("#select_locandina_id").change(function (){
                          var str = $("#select_locandina_id").val();
                          if(str != "")
                          {
                              if(str == "none")
                              {
                                  $("#preview").attr('title');
                                  $("#preview").attr('alt');
                                  $("#preview").attr('src');
                              }
                              else
                              {
                                  var attr = str.split("_");
                                  $("#preview").attr('title',attr[1]);
                                  $("#preview").attr('alt',attr[2]);
                                  $("#preview").attr('src',attr[3]);
                              }
                          }
                          
                      });
                </script>
            </td>
        </tr>
    </table>
    </div>
    <div style="float:right;">
        <img id ="preview" src="<?php echo $eventImgSrc; ?>" title="<?php echo $eventImgTitle; ?>" alt="<?php echo $eventImgAlt; ?>" width="200"/>
    </div>
    <div class="clear"> </div>
</div>
<input type="submit" value="Submit" style="clear:left;"/>
</form>


<?php
  //Assign all Page Specific variables
  $pagecontentAdmin = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Event Edit_New - White Mosquito";
  $pageInternaltitle = "Gestore Eventi";
  //Apply the template
  include("admin_masterpage.php");
?>
