<?php
/* Smarty version 3.1.29, created on 2020-11-10 07:16:45
  from "C:\UniServerZ\www\mini_shop123456\mini_shop\templates\side_tools.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa3e5da63876_89099371',
  'file_dependency' => 
  array (
    '4fedba9beec99a9f5bbe2f9734512df6b8a4c2b2' => 
    array (
      0 => 'C:\\UniServerZ\\www\\mini_shop123456\\mini_shop\\templates\\side_tools.html',
      1 => 1604992603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa3e5da63876_89099371 ($_smarty_tpl) {
?>
<div class="alert alert-success">
  <?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>
您好！歡迎光臨<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>

 
</div>
<a href="index.php" class="btn btn-block btn-primary">回首頁</a>
<a href="user.php?op=user_display&user_sn=<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_sn'];?>
" class="btn btn-block btn-info">我的帳號</a>
<?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
    <a href="bill.php" class="btn btn-block btn-warning">我的訂單</a>
<?php }
if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
    <a href="tool.php?op=goods_form" class="btn btn-block btn-success">發布商品</a>
<?php }?>
<a href="user.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
<br>
<div class="alert alert-success">
Hello!! Welcome <?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
<br>=><?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>

 
</div>
 <?php }
}
