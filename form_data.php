<?php
/**
 * Plugin Name:       Form Data
 * Author:            Shishir Yadav TEN/WD/869
 * Description:       plugin for hooks activation/deactivation
 * @copyright         The Entrepreneurship Network
 */

register_activation_hook(__FILE__, 'form_data_activate' );
register_deactivation_hook(__FILE__, 'form_data_deactivate' );

function form_data_activate(){
    global $wpdb;
    global $table_prefix;
    $table=$table_prefix.'form_data';
    $sql="CREATE TABLE $table (
        `EID` int(11) NOT NULL,
        `Name` varchar(500) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        ALTER TABLE $table
        ADD PRIMARY KEY (`EID`);
        ALTER TABLE $table
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT;";
      $wpdb->query($sql);
}

function form_data_deactivate(){
    global $wpdb;
    global $table_prefix;
    $table=$table_prefix.'form_data';
    $sql="DROP TABLE $table";
      $wpdb->query($sql);    
}

add_action('admin_menu', 'form_data_menu');

function form_data_menu(){
   add_menu_page('Form Data', 'Form Data', 8, __FILE__, 'form_data_list' );
}

function form_data_list(){
    include('form_data_list.php');
}

?>