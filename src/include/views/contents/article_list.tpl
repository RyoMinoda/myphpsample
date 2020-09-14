<div>
    <h3>記事一覧</h3>
    {foreach from=$articles key=myKey item=article}
        <div key={$myKey}>
            <h5>{$article.title}</h5>
        </div>
    {/foreach}
</div>