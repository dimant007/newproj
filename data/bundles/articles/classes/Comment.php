<?php

/**
 * Created by PhpStorm.
 * User: ditry_000
 * Date: 06.08.2015
 * Time: 15:36
 */
class Comment extends fvRoot
{
    use Trait_iWebAccess;

    function getUrl()
    {
        return "/blog/{$this->url->get()}";
    }
}