<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sample Blog</title>
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">
        <style>
            {$style}
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
            {include file=$contentsFile}
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
</html>