<?php
/* Smarty version 3.1.36, created on 2020-09-13 15:57:56
  from '/var/phpapp/include/views/templates/common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5e41841225a3_32150592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '932459e8ad7c642566f9821c5055125c6a3d8942' => 
    array (
      0 => '/var/phpapp/include/views/templates/common.tpl',
      1 => 1600011487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5e41841225a3_32150592 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sample Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" >
    </head>
    <body>
        <header>
        <h2 class="blog-title">Sample Blog</h2>
            <nav class="blog-header">
                <ul class="nav">
                    <li class="nav-item">
                        <a
                        <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == "home") {?>
                            class= "nav-link disabled"
                        <?php } else { ?>
                            class= "nav-link"
                        <?php }?>
                         href="/">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                        <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == "articles") {?>
                            class= "nav-link disabled"
                        <?php } else { ?>
                            class= "nav-link"
                        <?php }?>
                         href="articles">
                            Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                        <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == "profile") {?>
                            class= "nav-link disabled"
                        <?php } else { ?>
                            class= "nav-link"
                        <?php }?>
                         href="profile">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                        <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == "contact") {?>
                            class= "nav-link disabled"
                        <?php } else { ?>
                            class= "nav-link"
                        <?php }?>
                         href="contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['contents_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        
        <footer>
            <nav>
                <a href="home">トップページ</a>
                <a href="articles">記事一覧</a>
                <a href="about">著者について</a>
                <a href="contact">お問い合わせ</a>
            </nav>
            <p>Copyright 2020</p>
        </footer>
    </body>
</html><?php }
}
