<?php

include 'transformArray.php';

class ParsingPosts
{
    public $transformClass;
    public function __construct()
    {
        $this->transformClass = new transformArray();
    }
    public function getContentFromPage(string $page)
    {
        $homepage = file_get_contents($page);
        $decode = json_decode($homepage, true);
//        echo '<pre>';
//            print_r($decode);
//        echo '</pre>';
        $this->transformClass->transform($decode);
    }




}