<?php
/**
 * Plugin Name:       Form Data
 * Author:            Shishir Yadav TEN/WD/869
 * Description:       plugin for hooks activation/deactivation
 * @copyright         The Entrepreneurship Network
 */

global $wpdb;
global $table_prefix;
$table=$table_prefix.'form_data';
$sql="SELECT * FROM $table";
$result = $wpdb->get_results($sql);
?>

<table border=1">
    <tr>
        <td>EID</td>
        <td>Name</td>   
    </tr>
    <?php
    foreach($result as $list){
    ?>
    <tr>
        <td><?php echo $list->EID?></td>
        <td><?php echo $list->Name?></td>   
    </tr>
    <?php
    }
    ?>
</table>