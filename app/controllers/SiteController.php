<?php

namespace app\controllers;

use Yii;
use yii\easyii\models\Setting;
use yii\web\Controller;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Setting::get('admin_email'))) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('index',['contactForm'=>$model]);
    }
}