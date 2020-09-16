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
            {$css_style}
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
                <a href="/user:tab=edit_entry">
                    <div style={$styles['edit_entry']}>
                        編集
                    </div>
                </a>
                <a href="/user:tab=history">
                    <div style={$styles['history']}>
                        閲覧履歴
                    </div>
                </a>
            </div>
            <div class="users_home_list_tab">メディア</div>
            <div class="users_home_list">
                <a href="/user:tab=media_library">
                    <div style={$styles['media_library']}>
                        ライブラリ
                    </div>
                </a>
                <a href="/user:tab=new_media">
                    <div style={$styles['new_media']}>
                        新規登録
                    </div>
                </a>
            </div>
            <div class="users_home_list_tab">マイアカウント</div>
            <div class="users_home_list">
                <a href="/user:tab=edit_profile">
                    <div style={$styles['edit_profile']}>
                        編集
                    </div>
                </a>
                <a href="/user:tab=message">
                <div style={$styles['message']}>
                        メッセージ管理
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
        <div class="user-common-contents">
            {include file=$contentsFile}
        </div>
    </body>
</html>