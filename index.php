<?php $page_title = "index" ;?>
<?php  include_once "includes/conf.php";?>
<?php
include "classes/Page.php";

$page = new Page($conn);
$page->readAll();

?>


