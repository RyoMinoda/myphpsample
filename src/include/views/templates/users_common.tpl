<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ダッシュボード</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">
        <style>
            {$style}
        </style>
    </head>
    <body class="user-common-body">
        <aside class="navigation-aside">
            <div class="users_home_list_tab"></div>
            <div class="users_home_list">
                <a href="/user:tab=home">
                    <div style={$styles['home']}>
                        ホーム
                    </div>
                </a>
            </div>
            <div class="users_home_list_tab">投稿</div>
            <div class="users_home_list">
                <a href="/user:tab=new_entry">
                    <div style={$styles['new_entry']}>
                        新規作成
                    </div>
                </a>
                <div>編集</div>
                <div>編集履歴</div>
            </div>
            <div class="users_home_list_tab">メディア</div>
            <div class="users_home_list">
                <div>ライブラリ</div>
                <div>新規登録</div>
            </div>
            <div class="users_home_list_tab">マイアカウント</div>
            <div class="users_home_list">
                <div>編集</div>
                <div>メッセージ管理</div>
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
        <div class="user-common-contents">
            {include file=$contentsFile}
        </div>
    </body>
</html>