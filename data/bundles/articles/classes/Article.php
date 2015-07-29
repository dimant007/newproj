<?php

/**
 * Created by PhpStorm.
 * User: ditry_000
 * Date: 29.07.2015
 * Time: 12:00
 */
class Article extends fvRoot
{

    function getUrl()
    {
        return fvUrlGenerator::get('blog-one', ['url' => $this->url->get()]);
    }

}