<?php
/* Smarty version 3.1.36, created on 2020-09-13 04:26:41
  from '/var/phpapp/include/views/templates/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5d9f81169735_41551732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '463ef252edf2e1d889a7c17e537295db1181fe05' => 
    array (
      0 => '/var/phpapp/include/views/templates/test.tpl',
      1 => 1599971199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d9f81169735_41551732 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>サンプル</title>
    </head>
    <body>
    <ul>
        <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 10; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
回目
        <?php
}
}
?>
        <li><?php echo $_smarty_tpl->tpl_vars['test1']->value;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['test2']->value;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['test3']->value;?>
</li>
    </ul>
    </body>
</html><?php }
}
