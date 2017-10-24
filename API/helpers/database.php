<?php

function get_columns($table){
    $sql = "SELECT `COLUMN_NAME`, `DATA_TYPE` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='minutegen' AND `TABLE_NAME`='$table'";
    $db = new DB();
    $result = $db->execute($sql);
    $list = array();
    foreach ($result as $key => $value){
        $list[$value['COLUMN_NAME']] = $value['DATA_TYPE'];
    }
    return $list;
}
