<div class="article-list-conainer">
    <h5 class="article-index-string">記事一覧</h5>
        <div class="article-list-flexbox">
            {foreach from=$articles key=myKey item=article}
                <a href="#" class="article-card-link">
                    <div class="article-card">
                        <div class="article-card-title">
                                {$article.title}
                        </div>
                        <figure class="article-card-figure">
                            <img
                                class="article-card-image"
                                src={{"/images/"|cat:$article.image}}
                                onerror="this.src='/images/no_image.jpg'"
                                alt={$article.image}>
                        </figure>
                        <div class="article-list-articles">
                            {mb_substr($article.contents, 0, 60)}...
                        </div>
                    </div>
                </a>
            {/foreach}
        </div>
</div>