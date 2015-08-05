<?php

/**
 * Created by PhpStorm.
 * User: ditry_000
 * Date: 03.08.2015
 * Time: 16:12
 */
class Controller_Blog_Save extends fvController
{
    /**
     * @route /blog/save
     */
    function indexAction()
    {
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

                return implode(", ", $result);
            }
        }
    }
}
