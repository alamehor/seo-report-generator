<?php
/* Smarty version 3.1.33, created on 2019-05-23 16:05:53
  from 'C:\vhost\report.seo\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6a8c1dee097_17816024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279284d0084fc03b72612886e8e1bde1ab5647e8' => 
    array (
      0 => 'C:\\vhost\\report.seo\\views\\home.tpl',
      1 => 1558620352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ce6a8c1dee097_17816024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <div class="container-fluid d-flex flex-column m-auto h-100 pr-0">
      <div class="row w-100 h-100">
          <div class="col-md-9 pl-5 pr-5 pt-3 pb-3 h-100 overflow-auto">
            <header>
              <h1 class="h1"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
              <span class="d-block mb-4 text-secondary"><?php echo $_smarty_tpl->tpl_vars['author']->value['by'];?>
</span>
            </header>

            <div class="row">
              <div class="col-md-12">
                <main>

                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['recent']->value['head']['header'];?>
</h2>
                      <table class="table table-light table-striped">
                        <thead>
                          <tr>
                            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['recent']->value['head']['name'];?>
</th>
                            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['recent']->value['head']['date'];?>
</th>
                            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['recent']->value['head']['category'];?>
</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 15+1 - (1) : 1-(15)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                            <tr>
                              <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['recent']->value['body']['name'];?>
</td>
                              <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['recent']->value['body']['date'];?>
</td>
                              <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['recent']->value['body']['category'];?>
</td>
                              <td>
                                <a href="#" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['recent']->value['body']['pdf'];?>
</a>
                              </td>
                              <td>
                                <a href="#" class="btn btn-outline-primary"><?php echo $_smarty_tpl->tpl_vars['recent']->value['body']['edit'];?>
</a>
                              </td>
                              <td>
                                <a href="#" class="btn btn-outline-danger"><?php echo $_smarty_tpl->tpl_vars['recent']->value['body']['remove'];?>
</a>
                              </td>
                            </tr>
                          <?php }
}
?>
                        </tbody>
                      </table>
                    </div>
                  </div>

                </main>
              </div> <!-- /col -->
            </div> <!-- /row -->
          </div> <!-- /col -->

          <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div> <!--/row-->
  </div> <!-- /container -->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
