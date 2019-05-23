<?php
/* Smarty version 3.1.33, created on 2019-05-23 16:03:06
  from 'C:\vhost\report.seo\views\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6a81a3239e7_34081257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dbee6d92c18396238397e9c05538a4640b64a5c' => 
    array (
      0 => 'C:\\vhost\\report.seo\\views\\nav.tpl',
      1 => 1558620183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce6a81a3239e7_34081257 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-3 p-5 pb-0 border-delicate h-100 bg-white position-relative overflow-auto">
  <aside class="">
    <nav>
            <span class="h4">Report generator</span>
      <ul class="nav flex-column mt-3">
        <li class="nav-item"><a href="" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['nav']->value['home'];?>
</a></li>
        <li class="nav-item"><a href="" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['nav']->value['new'];?>
</a></li>
        <li class="nav-item"><a href="" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['nav']->value['all'];?>
</a></li>
        <li class="nav-item"><a href="" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['nav']->value['my'];?>
</a></li>
            <span class="h4 mt-5">Admin panel</span>
      <ul class="nav flex-column mt-2">
        <li class="nav-item"><a href="" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['nav']->value['users'];?>
</a></li>
        <li class="nav-item"><a href="" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['nav']->value['categories'];?>
</a></li>
        <li class="nav-item"><a href="" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['nav']->value['company'];?>
</a></li>
    </nav>
  </aside>
  <div class="position-absolute footer pl-3 pr-3">
    <footer class="w-100 p-3 bg-white text-right border-top-delicate">
      <a class="text-dark" href="<?php echo $_smarty_tpl->tpl_vars['author']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value['domain'];?>
</a><br>
      <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['author']->value['like_it'];?>
</span>
      <a href="<?php echo $_smarty_tpl->tpl_vars['author']->value['donate']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value['donate']['encouragement'];?>
</a>
      <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['author']->value['smile'];?>
</span>
    </footer>
  </div>
</div> <!-- /col -->
<?php }
}
