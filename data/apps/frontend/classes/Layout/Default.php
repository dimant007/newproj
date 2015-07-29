<?php

class Layout_Default extends fvLayout
{
    function __construct()
    {
        $this->view()->lang = 'ru';
        //$this->view()->lang = Language::getManager()->getCurrentLanguage()->code;

        $this->addCSS([
            "/theme/stylesheets/bootstrap.css",
            "/theme/stylesheets/foundation.css",
            "/theme/stylesheets/style.css"
        ]);

        $this->addJS([
            "/theme/scripts/common.js"
        ]);
    }

}