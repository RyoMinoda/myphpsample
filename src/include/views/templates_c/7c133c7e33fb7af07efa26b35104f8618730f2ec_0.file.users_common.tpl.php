<?php
/* Smarty version 3.1.36, created on 2020-09-17 13:37:05
  from '/var/phpapp/include/views/templates/users_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f6366811c1fe4_47376754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c133c7e33fb7af07efa26b35104f8618730f2ec' => 
    array (
      0 => '/var/phpapp/include/views/templates/users_common.tpl',
      1 => 1600349820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6366811c1fe4_47376754 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ダッシュボード</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">
        <style>
            <?php echo $_smarty_tpl->tpl_vars['css_style']->value;?>

        </style>
    </head>
    <body>
        <div class="user-common-body">
            <div class="user-common-grid-header">
                <aside class="navigation-aside">
                    <div class="users_home_list_tab"></div>
                    <div class="users_home_list">
                        <a href="/user:tab=home">
                            <div style=<?php echo $_smarty_tpl->tpl_vars['styles']->value['home'];?>
>
                                ホーム
                            </div>
                        </a>
                    </div>
                    <div class="users_home_list_tab">投稿</div>
                    <div class="users_home_list">
                        <a href="/user:tab=new_entry">
                            <div style=<?php echo $_smarty_tpl->tpl_vars['styles']->value['new_entry'];?>
>
                                新規作成
                            </div>
                        </a>
                        <a href="/user:tab=edit_entry">
                            <div style=<?php echo $_smarty_tpl->tpl_vars['styles']->value['edit_entry'];?>
>
                                編集
                            </div>
                        </a>
                        <a href="/user:tab=history">
                            <div style=<?php echo $_smarty_tpl->tpl_vars['styles']->value['history'];?>
>
                                閲覧履歴
                            </div>
                        </a>
                    </div>
                    <div class="users_home_list_tab">メディア</div>
                    <div class="users_home_list">
                        <a href="/user:tab=media_library">
                            <div style=<?php echo $_smarty_tpl->tpl_vars['styles']->value['media_library'];?>
>
                                ライブラリ
                            </div>
                        </a>
                        <a href="/user:tab=new_media">
                            <div style=<?php echo $_smarty_tpl->tpl_vars['styles']->value['new_media'];?>
>
                                新規登録
                            </div>
                        </a>
                    </div>
                    <div class="users_home_list_tab">マイアカウント</div>
                    <div class="users_home_list">
                        <a href="/user:tab=edit_profile">
                            <div style=<?php echo $_smarty_tpl->tpl_vars['styles']->value['edit_profile'];?>
>
                                編集
                            </div>
                        </a>
                        <a href="/user:tab=message">
                            <div style=<?php echo $_smarty_tpl->tpl_vars['styles']->value['message'];?>
>
                                メッセージ管理
                                <span class="user-common-message">
                                    2
                                </span>
                            </div>
                        </a>
                    </div>
                    <br><br>
                    <div class="users_home_list">
                        <a href="/">
                            <div>
                                ログアウト
                            </div>
                        </a>
                    </div>
                    <br><br>
                </aside>
            </div>
            <div class="user-common-grid-contents">
                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['contentsFile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
    </body>
</html><?php }
}
