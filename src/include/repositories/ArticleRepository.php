<?php
    require dirname(__FILE__).'/interfaces/IArticleRepository.php';
    require dirname(__FILE__).'/../conf/db.php';

    class ArticleRepository implements IArticleRepository
    {
        function getAllArticles()
        {
            $sql = 'Select * from Article';
            return executeSql($sql);
        }

        function getArticleById($id){
            return $id;
        }

        function insertArticle($Article){
            return $Article;
        }

        function updateArticle($id, $Article){
            return $id;
        }

        function deleteArticle($id){
            return $id;
        }
    }
