<script>
    var obj1 = document.getElementById("image-select");
    obj1.addEventListener("change", function(evt){
        var id = document.getElementById('selected_image');
        var image = new Image();
        image.src = evt.target.files;
    }, false);
</script>

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
                {$selected_image}
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
</div>