<?php
/* Smarty version 3.1.36, created on 2020-09-15 11:27:50
  from '/var/phpapp/include/views/contents/article_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f60a536b49357_74077071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f105a2a84fd76d3fb0a1f4deca7eed72ca616da3' => 
    array (
      0 => '/var/phpapp/include/views/contents/article_list.tpl',
      1 => 1600168004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f60a536b49357_74077071 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="article-list-conainer">
    <h5 class="article-index-string">記事一覧</h5>
        <div class="article-list-flexbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article', false, 'myKey');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['myKey']->value => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                <a href="#" class="article-card-link">
                    <div class="article-card">
                        <div class="article-card-title">
                                <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                        </div>
                        <figure class="article-card-figure">
                            <img
                            class="article-card-image"
                            src=<?php ob_start();
echo ("/images/").($_smarty_tpl->tpl_vars['article']->value['image']);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                            alt=<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
>
                        </figure>
                        <div class="article-list-articles">
                            <?php echo mb_substr($_smarty_tpl->tpl_vars['article']->value['contents'],0,60);?>
...
                        </div>
                    </div>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
</div><?php }
}
