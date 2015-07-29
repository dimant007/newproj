<?php

class Controller_Home extends fvController
{

    /**
     * @route /
     */
    function indexAction()
    {
        $this->view()->articles = Article::findAll();
    }

}