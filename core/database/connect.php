<?php
$connect_error = " Experiencing Connection Problem";
mysql_connect('localhost','root','') or die($connect_error);
mysql_select_db('foods') or die($connect_error);

?>