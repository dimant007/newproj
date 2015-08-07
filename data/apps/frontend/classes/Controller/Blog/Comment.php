<?php

/**
 * Created by PhpStorm.
 * User: ditry_000
 * Date: 06.08.2015
 * Time: 16:21
 */
class Controller_Blog_Comment extends fvController
{

    /**
     * @route /blog/{$url}
     * @converter $url Entity(Comment, url)
     */

    function indexAction() {

        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getRequestParameter('data', 'array', []);
            $blog = new Article($data);
            try {
                if ($blog->isValid()) {
                    $blog->save();
                    return 'saved';
                }

                throw new Exception('error');
            } catch (Exception $e) {
                $result = [];
                foreach($blog->getFields() as $key=>$field) {
                    if(!$field->isValid()) {
                        echo $key;
                        $result[] = $key;
                    }
                }

                return (string)$comment->widget();
            }
        }
    }
}