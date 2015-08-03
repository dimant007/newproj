<?php

/**
 * Created by PhpStorm.
 * User: ditry_000
 * Date: 30.07.2015
 * Time: 12:26
 */
class Controller_Blog_Post extends fvController
{
    /**
     * @route /blog/post/{url}
     */

    function indexAction($post)
    {
        $this->view()->posted = Article::find(['post' => $post]);
    }

}