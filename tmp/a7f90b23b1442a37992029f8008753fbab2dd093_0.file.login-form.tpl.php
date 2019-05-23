<?php
/* Smarty version 3.1.33, created on 2019-05-23 15:08:39
  from 'C:\vhost\report.seo\views\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce69b57aa8f30_82725653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f90b23b1442a37992029f8008753fbab2dd093' => 
    array (
      0 => 'C:\\vhost\\report.seo\\views\\login-form.tpl',
      1 => 1558577810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce69b57aa8f30_82725653 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container d-flex flex-column m-auto">
  <main class="">
    <div class="row m-auto w-100">
      <div class="col-md-6 m-auto">
        <h1 class="h1"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        <span class="d-block mb-4 text-secondary"><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</span>
        <div class="card">
          <div class="card-body">

                        <form class="form" role="form" autocomplete="off" id="form-login" method="POST">
              <input type="text" placeholder="Username" class="form-control mb-3 bg-light" name="uname1" id="uname1" required="required">
              <input type="password" placeholder="Password" class="form-control mb-3 bg-light" id="pwd1" required="required">
              <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
            </form>

          </div> <!--/card-block-->
        </div> <!-- /form card login -->
      </div> <!-- /col -->
    </div> <!--/row-->
  </main>
</div> <!-- /container -->
<?php }
}
