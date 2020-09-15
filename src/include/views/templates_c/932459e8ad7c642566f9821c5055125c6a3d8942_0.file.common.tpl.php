<?php
/* Smarty version 3.1.36, created on 2020-09-15 08:17:23
  from '/var/phpapp/include/views/templates/common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f607893d48eb3_65850953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '932459e8ad7c642566f9821c5055125c6a3d8942' => 
    array (
      0 => '/var/phpapp/include/views/templates/common.tpl',
      1 => 1600157578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f607893d48eb3_65850953 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sample Blog</title>
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">
        <style>
            <?php echo $_smarty_tpl->tpl_vars['style']->value;?>

        </style>
    </head>
    <body>
        <header>
        <div class="common-menu">
            <h2 class="blog-title">Sample Blog</h2>
            <nav class="blog-header">
                <ul class="nav">
                    <li class="nav-item">
                        <a class= "nav-link" href="/">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class= "nav-link" href="/articles/entrylist">
                            Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class= "nav-link" href="/profile">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class= "nav-link" href="/contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
            </div>
            </header>
        <br>
        <div class="common-contents">
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['contentsFile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <br>
        <footer>
            <nav>
                <a href="/">トップページ</a>
                <a href="/articles/entrylist">記事一覧</a>
                <a href="/profile">著者について</a>
                <a href="/contact">お問い合わせ</a>
            </nav>
            <p>Copyright 2020</p>
        </footer>
    </body>
</html><?php }
}
