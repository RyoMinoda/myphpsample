<?php
    interface IArticleRepository
    {
        public function getAllArticles();

        public function getArticleById($id);

        public function insertArticle($Article);

        public function updateArticle($id, $Article);

        public function deleteArticle($id);
    }