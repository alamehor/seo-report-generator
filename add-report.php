<?php
/**
 * Author: Krzysztof Król
 * Website: https://royalcode.eu
 * Github: https://github.com/Krzysztof-Krol
 * Licence: GNU GPL v3
 */
include("autoload.php");

$date = date("d.m.Y");

$smarty->assign('title', 'Add report - SEO report generator');
$smarty->assign('create', array(
  'date' => $date,
  'head' => array(
    'header' => 'Add new report',
    'name' => 'Client name',
    'category' => 'Category',
  )

));

$smarty->assign('quantity', 150);

$smarty->display('create.tpl');

?>
