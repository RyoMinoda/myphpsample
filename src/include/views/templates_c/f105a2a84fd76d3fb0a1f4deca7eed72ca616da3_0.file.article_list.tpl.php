<?php
/* Smarty version 3.1.36, created on 2020-09-14 07:28:57
  from '/var/phpapp/include/views/contents/article_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5f1bb9621ec9_75342013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f105a2a84fd76d3fb0a1f4deca7eed72ca616da3' => 
    array (
      0 => '/var/phpapp/include/views/contents/article_list.tpl',
      1 => 1600068535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5f1bb9621ec9_75342013 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <h3>記事一覧</h3>
    <hr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article', false, 'myKey');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['myKey']->value => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
        <div key=<?php echo $_smarty_tpl->tpl_vars['myKey']->value;?>
>
            <h5><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h5>
            <div>作成日：<?php echo $_smarty_tpl->tpl_vars['article']->value['created_at'];?>
</div>
            <hr>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
