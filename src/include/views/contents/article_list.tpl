<div>
    <h3>記事一覧</h3>
    <hr>
    {foreach from=$articles key=myKey item=article}
        <div key={$myKey}>
            <h5>{$article.title}</h5>
            <div>作成日：{$article.created_at}</div>
            <hr>
        </div>
    {/foreach}
</div>