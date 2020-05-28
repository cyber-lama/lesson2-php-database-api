<?php


include 'app/components/ParsingPosts.php';


$showContentPage = new ParsingPosts();

try {
    $showContentPage->getContentFromPage('https://jsonplaceholder.typicode.com/users');
} catch (\RuntimeException $e) {
    echo $e->getMessage() . "\n";
} catch (Exception $e) {
    die($e->getMessage());
}