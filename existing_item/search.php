<?php
require("../db.class.php");
$ob=new db_operations();
$query = $_GET['query'];
$results = "select * from tbl_item where item_name=$query";
if (count($results) > 0) {
  $html = "<ul>";
  foreach ($results as $result) {
    $html .= "<li>" . $result['name'] . "</li>";
  }
  $html .= "</ul>";
} else {
  $html = "No results found.";
}
echo $html;
?>