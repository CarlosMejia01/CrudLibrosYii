<?php

namespace app\controllers;


use Yii;
use yii\filters\AccessController;
use yii\web\Controller;

use app\models\FormularioForm;

class SitioController extends Controller
{

    public function actionInicio()
    {

        $model = new FormularioForm;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $suma = $model->valora+$model->valorb;
            $valorRespuesta = ("El resultado es:".$suma);

            return $this->render('inicio', ['mensaje' => $valorRespuesta, 'model' => $model]);
        }

        return $this->render('inicio', ['mensaje' => "", 'model' => $model]);
    }
}
