<?php


$count = count($elements_pager);


if (!isset($elements_pager) || $count == 0) {
    ?>
    <div class="<?php echo $noItemsClass; ?>">
        <?php echo $messaggioNessunRisultato; ?><br/>            
    </div>

    <?php
}
$page = 1;
if (isset($_GET['page']))
    $page = $_GET['page'];
//$pageCount = 5;

if ($count > 0) {
    $start = ($page - 1) * $pageCount;
    $stop = $start + $pageCount;
    if ($stop > $count)
        $stop = $count;
    $total = ceil($count / $pageCount);
    ?>

    <div id="pager" class="<?php echo $pagerClass; ?>">
        <?php
        if ($page > 1) 
        {
        ?>
            <a href="
        <?php
                    $backLink = $pageLink . '?page=' . ($page - 1);
                    if (isset($parameters))
                        foreach ($parameters as $prm) 
                            {
                                $backLink = $backLink . '&' . $prm;
                            }
                    echo $backLink;
        ?>
            ">
                <
            </a>&nbsp;&nbsp;
       <?php
       }
       echo $page . " / " . $total;
       if ($page < $total) 
       {
       ?>
            &nbsp;&nbsp;
            <a href="
       <?php
            
            $forwardLink = $pageLink . '?page=' . ($page + 1);
            if (isset($parameters))
                foreach ($parameters as $prm) {
                    $forwardLink = $forwardLink . '&' . $prm;
                }
            echo $forwardLink;
       ?>
               ">
                >
            </a>
       <?php
       }
       ?>
    </div>

    <?php
    for ($i = $start; $i < $stop; $i++) {
        $element_pager = $elements_pager[$i];
        include($renderer);
    }
}
?>