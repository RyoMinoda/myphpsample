<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sample Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" >
    </head>
    <body>
        <header>
        <h2 class="blog-title">Sample Blog</h2>
            <nav class="blog-header">
                <ul class="nav">
                    <li class="nav-item">
                        <a
                        {if $currentPage == "home"}
                            class= "nav-link disabled"
                        {else}
                            class= "nav-link"
                        {/if}
                         href="/">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                        {if $currentPage == "articles"}
                            class= "nav-link disabled"
                        {else}
                            class= "nav-link"
                        {/if}
                         href="articles">
                            Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                        {if $currentPage == "profile"}
                            class= "nav-link disabled"
                        {else}
                            class= "nav-link"
                        {/if}
                         href="profile">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                        {if $currentPage == "contact"}
                            class= "nav-link disabled"
                        {else}
                            class= "nav-link"
                        {/if}
                         href="contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        {include file=$contents_file}
        
        <footer>
            <nav>
                <a href="home">トップページ</a>
                <a href="articles">記事一覧</a>
                <a href="about">著者について</a>
                <a href="contact">お問い合わせ</a>
            </nav>
            <p>Copyright 2020</p>
        </footer>
    </body>
</html>