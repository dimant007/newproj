<?php

/**
 * Created by PhpStorm.
 * User: ditry_000
 * Date: 29.07.2015
 * Time: 16:11
 */
class Controller_Blog_List extends fvController
{
    /**
     * @route /blogs
     */

    function indexAction()
    {
        $this->view()->articles = Article::findAll();

    }
}