<?php

namespace Baraveli\Container;

require_once '../vendor/autoload.php';

use Baraveli\Container\Container;

class ArticleModel
{
    public $title;
    public $content;
    public $published_date;
}

Container::bind('article', new ArticleModel);

$test = Container::get('article');
$test->title = 'test title';
$test->content = 'Hello this is body';
$test->published_date = '2019';

var_dump($test);
