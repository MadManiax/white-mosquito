<?php
//Buffer larger content areas like the main page content
ob_start();
define("L_LANG", "it_IT"); // Greek example
?>

<script type="text/javascript" src="calendar/calendar.js"></script>
<!-- some header here     -->
<?php
//Assign all Page Specific variables
$pageheaderAdmin = ob_get_contents();
ob_end_clean();
?>

<?php
require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . "config.inc.php");
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."model/include_dao.php");
require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . "calendar/tc_calendar.php");
ob_start();
?>
<script type="text/javascript">
    $(document).ready(function() {
        $("table.tablesorter")
        .tablesorter({ widthFixed: true, widgets: ['zebra'] })
        .tablesorterPager({ container: $("#pager") });
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
<table class="tablesorter">
    <thead>
        <tr>
            <th>Data</th>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Azione</th>
        </tr>
    </thead>
    <?php
    $newsDao = DAOFactory::getDatNewsDAO();
    $listaNews = $newsDao->queryAllOrderBy("data DESC");
    $Mode = "";
    if(isset($_GET['Mode']))
        $Mode = $_GET['Mode'];
    $isEdit = false;
    if($Mode == "edit")
        $isEdit = true;
    foreach ($listaNews as $news) {
        ?>
        <tr>
            <?php
            if ($isEdit == false) {
                ?>
                <td><?php echo $news->data; ?></td>
                <td><?php echo $news->title; ?></td>               
                <td><?php echo $news->descr; ?></td>
                <td>                    
                    <a href="admin/newsManager.php?Mode=edit&idNews=<?php echo $news->id; ?>">Modifica</a>
                    &nbsp;&nbsp;
                    <a href="admin/Edit_Delete.php?Mode=DeleteN&idNews=<?php echo $news->id; ?>">Elimina</a>                    
                </td>        
        <?php
            } 
            else 
            {
        ?>
        <form action="admin/Edit_Save.php?Mode=SaveN" method="POST">
                <td>
                <?php
                $myCalendar = new tc_calendar("date1", true);
                $myCalendar->setIcon($location . "calendar/images/iconCalendar.gif");

                if ($news->data != "")
                    $myCalendar->setDate(date('d', strtotime($news->data)), date('m', strtotime($news->data)), date('Y', strtotime($news->data)));
                else
                    $myCalendar->setDate(date('d'), date('m'), date('Y'));
                $myCalendar->setPath($location . "calendar/");
                $myCalendar->setYearInterval(2012, 2018);
                $myCalendar->dateAllow('2012-01-01', '2018-03-01');
                //$myCalendar->setOnChange("myChanged('test')");
                $myCalendar->writeScript();
                ?>
                </td>
                <td><input type="text" name="txt_news_title" value="<?php echo $news->title; ?>"/> </td>
                <td><input type="text" name="txt_news_desc" value="<?php echo htmlentities($news->descr); ?>"/></td>
                <td>
                    <input type="hidden" name="id_news" value="<?php echo $news->id; ?>"/>
                    <input type="submit" value="Salva"/>                            
                </td>
        </form>
        <?php
        }
        
        ?>
        </tr>
        
            <?php
        }
        ?>
        <tr>
        <form action="admin/Edit_Save.php?Mode=SaveN" method="POST">
            <td >
                <?php
                $myCalendar = new tc_calendar("date1", true);
                $myCalendar->setIcon($location . "calendar/images/iconCalendar.gif");

                
                $myCalendar->setDate(date('d'), date('m'), date('Y'));
                $myCalendar->setPath($location . "calendar/");
                $myCalendar->setYearInterval(2012, 2018);
                $myCalendar->dateAllow('2012-01-01', '2018-03-01');
                //$myCalendar->setOnChange("myChanged('test')");
                $myCalendar->writeScript();
                ?>
                </td>
                <td><input type="text" name="txt_news_title" value=""/> </td>
                <td><input type="text" name="txt_news_desc" value=""/></td>
                <td>                    
                    <input type="submit" value="Salva"/>                            
                </td>
        </form>
        </tr>
    <?php
    ?>
</table>

<?php
    //Assign all Page Specific variables
    $pagecontentAdmin = ob_get_contents();
    ob_end_clean();
    $pageInternaltitle = "Gestore News";
    $pagetitle = "Gestore News - White Mosquito";

    //Apply the template
    include("admin_masterpage.php");
    ?>