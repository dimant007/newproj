<?php

/**
 * Created by PhpStorm.
 * User: ditry_000
 * Date: 29.07.2015
 * Time: 12:00
 */
class Article extends fvRoot
{
    use Trait_iWebAccess;

    function getUrl()
    {
        return "/blog/{$this->url->get()}";
    }

    function newPost()
    {
        return fvUrlGenerator::get('blog-post', ['url' => $this->url->get()]);
    }

}