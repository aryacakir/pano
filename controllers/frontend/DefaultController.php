<?php

namespace kouosl\pano\controllers\frontend;


class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
