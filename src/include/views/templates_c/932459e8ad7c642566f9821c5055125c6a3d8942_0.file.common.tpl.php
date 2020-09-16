<?php
/* Smarty version 3.1.36, created on 2020-09-16 18:06:37
  from '/var/phpapp/include/views/templates/common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f62542d90fc60_05020226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '932459e8ad7c642566f9821c5055125c6a3d8942' => 
    array (
      0 => '/var/phpapp/include/views/templates/common.tpl',
      1 => 1600279585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f62542d90fc60_05020226 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php echo $_smarty_tpl->tpl_vars['css_style']->value;?>

        </style>
    </head>
    <body class="common-body">
        <header class="common-menu">
        <div>
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
            <a class="common-log-in" href="/user:tab=home">
                Log In
            </a>
            </header>
        <div class="common-contents">
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['contentsFile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <footer class="common-footer">
            <nav class="footer-nav">
                <a href="/" class="footer-link">トップページ</a>
                <a href="/articles/entrylist" class="footer-link">記事一覧</a>
                <a href="/profile" class="footer-link">著者について</a>
                <a href="/contact" class="footer-link">お問い合わせ</a>
            </nav>
            <p class="copyright-label">Copyright 2020</p>
        </footer>
    </body>
</html><?php }
}
