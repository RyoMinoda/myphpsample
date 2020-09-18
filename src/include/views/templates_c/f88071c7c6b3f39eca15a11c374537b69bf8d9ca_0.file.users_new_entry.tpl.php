<?php
/* Smarty version 3.1.36, created on 2020-09-18 02:31:45
  from '/var/phpapp/include/views/contents/users_new_entry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f641c11347fc7_83607177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f88071c7c6b3f39eca15a11c374537b69bf8d9ca' => 
    array (
      0 => '/var/phpapp/include/views/contents/users_new_entry.tpl',
      1 => 1600396300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f641c11347fc7_83607177 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var obj1 = document.getElementById("image-select");
    obj1.addEventListener("change", function(evt){
        var id = document.getElementById('selected_image');
        var image = new Image();
        image.src = evt.target.files;
    }, false);
<?php echo '</script'; ?>
>

<div class="users-new-entry-outside">
    <div class="users-new-entry-inside">
        <div class="users-new-entry-grid">
            <div class="users-new-entry-grid-title-string">
                <span>タイトル</span>
            </div>
            <div class="users-new-entry-grid-title-input">
                <input
                type="text"
                class="users-new-entry-title-input"
                placeholder="タイトル">
            </div>
            <div class="users-new-entry-grid-contents-string">
                本文
            </div>
            <div class="users-new-entry-grid-contents-textarea">
                <textarea
                class="users-new-entry-contents-textarea"
                placeholder="本文"></textarea>
            </div>
            <div class="users-new-entry-grid-image-string">
                画像
            </div>
            <div class="users-new-entry-grid-image-button">
                    <img id="selected_image" />
                    <input type="file" id="image-select" />
                <?php echo $_smarty_tpl->tpl_vars['selected_image']->value;?>

            </div>
            <div class="users-new-entry-grid-post-entry-button">
                <button class="users-new-entry-nomal-button">
                    プレビュー
                </button>
                <button class="users-new-entry-nomal-button">
                    投稿
                </button>
            </div>
        </div>
    </div>
</div><?php }
}
