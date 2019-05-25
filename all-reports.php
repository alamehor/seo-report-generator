<?php
/**
 * Author: Krzysztof Król
 * Website: https://royalcode.eu
 * Github: https://github.com/Krzysztof-Krol
 * Licence: GNU GPL v3
 */
include("autoload.php");

$smarty->assign('title', 'All reports - SEO report generator');
$smarty->assign('recent', array(
  'head' => array(
    'header' => 'Recent reports',
    'name' => 'Client name',
    'category' => 'Category',
    'date' => 'Report date',
  ),
  'body' => array(
    'name' => 'Any Company',
    'date' => '2019.06.26',
    'category' => 'Tech Optimisation',
    'pdf' => 'Export to PDF',
    'duplicate' => 'Duplicate',
    'edit' => 'Edit',
    'remove' => 'Remove'
  )
));

$smarty->assign('quantity', 150);

$smarty->display('home.tpl');

?>
