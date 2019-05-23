<?php
// Add to constructor
require_once('libs/smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';

$domain = $_SERVER['HTTP_HOST'];
$smarty->assign('domain', $domain);

$smarty->assign('nav', array(
  'home' => 'Home',
  'new' => 'Add new report',
  'all' => 'All reports',
  'my' => 'My reports',
  'users' => 'Manage users',
  'categories' => 'Manage categories',
  'company' => 'Your company'
));
$smarty->assign('author', array(
  'name' => 'Krzysztof Król',
  'website' => 'https://royalcode.eu',
  'domain' => 'royalcode.eu',
  'by' => 'By royalcode.eu',
  'github' => 'https://github.com/Krzysztof-Krol',
  'like_it' => 'Do you like it?',
  'smile' => ':-)',
  'donate' => array(
    'link' => 'donate-me.php',
    'encouragement' => 'Donate me'
  )
));

$smarty->assign('title', 'SEO report generator');
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
    'edit' => 'Edit',
    'remove' => 'Remove'
  )
));

$smarty->display('home.tpl');
?>
