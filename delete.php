<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/19/17
 * Time: 4:45 PM
 */
 $id = $_POST['_username'];
 require_once ('database.php');
 $query = "delete from tblAccount where _username = '$id'";
 $conn->exec($query);
 include('index.php');
?>