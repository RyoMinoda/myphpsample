<?php
    function ReadImage($path){
        header('Content-type: image/png');
        header('Content-type: image/gif');
        header('Content-type: image/bmp');
        return file_get_contents(dirname(__FILE__).'/'.$path);
    }