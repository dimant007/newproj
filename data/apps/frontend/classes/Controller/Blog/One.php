<?php

/**
 * Created by PhpStorm.
 * User: ditry_000
 * Date: 29.07.2015
 * Time: 16:11
 */
class Controller_Blog_One extends fvController
{
    /**
     * @route /blog/{$url}
     * @converter $url Entity(Article, url)
     */

    function indexAction(Article $entity)
    {
        $this->view()->article = $entity;
    }

}