<?php
 require_once("model/include_dao.php");
 
?>
<tr>
    <td>
 
 <?php echo date('d/m/Y ',strtotime($news->data)); ?></td>
    <td><?php echo $news->title; ?></td>
    <td><?php echo $news->descr; ?></td>
</tr>
