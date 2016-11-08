<?php
  //Buffer larger content areas like the main page content
  ob_start();
  define("L_LANG", "it_IT"); // Greek example
?>


<script language="Javascript" src="includes/HtmlBox/htmlbox.colors.js" type="text/javascript"></script>
<script language="Javascript" src="includes/HtmlBox/htmlbox.styles.js" type="text/javascript"></script>
<script language="Javascript" src="includes/HtmlBox/htmlbox.syntax.js" type="text/javascript"></script>
<script language="Javascript" src="includes/HtmlBox/xhtml.js" type="text/javascript"></script>
<script language="Javascript" src="includes/HtmlBox/htmlbox.min.js" type="text/javascript"></script>
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

$daoPress = DAOFactory::getDatPressDAO();

$pressId= "";          
$pressTitle = "";
$pressSubTitle = "";
$pressData = "";
$pressLink = "";
$pressText = "";
$pressStralcio = "";

if($Mode == "edit")
{
    $pressId = $_GET["id"];
    $press = $daoPress->load($pressId);          
    $pressTitle = $press->title;
    $pressSubTitle = $press->subtitle;
    $pressData = $press->data;
    $pressLink = $press->link;
    $pressText = $press->text;
    $pressStralcio = $press->stralcio;
}
?>

<form method="POST" action="admin/Edit_Save.php?Mode=SaveP&idPress=<?php echo $pressId; ?>">
<div>
    <div>
        <table>
        <?php
        if($Mode == "edit")
        {
        ?>
        <tr>
            <td>ID:</td>
            <td><label><?php echo $pressId; ?></label></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td>Titolo:</td>
            <td><input type="text" value="<?php echo $pressTitle; ?>" name="txt_press_title" /></td>
        </tr>
        <tr>
            <td>Fonte:</td>
            <td><input type="text" value="<?php echo $pressSubTitle; ?>" name="txt_press_subtitle" /></td>
        </tr>
        <tr>
            <td>Data</td>
            <td>
            <?php
              $myCalendar = new tc_calendar("date1", true);
              $myCalendar->setIcon($location."calendar/images/iconCalendar.gif");
              
              if($pressData != "")              
                $myCalendar->setDate(date('d',strtotime($pressData)), date('m',strtotime($pressData)), date('Y',strtotime($pressData)));
              else
                 $myCalendar->setDate(date('d'), date('m'), date('Y'));
              $myCalendar->setPath($location."calendar/");
              $myCalendar->setYearInterval(2012, 2018);
              $myCalendar->dateAllow('2002-01-01', '2018-03-01');	  
              //$myCalendar->setOnChange("myChanged('test')");
              $myCalendar->writeScript();
              ?>
            </td>
        </tr>
        
        <tr>
            <td>Testo:</td>
            <td><textarea id='id_press_text'></textarea>
<script language="Javascript" type="text/javascript">
$("#id_press_text").css("height","100%").css("width","100%").htmlbox({
    toolbars:[
	    [
		// Cut, Copy, Paste
		"separator","cut","copy","paste",
		// Undo, Redo
		"separator","undo","redo",
		// Bold, Italic, Underline, Strikethrough, Sup, Sub
		"separator","bold","italic","underline","strike","sup","sub",
		// Left, Right, Center, Justify
		"separator","justify","left","center","right",
		// Ordered List, Unordered List, Indent, Outdent
		"separator","ol","ul","indent","outdent",
		// Hyperlink, Remove Hyperlink, Image
		"separator","link","unlink","image"
		
		],
		[// Show code
		"separator","code",
        // Formats, Font size, Font family, Font color, Font, Background
        "separator","formats","fontsize","fontfamily",
		"separator","fontcolor","highlight",
		],
		[
		//Strip tags
		"separator","removeformat","striptags","hr","paragraph",
		// Styles, Source code syntax buttons
		"separator","quote","styles","syntax"
		]
	],
        success:function(){onSuccess();},
        error: function(){alert('Attenzione errore nel salvataggio del testo');},
	skin:"red"
});

function onSuccess()
{
    var html = $("#id_press_text").getHtml();
    $('#hdn_text').val(html);
}
</script></td>
        </tr>
        <tr>
            <td>Copia test Html qui</td>
            <td><textarea id="id_press_copy_text" name="txt_press_text"><?php echo $pressText; ?></textarea></td>
        </tr>
        <tr>
            <td>Stralcio</td>
            <td><textarea id="id_press_copy_text" name="txt_press_stralcio"><?php echo $pressStralcio; ?></textarea></td>
        </tr>
        <tr>
            <td>Link:</td>
            <td><input type="text" value="<?php echo $pressLink; ?>" name="txt_press_link" /></td>
        </tr>
        
        </tr>
    </table>
    </div>
    
</div>
    
<input type="submit" value="Submit" style="clear:left;"/>
</form>


<?php
  //Assign all Page Specific variables
  $pagecontentAdmin = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Press Edit_New - White Mosquito";
  $pageInternaltitle = "Gestore Press";
  //Apply the template
  include("admin_masterpage.php");
?>
